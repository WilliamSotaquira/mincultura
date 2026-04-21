import argparse
import datetime as dt
import json
import pathlib
import re
import unicodedata
from collections import Counter, defaultdict

import openpyxl


THEME_ORDER = [
    "Somos diversidad lingüística",
    "Somos un país pluriétnico y multicultural",
    "Somos economías populares",
    "Somos cultura de paz",
    "Somos territorios bioculturales y economías populares",
    "Somos lenguas de Colombia, señas e inclusión",
    "Somos territorios bioculturales",
]

THEME_META = {
    "Somos diversidad lingüística": {
        "symbol": "+",
        "lead": "Lenguas, oralidades y memorias que preservan conocimientos, relatos y formas propias de nombrar el mundo.",
        "copy": "Aquí se reúnen contenidos sobre lenguas nativas, documentación lingüística, tradición oral y repositorios que fortalecen la memoria viva desde múltiples pueblos y territorios.",
    },
    "Somos un país pluriétnico y multicultural": {
        "symbol": "✦",
        "lead": "Relatos campesinos, regionales y comunitarios que amplían la mirada sobre la diversidad cultural del país.",
        "copy": "Esta temática integra piezas que reconocen identidades rurales, memorias colectivas, expresiones sonoras y procesos de representación cultural construidos desde distintos contextos territoriales.",
    },
    "Somos economías populares": {
        "symbol": "◌",
        "lead": "Historias de trabajo, oficio y creación que muestran cómo la cultura también circula como sustento cotidiano.",
        "copy": "La selección agrupa videoclips y piezas audiovisuales donde las economías populares aparecen como una práctica viva, territorial y profundamente conectada con identidades locales.",
    },
    "Somos cultura de paz": {
        "symbol": "∞",
        "lead": "Procesos narrativos y comunitarios que ponen en circulación memoria, participación y construcción de tejido social.",
        "copy": "En esta línea aparecen contenidos documentales, sonoros y transmedia orientados a la convivencia, la memoria colectiva, el diálogo intercultural y la participación desde los territorios.",
    },
    "Somos territorios bioculturales y economías populares": {
        "symbol": "✳",
        "lead": "Saberes, oficios y prácticas que articulan territorio, biodiversidad, producción cultural y vida comunitaria.",
        "copy": "La temática conecta series, cápsulas y relatos donde convergen economías locales, patrimonio, trabajo colectivo y formas de habitar los territorios desde una perspectiva biocultural.",
    },
    "Somos lenguas de Colombia, señas e inclusión": {
        "symbol": "✷",
        "lead": "Publicaciones y relatos que visibilizan inclusión, diversidad lingüística y transmisión de saberes en distintos formatos editoriales.",
        "copy": "Este grupo organiza contenidos centrados en la pervivencia de lenguas, memoria ancestral, documentación cultural y circulación editorial accesible para distintos públicos.",
    },
    "Somos territorios bioculturales": {
        "symbol": "↗",
        "lead": "Documentales, podcasts y piezas audiovisuales que leen el territorio como espacio de memoria, agua, oficio y sostenibilidad.",
        "copy": "Aquí se clasifican contenidos donde la vida cotidiana, los ecosistemas, los oficios tradicionales y las tramas locales se narran desde una relación estrecha entre cultura y naturaleza.",
    },
}

EXCLUDED_AVAILABILITY_FLAGS = (
    "NO CUENTA CON AUTORIZACIÓN",
    "PENDIENTE",
)


def clean(value):
    if value is None:
        return ""
    text = str(value).replace("\r", "\n")
    text = re.sub(r"\n{2,}", "\n\n", text)
    text = re.sub(r"[ \t]+", " ", text)
    return text.strip()


def clean_inline(value):
    return re.sub(r"\s+", " ", clean(value)).strip()


def split_keywords(value):
    return [part for part in (re.sub(r"\s+", " ", item).strip(" ,;") for item in clean(value).split("\n")) if part]


def slugify(value):
    value = unicodedata.normalize("NFKD", value)
    value = "".join(ch for ch in value if not unicodedata.combining(ch))
    value = re.sub(r"[^a-z0-9]+", "-", value.lower())
    return value.strip("-") or "item"


def normalize_link(value):
    link = clean_inline(value)
    if not link:
        return ""
    if re.match(r"^https?://", link, re.I):
        return link
    if re.match(r"^[\w.-]+\.[a-z]{2,}(/.*)?$", link, re.I):
        return f"https://{link}"
    return ""


def summarize_theme(name, items):
    types = Counter(item["type"] for item in items if item["type"])
    keywords = Counter()
    for item in items:
        keywords.update(item["keywords"])

    meta = THEME_META.get(name, {})
    return {
        "slug": slugify(name),
        "name": name,
        "symbol": meta.get("symbol", "•"),
        "lead": meta.get("lead", f"{len(items)} contenidos clasificados para consulta temática."),
        "copy": meta.get("copy", "Explora los contenidos asociados a esta temática y filtra por términos específicos para encontrar piezas relacionadas."),
        "count": len(items),
        "types": [value for value, _ in types.most_common(4)],
        "keywords": [value for value, _ in keywords.most_common(6)],
    }


def build_payload(source_path):
    workbook = openpyxl.load_workbook(source_path, data_only=True)
    worksheet = workbook["LANDING X TEMÁTICA"]

    records = []
    last_direction = ""
    last_theme = ""
    last_message = ""

    for row_number, row in enumerate(worksheet.iter_rows(values_only=True), start=1):
        if row_number == 1:
            continue

        direction = clean_inline(row[0]) or last_direction
        theme = clean_inline(row[1]) or last_theme
        title = clean_inline(row[2])
        content_type = clean_inline(row[3])
        keywords = split_keywords(row[4])
        description = clean(row[5])
        link_raw = clean_inline(row[6])
        force_message = clean(row[7]) or last_message
        asset_raw = clean_inline(row[8])

        if clean_inline(row[0]):
            last_direction = direction
        if clean_inline(row[1]):
            last_theme = theme
        if clean(row[7]):
            last_message = force_message

        if not theme or not title:
            continue

        link = normalize_link(link_raw)
        asset_link = normalize_link(asset_raw)
        availability_note = ""

        for candidate in (link_raw, asset_raw):
            upper = candidate.upper()
            if candidate and not normalize_link(candidate) and any(flag in upper for flag in ("PENDIENTE", "NO CUENTA", "NO HAY", "IMPRESO", "SIN ENLACE", "AÚN NO HAY LINK", "AUN NO HAY LINK")):
                availability_note = candidate
                break

        if any(flag in availability_note.upper() for flag in EXCLUDED_AVAILABILITY_FLAGS):
            continue

        search_text = clean_inline(" ".join(part for part in (
            theme,
            direction,
            title,
            content_type,
            description,
            force_message,
            " ".join(keywords),
            link_raw,
            asset_raw,
        ) if part))

        records.append({
            "id": f"{slugify(theme)}-{row_number}",
            "row": row_number,
            "theme": theme,
            "theme_slug": slugify(theme),
            "responsable": direction,
            "title": title,
            "type": content_type,
            "description": description,
            "keywords": keywords,
            "link": link,
            "asset_link": asset_link,
            "force_message": force_message,
            "availability_note": availability_note,
            "search_text": search_text,
        })

    grouped = defaultdict(list)
    for record in records:
        grouped[record["theme"]].append(record)

    themes = []
    for theme in THEME_ORDER:
        if theme in grouped:
            themes.append(summarize_theme(theme, grouped[theme]))

    return {
        "updated_at": dt.datetime.now().isoformat(timespec="seconds"),
        "source_file": pathlib.Path(source_path).name,
        "total_items": len(records),
        "themes": themes,
        "items": records,
    }


def main():
    repo_root = pathlib.Path(__file__).resolve().parents[1]
    parser = argparse.ArgumentParser(description="Exporta la matriz de Casa Común a JSON para la landing.")
    parser.add_argument("source", help="Ruta del archivo XLSX fuente.")
    parser.add_argument(
        "--output",
        default=str(repo_root / "resources" / "data" / "casa-comun-matriz.json"),
        help="Ruta de salida del JSON generado.",
    )
    args = parser.parse_args()

    output_path = pathlib.Path(args.output)
    output_path.parent.mkdir(parents=True, exist_ok=True)
    payload = build_payload(args.source)
    output_path.write_text(json.dumps(payload, ensure_ascii=True, indent=2), encoding="utf-8")
    print(output_path)
    print(payload["total_items"])


if __name__ == "__main__":
    main()
