@php
    $catalogPath = resource_path('data/casa-comun-matriz.json');
    $catalog = ['themes' => [], 'items' => [], 'total_items' => 0];

    if (is_file($catalogPath)) {
        $catalog = json_decode(file_get_contents($catalogPath), true) ?: $catalog;
    }

    $catalogThemes = $catalog['themes'] ?? [];
    $catalogItems = $catalog['items'] ?? [];
    $catalogTotal = $catalog['total_items'] ?? count($catalogItems);
    $defaultTheme = $catalogThemes[0] ?? [
        'slug' => 'somos-diversidad-linguistica',
        'name' => 'Somos diversidad lingüística',
        'lead' => '',
        'copy' => '',
        'count' => 0,
        'types' => [],
        'keywords' => [],
    ];
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casa Común</title>
    <meta name="description" content="Casa Común: territorios de encuentro, temáticas y destacados culturales.">
    <style>
        @font-face{font-family:'Alternate Gothic';src:url('{{ asset('assets/casa-comun/AlternateGothicExCondATF-Bold.otf') }}') format('opentype');font-weight:700;font-style:normal}
        @font-face{font-family:'Google Sans';src:url('{{ asset('assets/casa-comun/GoogleSans-Regular.ttf') }}') format('truetype');font-weight:400;font-style:normal}
        @font-face{font-family:'Google Sans';src:url('{{ asset('assets/casa-comun/GoogleSans-Bold.ttf') }}') format('truetype');font-weight:700;font-style:normal}

        :root{--ink:#06090f;--poster:#5b6484;--poster-deep:#4e5876;--cream:#f4ebbe;--butter:#eed367;--teal:#58d7c9;--teal-deep:#2fc2b0;--mint:#70d7b5;--mint-dark:#4cc4ab;--pink:#e88bc1;--orange:#ef9141;--red:#c85c4f;--aqua:#4cd0c7;--line:rgba(18,26,35,.16);--text:#162127;--shadow:0 28px 70px rgba(0,0,0,.28);--font-scale:1;--focus-ring:#fff2a8}
        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{margin:0;min-width:320px;background:#020305;font-family:'Google Sans',sans-serif;color:var(--cream);font-size:calc(16px * var(--font-scale));line-height:1.5}
        a{color:inherit;text-decoration:none}
        img,video,svg{display:block;max-width:100%}
        a:focus-visible,button:focus-visible,input:focus-visible,summary:focus-visible{outline:3px solid var(--focus-ring);outline-offset:3px}
        .skip-link{position:fixed;left:14px;top:14px;z-index:70;padding:12px 16px;border-radius:12px;background:#111823;color:#fff5ce;font-size:13px;font-weight:700;transform:translateY(-150%);transition:transform .18s ease}
        .skip-link:focus{transform:translateY(0)}
        .accessibility-bar{position:sticky;top:0;z-index:60;display:flex;justify-content:center;padding:10px 14px;background:rgba(6,9,15,.88);backdrop-filter:blur(10px);border-bottom:1px solid rgba(244,235,190,.12)}
        .accessibility-tools{display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:8px;width:min(100%,1040px)}
        .accessibility-label{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(244,235,190,.72)}
        .accessibility-btn{display:inline-flex;align-items:center;justify-content:center;min-height:36px;padding:0 14px;border:1px solid rgba(244,235,190,.24);border-radius:999px;background:rgba(255,255,255,.06);color:var(--cream);font-size:12px;font-weight:700;letter-spacing:.05em;cursor:pointer}
        .accessibility-btn.is-active{background:var(--cream);color:#172029}
        .page{position:relative;overflow-x:clip;background:#49556f}
        .page::before{content:"";position:absolute;inset:0;background:repeating-linear-gradient(180deg,rgba(255,255,255,.13) 0 1px,transparent 1px 5px);mix-blend-mode:screen;opacity:.55;pointer-events:none;z-index:0}
        .page > *{position:relative;z-index:1}
        .wrap,.wrap-contained{width:min(100%,1200px);margin:0 auto}
        .wrap-full{width:100%;max-width:none;margin:0 auto}

        .poster-hero{position:relative;background:#49556f;overflow:hidden}
        .poster-hero::before{content:"";position:absolute;inset:0;background:repeating-linear-gradient(180deg,rgba(255,255,255,.13) 0 1px,transparent 1px 5px);mix-blend-mode:screen;opacity:.55;pointer-events:none}
        .sky-media{position:absolute;inset:0 0 auto;height:380px;overflow:hidden}
        .sky-media img,.sky-media video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
        .sky-media img{filter:saturate(.65) brightness(1.05)}
        .sky-media video{opacity:.22;mix-blend-mode:multiply}

        .poster-shell{position:relative;padding:0 0 28px}
        .hero-intro{position:relative;z-index:6;display:grid;grid-template-columns:minmax(0,1fr) auto;align-items:end;gap:16px;width:min(100% - 48px,1180px);margin:0 auto;padding:24px 0 0}
        .hero-copy{max-width:560px}
        .hero-kicker{margin:0 0 10px;font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(244,235,190,.72)}
        .hero-copy h1{margin:0;font-family:'Alternate Gothic',sans-serif;font-size:clamp(54px,7vw,96px);line-height:.92;letter-spacing:.03em;text-transform:uppercase;color:var(--cream);text-wrap:balance}
        .hero-copy p{margin:14px 0 0;max-width:44ch;font-size:18px;line-height:1.6;color:rgba(244,235,190,.88)}
        .hero-actions{display:flex;flex-wrap:wrap;gap:10px;align-items:center}
        .hero-btn{display:inline-flex;align-items:center;justify-content:center;min-height:42px;padding:0 18px;border-radius:999px;background:var(--cream);color:#172029;font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase}
        .hero-btn.is-secondary{background:rgba(255,255,255,.08);color:var(--cream);border:1px solid rgba(244,235,190,.24)}


        .collage-left,.collage-right{display:none}
        .collage-left{left:-126px;top:54px;width:min(54vw,620px);height:700px}
        .performer-ghost,.performer-main{position:absolute;inset:0}
        .performer-ghost img,.performer-main img{width:100%;height:100%;object-fit:contain;object-position:left bottom}
        .performer-ghost{left:10px;top:12px;opacity:.18;mix-blend-mode:screen;filter:hue-rotate(-8deg) saturate(1.08) brightness(.88)}
        .performer-main{filter:drop-shadow(0 24px 26px rgba(17,22,41,.28))}
        .performer-main img{opacity:.96}
        .collage-right{right:-72px;top:160px;width:min(34vw,320px);height:640px;opacity:.78}
        .collage-right::before{content:"";position:absolute;left:-32px;top:118px;width:112px;height:250px;background:linear-gradient(180deg,rgba(255,255,255,.24),transparent)}
        .right-ghost,.right-main{position:absolute;inset:0}
        .right-ghost img,.right-main img{width:100%;height:100%;object-fit:contain;object-position:right bottom}
        .right-ghost{left:-12px;top:-10px;opacity:.3;mix-blend-mode:screen;filter:hue-rotate(6deg) saturate(1.1) brightness(.92)}
        .right-main{filter:drop-shadow(-12px 22px 24px rgba(17,22,41,.16))}
        .right-main img{opacity:.82}

        .house-panel{position:relative;z-index:5;width:min(100% - 48px,1180px);height:clamp(320px,35.3vw,420px);margin:0 auto 0;padding:0;background:transparent;clip-path:polygon(50% 0,100% 14%,100% 100%,0 100%,0 14%);box-shadow:none;overflow:hidden}
        .house-panel::before,.house-panel::after{content:none}
        .roof-carousel{position:absolute;inset:0;z-index:3;overflow:hidden}
        .roof-slide{position:absolute;inset:0;opacity:0;transition:opacity .55s ease}
        .roof-slide.is-active{opacity:1}
        .roof-slide::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(255,255,255,.03),transparent 62%)}
        .roof-slide-media{width:100%;height:100%;object-fit:cover;object-position:center center}
        .roof-dots{position:absolute;left:50%;bottom:18px;z-index:6;display:flex;gap:10px;transform:translateX(-50%)}
        .roof-dot{width:12px;height:12px;padding:0;border:0;border-radius:999px;background:rgba(244,235,190,.34);box-shadow:0 0 0 1px rgba(9,14,18,.18);cursor:pointer;transition:transform .18s ease,background-color .18s ease}
        .roof-dot[aria-selected="true"]{background:var(--cream);transform:scale(1.16)}
        .roof-dot:focus-visible{outline:2px solid rgba(244,235,190,.92);outline-offset:3px}

        .themes-section{position:relative;z-index:4;padding:72px 0 34px}
        .themes-title{position:relative;z-index:4;max-width:1120px;margin:0 auto 42px;text-align:right;font-family:'Alternate Gothic',sans-serif;font-size:48px;letter-spacing:.05em;text-transform:uppercase;color:var(--cream)}
        .themes-summary{max-width:1120px;margin:0 auto 18px;padding:0 0 4px;font-size:16px;line-height:1.65;color:rgba(244,235,190,.84)}
        .themes-stage{position:relative;max-width:1120px;margin:0 auto;padding-top:14px}
        .board{position:relative;z-index:2;overflow:visible;color:var(--text);background:linear-gradient(180deg,var(--theme-chip-color, var(--mint)) 0 232px,var(--mint-dark) 232px 100%);box-shadow:0 22px 44px rgba(14,27,34,.28);transition:background .2s ease}
        .board::before{content:"";position:absolute;left:0;right:0;top:0;height:38px;background:var(--theme-chip-color, var(--mint));z-index:4;pointer-events:none}
        .chip-row{position:absolute;left:14px;right:14px;top:-54px;display:grid;grid-template-columns:repeat(var(--chip-count,8),1fr);gap:8px;z-index:3}
        .board-layers{position:absolute;inset:0;z-index:1;pointer-events:none}
        .board-collage-left{position:absolute;left:-102px;top:-546px;width:min(71vw,700px);height:1060px}
        .board-collage-right{position:absolute;right:-112px;top:-102px;width:min(24vw,214px);height:382px;opacity:.9}
        .board-panel,.topic-grid{position:relative;z-index:2}
        .chip{position:relative;z-index:1;display:flex;align-items:center;justify-content:center;height:58px;padding:12px 6px 0;border:0;clip-path:polygon(50% 0,100% 32%,100% 100%,0 100%,0 32%);font-size:18px;font-weight:700;line-height:1;color:#1c2730;background:transparent;cursor:pointer;transition:transform .18s ease,box-shadow .18s ease,height .18s ease,padding-top .18s ease,z-index .18s ease}
        .chip:hover{transform:translateY(-2px)}
        .chip:focus-visible{outline:2px solid rgba(24,33,39,.7);outline-offset:2px}
        .chip[aria-selected="true"]{z-index:5;height:76px;padding-top:18px;transform:translateY(-8px);filter:none;box-shadow:none}
        .chip:nth-child(1){background:#f3d44f}
        .chip:nth-child(2){background:#76d677}
        .chip:nth-child(3){background:#f2a857}
        .chip:nth-child(4){background:#f5a1cf}
        .chip:nth-child(5){background:#ff9464}
        .chip:nth-child(6){background:#d1ef8d}
        .chip:nth-child(7){background:#b8e6ef}
        .chip:nth-child(8){background:#c8dbef}
        .board-panel{display:block;padding-top:26px;background:var(--theme-chip-color, rgba(255,255,255,.16));transition:background-color .2s ease}
        .board-intro{display:grid;grid-template-columns:1.2fr .92fr;align-items:stretch;min-height:196px;border-bottom:1px solid var(--line);background:transparent}
        .board-copy{display:flex;flex-direction:column;justify-content:flex-start;padding:22px 18px 14px}
        .board-copy:first-child{border-right:1px solid var(--line)}
        .board-copy-search{gap:10px}
        .board-eyebrow{margin:0 0 8px;font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(20,33,38,.56)}
        .board-copy h2{margin:0;font-family:'Alternate Gothic',sans-serif;font-size:40px;line-height:.96;letter-spacing:.02em;text-transform:uppercase}
        .board-copy p{margin:0;font-size:17px;line-height:1.58;color:rgba(20,33,38,.86)}
        .board-copy .lead{margin-top:10px;max-width:34ch}
        .catalog-stats{display:flex;flex-wrap:wrap;gap:8px}
        .stat-pill{display:inline-flex;align-items:center;min-height:34px;padding:0 14px;border-radius:999px;background:rgba(255,255,255,.22);font-size:13px;font-weight:700;letter-spacing:.04em;text-transform:uppercase;color:#172128}
        .catalog-keywords{font-size:15px;line-height:1.6;color:rgba(20,33,38,.72)}
        .catalog-layout{position:relative;border-top:1px solid var(--line)}
        .catalog-main{min-width:0}
        .catalog-main-toolbar{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:12px;padding:14px 16px;border-bottom:1px solid rgba(20,33,38,.12);background:rgba(255,255,255,.08)}
        .catalog-toolbar-main-actions{display:flex;flex-wrap:wrap;align-items:center;gap:10px}
        .catalog-sidebar-toggle{display:inline-flex;align-items:center;justify-content:center;min-height:40px;padding:0 16px;border:1px solid rgba(20,33,38,.16);border-radius:999px;background:rgba(255,255,255,.42);font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:#162127;cursor:pointer}
        .catalog-sidebar-toggle:hover{background:rgba(255,255,255,.56)}
        .catalog-sidebar-toggle:focus-visible{outline:2px solid rgba(24,33,39,.46);outline-offset:2px}
        .catalog-sidebar-backdrop{position:fixed;inset:0;background:rgba(7,12,16,.38);backdrop-filter:blur(2px);opacity:0;visibility:hidden;pointer-events:none;transition:opacity .22s ease,visibility .22s linear;z-index:44}
        .catalog-layout.is-sidebar-open .catalog-sidebar-backdrop{opacity:1;visibility:visible;pointer-events:auto}
        .catalog-tools{position:fixed;top:0;right:0;bottom:0;z-index:45;display:flex;flex-direction:column;gap:14px;width:min(420px,100vw);padding:18px;border-left:1px solid rgba(20,33,38,.12);background:rgba(113, 224, 197, .96);box-shadow:-20px 0 48px rgba(0,0,0,.24);overflow-y:auto;transform:translateX(100%);transition:transform .24s ease}
        .catalog-layout.is-sidebar-open .catalog-tools{transform:translateX(0)}
        .catalog-sidebar-head{display:flex;align-items:center;justify-content:space-between;gap:12px}
        .catalog-sidebar-title{font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#162127}
        .catalog-sidebar-close{display:inline-flex;align-items:center;justify-content:center;min-width:38px;height:38px;padding:0;border:1px solid rgba(20,33,38,.16);border-radius:999px;background:rgba(255,255,255,.34);font-size:18px;line-height:1;color:#162127;cursor:pointer}
        .catalog-sidebar-close:focus-visible{outline:2px solid rgba(24,33,39,.46);outline-offset:2px}
        .catalog-sidebar-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:auto;padding-top:6px}
        .catalog-sidebar-accept{display:inline-flex;align-items:center;justify-content:center;min-height:42px;padding:0 18px;border:0;border-radius:999px;background:rgba(20,33,38,.92);font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:#fff5ce;cursor:pointer}
        .catalog-sidebar-accept:focus-visible{outline:2px solid rgba(24,33,39,.46);outline-offset:2px}
        .catalog-search-row{display:grid;grid-template-columns:1fr;gap:12px;align-items:end}
        .catalog-search-compact{display:flex;flex-direction:column;gap:6px}
        .catalog-search-label{font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:rgba(20,33,38,.66)}
        .catalog-search-compact input{width:100%;min-height:50px;padding:0 16px;border:1px solid rgba(20,33,38,.14);background:rgba(255,255,255,.3);font-size:18px;color:#10171c}
        .catalog-search-compact input::placeholder{color:rgba(16,23,28,.52)}
        .catalog-search-compact input:focus-visible{outline:2px solid rgba(24,33,39,.46);outline-offset:2px}
        .catalog-search-copy{font-size:14px;line-height:1.55;color:rgba(20,33,38,.68)}
        .catalog-filters-shell{border:1px solid rgba(20,33,38,.12);background:rgba(255,255,255,.12)}
        .catalog-filters-shell[open]{background:rgba(255,255,255,.18)}
        .catalog-filters-shell summary{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:12px 14px;cursor:pointer;list-style:none}
        .catalog-filters-shell summary::-webkit-details-marker{display:none}
        .catalog-filters-shell summary span{font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#162127}
        .catalog-filters-shell summary strong{display:inline-flex;align-items:center;justify-content:center;min-width:34px;height:34px;padding:0 10px;border-radius:999px;background:rgba(20,33,38,.12);font-size:12px;color:#162127}
        .catalog-filters-content{display:flex;flex-direction:column;gap:12px;padding:0 14px 14px}
        .catalog-search{display:flex;flex-direction:column;gap:8px}
        .catalog-search span{font-size:10px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:rgba(20,33,38,.66)}
        .catalog-search input{width:100%;min-height:42px;padding:0 14px;border:1px solid rgba(20,33,38,.14);background:rgba(255,255,255,.3);font:inherit;color:#10171c}
        .catalog-search input::placeholder{color:rgba(16,23,28,.52)}
        .catalog-search input:focus-visible{outline:2px solid rgba(24,33,39,.46);outline-offset:2px}
        .catalog-hint{font-size:14px;line-height:1.55;color:rgba(20,33,38,.68)}
        .catalog-filter-toolbar{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:8px}
        .catalog-active-filters{display:flex;flex:1 1 260px;flex-wrap:wrap;align-items:center;gap:8px;font-size:14px;line-height:1.5;color:rgba(20,33,38,.68)}
        .catalog-filter-placeholder{color:rgba(20,33,38,.68)}
        .catalog-filter-chip{display:inline-flex;align-items:center;min-height:32px;padding:0 12px;border-radius:999px;background:rgba(20,33,38,.84);font-size:12px;font-weight:700;letter-spacing:.03em;color:#fff7de}
        .catalog-clear-btn{display:inline-flex;align-items:center;justify-content:center;min-height:36px;padding:0 16px;border:0;border-radius:999px;background:rgba(20,33,38,.9);font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:#fff5ce;cursor:pointer}
        .catalog-clear-btn[hidden]{display:none}
        .catalog-filters-grid{display:grid;grid-template-columns:1fr;gap:10px}
        .filter-card{display:flex;flex-direction:column;gap:10px;padding:14px;border:1px solid rgba(20,33,38,.12);background:rgba(255,255,255,.16)}
        .filter-card-head{display:flex;align-items:center;justify-content:space-between;gap:10px}
        .filter-card-head span{font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#162127}
        .filter-card-head strong{display:inline-flex;align-items:center;justify-content:center;min-width:34px;height:34px;padding:0 10px;border-radius:999px;background:rgba(20,33,38,.12);font-size:12px;color:#162127}
        .type-filter-list{display:flex;flex-wrap:wrap;gap:8px}
        .type-filter-option{display:inline-flex;align-items:center;gap:8px;min-height:40px;padding:0 14px;border:1px solid rgba(20,33,38,.12);background:rgba(255,255,255,.34);font-size:14px;color:#162127;cursor:pointer}
        .type-filter-option input{margin:0}
        .type-filter-option small{font-size:12px;color:rgba(22,33,39,.62)}
        .responsable-filter-list{display:flex;flex-direction:column;gap:8px;max-height:220px;overflow-y:auto;padding-right:4px}
        .responsable-filter-option{display:flex;align-items:flex-start;justify-content:space-between;gap:10px;width:100%;padding:12px 14px;border:1px solid rgba(20,33,38,.12);background:rgba(255,255,255,.34);font:inherit;font-size:14px;line-height:1.4;color:#162127;text-align:left;cursor:pointer}
        .responsable-filter-option.is-active{background:rgba(20,33,38,.88);border-color:rgba(20,33,38,.88);color:#fff7de}
        .responsable-filter-option span{flex:1 1 auto;min-width:0;overflow-wrap:anywhere}
        .responsable-filter-option small{flex:0 0 auto;font-size:12px;color:rgba(22,33,39,.62)}
        .responsable-filter-option.is-active small{color:rgba(255,247,222,.78)}
        .keyword-search-row{display:flex;gap:8px}
        .keyword-search-row input{flex:1 1 auto;min-height:44px;padding:0 14px;border:1px solid rgba(20,33,38,.12);background:rgba(255,255,255,.4);font:inherit;font-size:15px;color:#162127}
        .keyword-search-row button{flex:0 0 auto;min-width:92px;min-height:44px;padding:0 14px;border:0;background:rgba(20,33,38,.9);font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:#fff5ce;cursor:pointer}
        .keyword-search-row input::placeholder{color:rgba(22,33,39,.48)}
        .keyword-suggestions{display:flex;flex-wrap:wrap;gap:8px;max-height:120px;overflow-y:auto}
        .keyword-suggestion{display:inline-flex;align-items:center;gap:8px;min-height:34px;padding:0 12px;border:1px solid rgba(20,33,38,.12);background:rgba(255,255,255,.34);font-size:12px;color:#162127;cursor:pointer}
        .keyword-suggestion small{font-size:12px;color:rgba(22,33,39,.62)}
        .keyword-selected{display:flex;flex-wrap:wrap;gap:8px}
        .keyword-chip{display:inline-flex;align-items:center;gap:8px;min-height:34px;padding:0 14px;border-radius:999px;background:rgba(20,33,38,.86);font-size:12px;font-weight:700;letter-spacing:.04em;color:#fff7de}
        .keyword-chip button{padding:0;border:0;background:none;font:inherit;color:inherit;cursor:pointer}
        .filter-empty{font-size:14px;line-height:1.5;color:rgba(20,33,38,.64)}
        .topic-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:1px;align-content:start;background:rgba(20,33,38,.12);overflow:visible}
        .topic-grid::-webkit-scrollbar{width:10px}
        .topic-grid::-webkit-scrollbar-track{background:rgba(255,255,255,.06)}
        .topic-grid::-webkit-scrollbar-thumb{background:rgba(20,33,38,.32)}
        .topic-grid::-webkit-scrollbar-thumb:hover{background:rgba(20,33,38,.46)}
        .topic-card{position:relative;display:flex;flex-direction:column;gap:10px;min-height:196px;padding:14px 14px 16px;background:rgba(255,255,255,.08);transition:background-color .2s ease,box-shadow .2s ease;overflow:visible}
        .topic-card:hover,.topic-card:focus-within,.topic-card.is-tooltip-open{background:rgba(255,255,255,.16);box-shadow:inset 0 0 0 1px rgba(20,33,38,.1)}
        .topic-card.is-hidden{display:none}
        .topic-card-head{display:flex;justify-content:space-between;align-items:flex-start;gap:8px}
        .topic-type{display:inline-flex;align-items:center;min-height:30px;padding:0 12px;border-radius:999px;font-size:12px;font-weight:700;letter-spacing:.05em;text-transform:uppercase}
        .topic-type{background:rgba(255,255,255,.42)}
        .topic-card h3{margin:0;font-size:17px;font-weight:700;line-height:1.34;text-transform:uppercase}
        .topic-card p{margin:0;font-size:14px;line-height:1.6;color:rgba(20,33,38,.82)}
        .topic-meta-line{margin-top:auto;font-size:13px;line-height:1.5;color:rgba(20,33,38,.64)}
        .topic-link{margin-top:0;display:inline-flex;align-items:center;gap:8px;padding:0;border:0;background:none;font:inherit;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:inherit;cursor:pointer}
        .topic-link::before{content:"";width:18px;height:2px;background:rgba(20,33,38,.56)}
        .catalog-tooltip{position:fixed;left:var(--tooltip-left,16px);top:var(--tooltip-top,16px);z-index:52;width:min(380px,calc(100vw - 32px));max-height:calc(100vh - 32px);padding:16px 16px 14px;border:1px solid rgba(20,33,38,.12);background:#fff5ce;color:#162127;box-shadow:0 18px 38px rgba(0,0,0,.2);overflow:auto;opacity:0;visibility:hidden;transform:translateY(10px);transition:opacity .18s ease,transform .18s ease,visibility .18s linear}
        .topic-card.is-tooltip-open .catalog-tooltip{opacity:1;visibility:visible;transform:translateY(0)}
        .tooltip-theme{margin:0 0 8px;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(22,33,39,.56)}
        .tooltip-description{margin:0 0 14px;font-size:14px;line-height:1.65;color:rgba(20,33,38,.86)}
        .tooltip-cluster{display:grid;gap:12px;padding-top:12px;border-top:1px solid rgba(20,33,38,.1)}
        .tooltip-group{display:grid;gap:6px}
        .tooltip-label{font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(22,33,39,.54)}
        .tooltip-tags{display:flex;flex-wrap:wrap;gap:6px}
        .tooltip-tags span{display:inline-flex;align-items:center;min-height:26px;padding:0 10px;border-radius:999px;background:rgba(20,33,38,.08);font-size:11px;font-weight:700;color:#162127}
        .tooltip-detail-list{display:flex;flex-direction:column;gap:6px}
        .tooltip-detail-list p{margin:0;font-size:13px;line-height:1.6;color:rgba(20,33,38,.82)}
        .tooltip-actions{display:flex;flex-wrap:wrap;gap:8px;margin-top:2px}
        .tooltip-link{display:inline-flex;align-items:center;justify-content:center;min-height:36px;padding:0 16px;border-radius:999px;background:rgba(20,33,38,.92);font-size:12px;font-weight:700;letter-spacing:.05em;text-transform:uppercase;color:#fff9e2}
        .catalog-empty{padding:18px 16px;font-size:14px;line-height:1.6;color:rgba(20,33,38,.74);background:rgba(255,255,255,.1)}
        .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}

        .highlights{position:relative;z-index:2;padding:36px 0 52px}
        .highlights::before{content:"";position:absolute;inset:0;background-image:url('{{ asset('assets/casa-comun/layer-stripes.png') }}');background-size:280px auto;background-repeat:repeat;opacity:.1;mix-blend-mode:screen;pointer-events:none}
        .highlights-title{max-width:1120px;margin:0 auto 18px;font-family:'Alternate Gothic',sans-serif;font-size:50px;letter-spacing:.05em;text-transform:uppercase;color:var(--cream)}
        .cards{max-width:1120px;margin:0 auto;display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
        .card{display:flex;flex-direction:column;overflow:hidden;min-height:100%;box-shadow:0 18px 40px rgba(0,0,0,.16)}
        .card img{width:100%;aspect-ratio:1/1;object-fit:cover}
        .card-body{display:flex;flex:1 1 auto;flex-direction:column;gap:10px;padding:12px 12px 14px;color:#261d1f}
        .card-pink{background:linear-gradient(180deg,#ef8abd,#e680b1)}
        .card-yellow{background:linear-gradient(180deg,#f2c83d,#ebbf2d)}
        .card-orange{background:linear-gradient(180deg,#f39a49,#ef8740)}
        .card h3{margin:0;font-size:13px;font-weight:700;line-height:1.34;text-transform:uppercase}
        .card p{margin:0;font-size:11px;line-height:1.48;color:rgba(30,22,25,.76)}
        .mini-btn{display:inline-flex;align-items:center;justify-content:center;align-self:flex-start;min-height:34px;padding:0 16px;border-radius:999px;background:#fff7de;color:#172029;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.05em}

        .feature-strip{position:relative;overflow:hidden}
        .strip-grid{display:grid;grid-template-columns:1.12fr .88fr;align-items:stretch;height:280px}
        .strip-copy{position:relative;z-index:2;display:flex;flex-direction:column;justify-content:center;height:280px;padding:22px 20px;text-align:center;overflow:hidden}
        .strip-copy h2{margin:0 0 8px;font-family:'Alternate Gothic',sans-serif;font-size:54px;letter-spacing:.05em;text-transform:uppercase}
        .strip-copy p{margin:0 0 12px;font-size:15px;line-height:1.54}
        .strip-btn{display:inline-flex;align-items:center;justify-content:center;min-height:34px;padding:0 18px;border-radius:999px;background:rgba(255,248,223,.92);color:#172029;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.05em}
        .strip-art{position:relative;height:280px;min-height:280px;overflow:hidden}
        .strip-art svg{width:100%;height:100%}
        .strip-mirada{background:linear-gradient(90deg,var(--red) 0%,#cb5c4f 52%,#c55a4d 100%)}
        .strip-mirada::after{content:"";position:absolute;left:0;right:0;bottom:0;height:20px;background:radial-gradient(circle at 10px 0,#47547b 11px,transparent 12px) 0 0/22px 20px repeat-x;opacity:.92}
        .strip-mirada .strip-grid{grid-template-columns:1.02fr .98fr}
        .strip-mirada .strip-art{background:url('{{ asset('assets/casa-comun/strip-mirada-art.png') }}') 18% bottom/auto 108% no-repeat}
        .strip-mirada .strip-copy{align-items:flex-start;padding-left:34px;text-align:left}
        .strip-sonido{background:linear-gradient(90deg,#49cfc4 0%,#46c9c5 56%,#44bfc0 100%)}
        .strip-sonido::before{content:"";position:absolute;left:0;right:0;top:0;height:12px;background:repeating-linear-gradient(90deg,#f0d567 0 6px,transparent 6px 16px);opacity:.88}
        .strip-sonido .strip-art{background:url('{{ asset('assets/casa-comun/strip-sonido-art.png') }}') 82% bottom/auto 108% no-repeat}
        .strip-sonido .strip-grid{grid-template-columns:.98fr 1.02fr}
        .strip-sonido .strip-copy{align-items:flex-start;text-align:left;padding-left:34px}

        .footer{padding:24px 14px 34px;background:#020305;text-align:center}
        .footer-pill{display:inline-flex;align-items:center;justify-content:center;min-height:30px;padding:0 16px;border-radius:999px;background:#f7f0ce;color:#18202a;font-size:11px;font-weight:700;margin-bottom:16px}
        .socials{display:flex;justify-content:center;gap:10px}
        .socials a{display:inline-flex;align-items:center;justify-content:center;width:26px;height:26px;border-radius:50%;background:rgba(255,255,255,.08)}
        .socials svg{width:13px;height:13px;fill:#fff}
        body.is-high-contrast{--poster:#131820;--poster-deep:#0f131a;--cream:#fff9d7;--mint:#d7f178;--mint-dark:#bdd656;--line:rgba(255,249,215,.2);--text:#0f1115;--focus-ring:#ffffff}
        body.is-high-contrast .page{background:#0f131a}
        body.is-high-contrast .mini-btn,body.is-high-contrast .strip-btn,body.is-high-contrast .hero-btn{background:#fff9d7;color:#000}
        body.is-high-contrast .hero-btn.is-secondary,body.is-high-contrast .accessibility-btn{background:#000;color:#fff9d7;border-color:#fff9d7}

        @media (max-width:900px){
            .hero-intro{grid-template-columns:1fr;align-items:start;padding:28px 0 16px}
            .hero-actions{justify-content:flex-start}
            .house-panel{width:min(100% - 32px,1180px);height:clamp(280px,35.3vw,380px);padding-top:0}
            .roof-carousel{inset:0}
            .roof-dots{bottom:16px}
            .themes-section{padding-top:56px}
            .themes-title{max-width:1080px;margin-bottom:36px;font-size:44px}
            .themes-stage{max-width:1080px}
            .board-collage-left{left:-66px;top:-450px;width:min(69vw,580px);height:874px}
            .board-collage-right{right:-88px;top:-82px;width:min(24vw,182px);height:336px}
            .board-intro,.strip-grid,.strip-sonido .strip-grid{grid-template-columns:1fr}
            .catalog-search-row,.catalog-filters-grid{grid-template-columns:1fr}
            .catalog-tools{width:min(100vw,380px)}
        .strip-grid{height:auto}
            .strip-copy,.strip-art{height:auto;min-height:0}
            .board-copy:first-child{border-right:0;border-bottom:1px solid var(--line)}
            .strip-copy,.strip-mirada .strip-copy,.strip-sonido .strip-copy{align-items:center;text-align:center;padding:18px 18px 24px}
        }

        @media (max-width:720px){
            .accessibility-bar{padding:8px 10px}
            .accessibility-tools{justify-content:flex-start}
            .accessibility-label{width:100%}
            .wrap,.wrap-contained{width:min(100%,1040px)}
            .wrap-full{width:100%}
            .sky-media{height:300px}
            .hero-intro{width:min(100% - 24px,1080px);padding:22px 0 12px}
            .hero-copy p{font-size:15px}
            .roof-carousel{inset:0}
            .roof-dots{bottom:12px;gap:8px}
            .roof-dot{width:10px;height:10px}
            .themes-section{padding-top:40px}
            .board-layers{display:none}
            .house-panel{width:100%;height:clamp(180px,35.3vw,260px);margin-top:0;padding:0;clip-path:polygon(50% 0,100% 10%,100% 100%,0 100%,0 10%)}
            .themes-title,.highlights-title,.strip-copy h2{font-size:40px}
            .themes-title{margin-bottom:32px}
            .themes-stage,.cards,.highlights-title{max-width:100%}
            .chip-row{grid-template-columns:repeat(4,1fr);row-gap:6px;top:-54px}
            .board-panel{padding-top:48px}
            .board-intro{min-height:0}
            .board-copy{padding:36px 16px 16px}
            .board-copy h2{font-size:34px}
            .board-copy p{font-size:15px}
            .catalog-search-compact input{font-size:16px}
            .catalog-search-copy,.catalog-hint,.catalog-active-filters,.filter-empty{font-size:13px}
            .topic-card h3{font-size:15px}
            .topic-card p{font-size:13px}
            .topic-meta-line,.tooltip-detail-list p{font-size:12px}
            .card h3{font-size:13px}
            .card p{font-size:11px}
            .strip-copy p{font-size:13px}
            .topic-grid,.cards{grid-template-columns:1fr}
            .topic-card{min-height:0;padding:14px 16px}
            .topic-meta-line{margin-top:0}
            .catalog-tooltip{position:static;left:auto;right:auto;top:auto;display:none;width:auto;max-height:none;margin-top:12px;opacity:1;visibility:visible;transform:none;overflow:visible}
            .topic-card.is-tooltip-open .catalog-tooltip{display:block}
            .card img{aspect-ratio:1.1/1}
            .strip-art{min-height:108px}
            .strip-sonido .strip-art{order:2}
            .strip-sonido .strip-copy{order:1}
        }

        @media (prefers-reduced-motion:reduce){
            html{scroll-behavior:auto}
            .topic-card{transition:none}
        }
    </style>
</head>



<body>
    <a class="skip-link" href="#contenido-principal">Saltar al contenido</a>
    <div class="accessibility-bar" aria-label="Herramientas de accesibilidad">
        <div class="accessibility-tools">
            <span class="accessibility-label">Accesibilidad</span>
            <button class="accessibility-btn" id="font-decrease" type="button" aria-label="Disminuir tamaño de texto">A-</button>
            <button class="accessibility-btn" id="font-reset" type="button" aria-label="Restablecer tamaño de texto">A</button>
            <button class="accessibility-btn" id="font-increase" type="button" aria-label="Aumentar tamaño de texto">A+</button>
            <button class="accessibility-btn" id="contrast-toggle" type="button" aria-pressed="false">Alto contraste</button>
        </div>
    </div>
    <div class="page">
        <main id="contenido-principal">
        <section class="poster-hero" id="inicio">
            <div class="sky-media" aria-hidden="true">
                <img src="{{ asset('assets/casa-comun/hero-bg.png') }}" alt="">
                <video autoplay muted loop playsinline preload="metadata" poster="{{ asset('assets/casa-comun/hero-bg.png') }}">
                    <source src="{{ asset('assets/casa-comun/hero-video.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="wrap poster-shell">
                <div class="collage-left" aria-hidden="true">
                    <span class="performer-ghost">
                        <img src="{{ asset('assets/casa-comun/layer-performer.png') }}" alt="">
                    </span>
                    <span class="performer-main">
                        <img src="{{ asset('assets/casa-comun/layer-performer.png') }}" alt="">
                    </span>
                </div>

                <div class="collage-right" aria-hidden="true">
                    <span class="right-ghost">
                        <img src="{{ asset('assets/casa-comun/layer-right-figure.png') }}" alt="">
                    </span>
                    <span class="right-main">
                        <img src="{{ asset('assets/casa-comun/layer-right-figure.png') }}" alt="">
                    </span>
                </div>

                <div class="house-panel">
                    <div class="roof-carousel" data-roof-carousel>
                        <div class="roof-slide is-active" data-roof-slide="0">
                            <img class="roof-slide-media" src="{{ asset('assets/casa-comun/banner-casa-comun.png') }}" alt="Banner Casa Común">
                        </div>
                        <div class="roof-slide" data-roof-slide="1" aria-hidden="true">
                            <img class="roof-slide-media" src="{{ asset('assets/casa-comun/banner-filbo.png') }}" alt="Banner FILBo Conferias 2026">
                        </div>
                    </div>

                    <div class="roof-dots" aria-label="Carrusel del techo">
                        <button class="roof-dot" type="button" aria-label="Ver diapositiva 1" aria-selected="true"></button>
                        <button class="roof-dot" type="button" aria-label="Ver diapositiva 2" aria-selected="false"></button>
                    </div>
                </div>

                <div class="hero-intro">
                    <div class="hero-copy">
                        <p class="hero-kicker">Diversidad cultural y lingüística</p>
                        <h1>Colombia pluriétnica, saberes en casa común</h1>
                        <p>Un espacio para visibilizar pueblos, memorias, lenguas nativas y derechos culturales desde una lectura amplia del territorio, las comunidades y sus procesos.</p>
                    </div>
                    <div class="hero-actions">
                        <a class="hero-btn" href="#tematicas">Explorar contenidos</a>
                        <a class="hero-btn is-secondary" href="#destacados">Ver destacados</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="themes-section" id="tematicas">
                        <h2 class="themes-title">Tematicas</h2>
                        <p class="themes-summary">La matriz actual permite navegar contenidos por tema, responsable, formato y palabras clave. Sigue pendiente reorganizar esta navegación con eje principal por pueblos étnicos y capas territoriales y lingüísticas.</p>
                        <div class="themes-stage">
                            <div class="board-layers" aria-hidden="true">
                                <div class="board-collage-left">
                                    <span class="performer-ghost">
                                        <img src="{{ asset('assets/casa-comun/layer-performer.png') }}" alt="">
                                    </span>
                                    <span class="performer-main">
                                        <img src="{{ asset('assets/casa-comun/layer-performer.png') }}" alt="">
                                    </span>
                                </div>

                                <div class="board-collage-right">
                                    <span class="right-ghost">
                                        <img src="{{ asset('assets/casa-comun/layer-right-figure.png') }}" alt="">
                                    </span>
                                    <span class="right-main">
                                        <img src="{{ asset('assets/casa-comun/layer-right-figure.png') }}" alt="">
                                    </span>
                                </div>
                            </div>

                            <div class="board">
                                <div class="chip-row" role="tablist" aria-label="Tematicas de Casa Común" style="--chip-count: {{ max(count($catalogThemes), 1) }};">
                                    @foreach ($catalogThemes as $index => $theme)
                                        <button
                                            class="chip"
                                            id="tema-tab-{{ $index + 1 }}"
                                            role="tab"
                                            type="button"
                                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-controls="temas-panel"
                                            tabindex="{{ $index === 0 ? '0' : '-1' }}"
                                            data-theme="{{ $theme['slug'] }}"
                                            data-title="{{ $theme['name'] }}"
                                            data-lead="{{ $theme['lead'] }}"
                                            data-copy="{{ $theme['copy'] }}"
                                            data-count="{{ $theme['count'] }}"
                                            data-types="{{ implode(' · ', $theme['types'] ?? []) }}"
                                            data-keywords="{{ implode(' · ', $theme['keywords'] ?? []) }}"
                                            aria-label="{{ $theme['name'] }} ({{ $theme['count'] }} contenidos)"
                                        >{{ $theme['symbol'] }}</button>
                                    @endforeach
                                </div>

                                <div class="board-panel" id="temas-panel" role="tabpanel" tabindex="0" aria-labelledby="tema-tab-1">
                                    <div class="board-intro">
                                        <div class="board-copy">
                                            <p class="board-eyebrow">Matriz clasificada</p>
                                            <h2 id="themes-panel-title">{{ $defaultTheme['name'] }}</h2>
                                            <p class="lead" id="themes-panel-lead">{{ $defaultTheme['lead'] }}</p>
                                        </div>
                                        <div class="board-copy board-copy-search">
                                            <p id="themes-panel-copy">{{ $defaultTheme['copy'] }}</p>
                                            <div class="catalog-stats" aria-live="polite">
                                                <span class="stat-pill" id="themes-results-count">{{ $defaultTheme['count'] }} contenidos</span>
                                                <span class="stat-pill" id="themes-panel-types">{{ implode(' · ', $defaultTheme['types'] ?? []) }}</span>
                                            </div>
                                            <p class="catalog-keywords" id="themes-panel-keywords">{{ implode(' · ', $defaultTheme['keywords'] ?? []) }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-layout">
                                    <div class="catalog-sidebar-backdrop" id="catalog-sidebar-backdrop" hidden></div>
                                    <aside class="catalog-tools" id="catalog-tools-sidebar">
                                        <div class="catalog-sidebar-head">
                                            <span class="catalog-sidebar-title">Filtros de la matriz</span>
                                            <button class="catalog-sidebar-close" id="catalog-sidebar-close" type="button" aria-label="Cerrar filtros">×</button>
                                        </div>
                                        <div class="catalog-search-row">
                                            <label class="catalog-search-compact" for="themes-search">
                                                <span class="catalog-search-label">Buscar en la matriz</span>
                                                <input id="themes-search" type="search" placeholder="Producto, responsable, tema o formato">
                                                <span class="catalog-search-copy">La búsqueda textual recorre nombre, descripción, entidad, tipo de contenido y términos asociados dentro de la temática activa.</span>
                                            </label>
                                        </div>
                                        <details class="catalog-filters-shell" id="catalog-filters-shell" open>
                                            <summary>
                                                <span>Filtros avanzados</span>
                                                <strong id="catalog-filters-toggle-count">0</strong>
                                            </summary>
                                            <div class="catalog-filters-content">
                                                <div class="catalog-filters-grid">
                                                    <section class="filter-card" aria-labelledby="filter-type-title">
                                                        <div class="filter-card-head">
                                                            <span id="filter-type-title">Tipos</span>
                                                            <strong id="filter-type-count">0</strong>
                                                        </div>
                                                        <div class="type-filter-list" id="filter-type-options"></div>
                                                        <p class="filter-empty" id="filter-type-empty" hidden>No hay tipos disponibles para esta temática.</p>
                                                    </section>
                                                    <section class="filter-card" aria-labelledby="filter-responsable-title">
                                                        <div class="filter-card-head">
                                                            <span id="filter-responsable-title">Responsable</span>
                                                            <strong id="filter-responsable-count">0</strong>
                                                        </div>
                                                        <div class="responsable-filter-list" id="filter-responsable-options"></div>
                                                        <p class="catalog-hint">Selecciona una entidad o dependencia para concentrar la revisión en un origen específico.</p>
                                                    </section>
                                                    <section class="filter-card" aria-labelledby="filter-keyword-title">
                                                        <div class="filter-card-head">
                                                            <span id="filter-keyword-title">Palabras clave</span>
                                                            <strong id="filter-keyword-count">0</strong>
                                                        </div>
                                                        <div class="keyword-search-row">
                                                            <input id="filter-keyword-input" type="search" placeholder="Buscar palabra clave">
                                                            <button id="filter-keyword-clear" type="button" hidden>Limpiar</button>
                                                        </div>
                                                        <div class="keyword-selected" id="filter-keyword-selected"></div>
                                                        <div class="keyword-suggestions" id="filter-keyword-suggestions"></div>
                                                        <p class="filter-empty" id="filter-keyword-empty" hidden>No hay coincidencias para esa palabra clave.</p>
                                                    </section>
                                                </div>
                                            </div>
                                        </details>
                                        <div class="catalog-sidebar-actions">
                                            <button class="catalog-sidebar-accept" id="catalog-sidebar-accept" type="button">Aceptar</button>
                                        </div>
                                    </aside>

                                    <div class="catalog-main">
                                        <div class="catalog-main-toolbar">
                                            <div class="catalog-toolbar-main-actions">
                                                <button class="catalog-sidebar-toggle" id="catalog-sidebar-toggle" type="button" aria-expanded="false" aria-controls="catalog-tools-sidebar">Mostrar filtros</button>
                                                <button class="catalog-clear-btn" id="catalog-clear-filters" type="button" hidden>Limpiar filtros</button>
                                            </div>
                                            <div class="catalog-active-filters" id="catalog-active-filters">
                                                <span class="catalog-filter-placeholder">Sin filtros adicionales activos.</span>
                                            </div>
                                        </div>
                                        <div class="topic-grid" id="themes-catalog-grid">
                                            @foreach ($catalogItems as $item)
                                                <article
                                                    class="topic-card topic-card-catalog"
                                                    data-theme="{{ $item['theme_slug'] }}"
                                                    data-search="{{ $item['search_text'] }}"
                                                    data-type-value="{{ $item['type'] ?: 'Contenido' }}"
                                                    data-responsable="{{ $item['responsable'] }}"
                                                    data-keywords="{{ implode('||', $item['keywords'] ?? []) }}"
                                                >
                                                    <div class="topic-card-head">
                                                        <span class="topic-type">{{ $item['type'] ?: 'Contenido' }}</span>
                                                    </div>
                                                    <h3>{{ $item['title'] }}</h3>
                                                    <p>{{ \Illuminate\Support\Str::limit(preg_replace('/\s+/', ' ', $item['description']), 170) }}</p>
                                                    <div class="topic-meta-line">{{ $item['responsable'] }}</div>
                                                    <button class="topic-link tooltip-toggle" type="button" aria-expanded="false" aria-controls="tooltip-{{ $item['id'] }}">Ver detalle</button>

                                                    <div class="catalog-tooltip" id="tooltip-{{ $item['id'] }}" role="tooltip">
                                                        <p class="tooltip-theme">{{ $item['theme'] }}</p>
                                                        <p class="tooltip-description">{{ $item['description'] }}</p>
                                                        <div class="tooltip-cluster">
                                                            @if (!empty($item['keywords']))
                                                                <div class="tooltip-group">
                                                                    <span class="tooltip-label">Claves de lectura</span>
                                                                    <div class="tooltip-tags">
                                                                        @foreach (array_slice($item['keywords'], 0, 4) as $keyword)
                                                                            <span>{{ $keyword }}</span>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            @if (!empty($item['responsable']))
                                                                <div class="tooltip-group tooltip-detail-list">
                                                                    <span class="tooltip-label">Responsable</span>
                                                                    <p>{{ $item['responsable'] }}</p>
                                                                </div>
                                                            @endif

                                                            @if (!empty($item['link']) || !empty($item['asset_link']))
                                                                <div class="tooltip-group">
                                                                    <span class="tooltip-label">Acceso</span>
                                                                    <div class="tooltip-actions">
                                                                        @if (!empty($item['link']))
                                                                            <a class="tooltip-link" href="{{ $item['link'] }}" target="_blank" rel="noreferrer">Ver recurso</a>
                                                                        @endif
                                                                        @if (!empty($item['asset_link']))
                                                                            <a class="tooltip-link" href="{{ $item['asset_link'] }}" target="_blank" rel="noreferrer">Abrir pieza</a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </article>
                                            @endforeach
                                        </div>
                                        <p class="catalog-empty" id="themes-empty" hidden>No hay coincidencias para la búsqueda actual. Ajusta el término o cambia la temática activa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="highlights" id="destacados">
                        <h2 class="highlights-title">Destacados</h2>
                        <div class="cards">
                            <article class="card d1">
                                <img src="{{ asset('assets/casa-comun/destacado-musica.jpeg') }}" alt="Artista en escenario">
                                <div class="card-body card-pink">
                                    <h3>Cantaoras, rituales y encuentros donde la voz sostiene memoria y comunidad.</h3>
                                    <p>Relatos sonoros, transmisión oral y celebraciones que continúan moviendo la cultura desde el territorio.</p>
                                    <a class="mini-btn" href="#tematicas">Explorar contenidos</a>
                                </div>
                            </article>

                            <article class="card d2">
                                <img src="{{ asset('assets/casa-comun/destacado-teatro.jpeg') }}" alt="Interior de teatro">
                                <div class="card-body card-yellow">
                                    <h3>Escenas y públicos que hacen del espacio cultural un punto de encuentro abierto.</h3>
                                    <p>Experiencias de circulación, creación escénica y gestión local que fortalecen la vida cultural.</p>
                                    <a class="mini-btn" href="#tematicas">Explorar contenidos</a>
                                </div>
                            </article>

                            <article class="card d3">
                                <img src="{{ asset('assets/casa-comun/destacado-danza.jpeg') }}" alt="Grupo cultural">
                                <div class="card-body card-orange">
                                    <h3>Procesos colectivos que convierten la cultura en motor de economías populares.</h3>
                                    <p>Redes, emprendimientos y prácticas colaborativas que activan producción simbólica y bienestar local.</p>
                                    <a class="mini-btn" href="#tematicas">Explorar contenidos</a>
                                </div>
                            </article>
                        </div>
                    </section>

        <section class="feature-strip strip-mirada" id="mirada">
            <div class="wrap-full strip-grid">
                <div class="strip-art" aria-hidden="true"></div>
                <div class="strip-copy">
                    <h2>Somos mirada</h2>
                    <p>Galerias, piezas y relatos visuales para recorrer el territorio desde otras perspectivas.</p>
                    <a class="strip-btn" href="#destacados">Descubre aquí</a>
                </div>
            </div>
        </section>

        <section class="feature-strip strip-sonido" id="sonido">
            <div class="wrap-full strip-grid">
                <div class="strip-copy">
                    <h2>Somos sonido, somos voces</h2>
                    <p>Escuchas abiertas para conocer acentos, memorias, archivos y ritmos que habitan Casa Comun.</p>
                    <a class="strip-btn" href="#tematicas">Escucha aquí</a>
                </div>
                <div class="strip-art" aria-hidden="true"></div>
            </div>
        </section>

        <footer class="footer" id="contacto">
            <a class="footer-pill" href="https://www.mincultura.gov.co/" target="_blank" rel="noreferrer">https://www.mincultura.gov.co/</a>
            <div class="socials" aria-label="Redes sociales">
                <a href="https://www.facebook.com/MinisterioCultura/" target="_blank" rel="noreferrer" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M13.4 21v-8h2.7l.4-3.1h-3.1V8.2c0-.9.3-1.5 1.6-1.5h1.7V4c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.4v1.7H7.6V13h2.9v8h2.9Z"/></svg></a>
                <a href="https://www.instagram.com/mincultura/" target="_blank" rel="noreferrer" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 7.2A4.8 4.8 0 1 0 12 17a4.8 4.8 0 0 0 0-9.8Zm0 8A3.2 3.2 0 1 1 12 8.8a3.2 3.2 0 0 1 0 6.4Zm6.1-8.3a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0ZM21 7c-.1-1.5-.4-2.5-1.1-3.2-.7-.8-1.7-1-3.2-1.1C15.3 2.6 15 2.6 12 2.6s-3.3 0-4.7.1c-1.5.1-2.5.3-3.2 1.1C3.3 4.5 3 5.5 3 7c-.1 1.4-.1 1.8-.1 5s0 3.6.1 5c.1 1.5.3 2.5 1.1 3.2.7.8 1.7 1 3.2 1.1 1.4.1 1.7.1 4.7.1s3.3 0 4.7-.1c1.5-.1 2.5-.3 3.2-1.1.8-.7 1-1.7 1.1-3.2.1-1.4.1-1.7.1-5s0-3.6-.1-5Zm-2 10.2c-.1 1.1-.2 1.7-.5 2-.4.4-1 .5-2 .5-1.5.1-1.7.1-4.5.1s-3 0-4.5-.1c-1-.1-1.6-.2-2-.5-.3-.3-.4-.9-.5-2C5 15.8 5 15.5 5 12s0-3.8.1-5.2c.1-1.1.2-1.7.5-2 .4-.4 1-.5 2-.5C9 4.2 9.2 4.2 12 4.2s3 0 4.5.1c1 .1 1.6.2 2 .5.3.3.4.9.5 2 .1 1.4.1 1.7.1 5.2s0 3.8-.1 5.2Z"/></svg></a>
                <a href="https://x.com/mincultura" target="_blank" rel="noreferrer" aria-label="X"><svg viewBox="0 0 24 24"><path d="M18.8 3H21l-4.8 5.5L22 21h-4.6l-3.7-5.1L9.1 21H7l5-5.8L2.5 3h4.6l3.4 4.7L18.8 3Zm-1.6 16.3h1.3L7.3 4.6H6l11.2 14.7Z"/></svg></a>
                <a href="https://www.youtube.com/@Mincultura" target="_blank" rel="noreferrer" aria-label="YouTube"><svg viewBox="0 0 24 24"><path d="M21.4 7.3a2.8 2.8 0 0 0-2-2c-1.7-.5-7.4-.5-7.4-.5s-5.7 0-7.4.5a2.8 2.8 0 0 0-2 2A30 30 0 0 0 2.2 12a30 30 0 0 0 .4 4.7 2.8 2.8 0 0 0 2 2c1.7.5 7.4.5 7.4.5s5.7 0 7.4-.5a2.8 2.8 0 0 0 2-2 30 30 0 0 0 .4-4.7 30 30 0 0 0-.4-4.7ZM10.2 15.3V8.7L15.9 12l-5.7 3.3Z"/></svg></a>
            </div>
        </footer>
        </main>
    </div>

    <script>
        (() => {
            const body = document.body;
            const increaseButton = document.getElementById('font-increase');
            const decreaseButton = document.getElementById('font-decrease');
            const resetButton = document.getElementById('font-reset');
            const contrastButton = document.getElementById('contrast-toggle');
            let fontScale = 1;

            const syncScale = () => {
                body.style.setProperty('--font-scale', fontScale.toFixed(2));
            };

            increaseButton?.addEventListener('click', () => {
                fontScale = Math.min(1.3, fontScale + 0.1);
                syncScale();
            });

            decreaseButton?.addEventListener('click', () => {
                fontScale = Math.max(0.9, fontScale - 0.1);
                syncScale();
            });

            resetButton?.addEventListener('click', () => {
                fontScale = 1;
                syncScale();
            });

            contrastButton?.addEventListener('click', () => {
                const active = body.classList.toggle('is-high-contrast');
                contrastButton.classList.toggle('is-active', active);
                contrastButton.setAttribute('aria-pressed', active ? 'true' : 'false');
            });
        })();

        (() => {
            const carousel = document.querySelector('[data-roof-carousel]');
            const slides = Array.from(document.querySelectorAll('[data-roof-slide]'));
            const dots = Array.from(document.querySelectorAll('.roof-dot'));
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            let currentSlide = 0;
            let rotationId = null;

            if (!carousel || slides.length < 2 || dots.length !== slides.length) return;

            const activateSlide = (index) => {
                currentSlide = (index + slides.length) % slides.length;

                slides.forEach((slide, slideIndex) => {
                    const active = slideIndex === currentSlide;
                    slide.classList.toggle('is-active', active);
                    slide.setAttribute('aria-hidden', active ? 'false' : 'true');
                });

                dots.forEach((dot, dotIndex) => {
                    dot.setAttribute('aria-selected', dotIndex === currentSlide ? 'true' : 'false');
                });
            };

            const stopRotation = () => {
                if (!rotationId) return;
                window.clearInterval(rotationId);
                rotationId = null;
            };

            const startRotation = () => {
                if (prefersReducedMotion) return;
                stopRotation();
                rotationId = window.setInterval(() => activateSlide(currentSlide + 1), 4600);
            };

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    activateSlide(index);
                    startRotation();
                });
            });

            carousel.addEventListener('mouseenter', stopRotation);
            carousel.addEventListener('mouseleave', startRotation);

            activateSlide(0);
            startRotation();
        })();

        (() => {
            const tabs = Array.from(document.querySelectorAll('[role="tab"]'));
            const board = document.querySelector('.board');
            const panel = document.getElementById('temas-panel');
            const title = document.getElementById('themes-panel-title');
            const lead = document.getElementById('themes-panel-lead');
            const copy = document.getElementById('themes-panel-copy');
            const types = document.getElementById('themes-panel-types');
            const keywords = document.getElementById('themes-panel-keywords');
            const resultsCount = document.getElementById('themes-results-count');
            const searchInput = document.getElementById('themes-search');
            const emptyState = document.getElementById('themes-empty');
            const grid = document.getElementById('themes-catalog-grid');
            const catalogLayout = document.querySelector('.catalog-layout');
            const sidebarToggle = document.getElementById('catalog-sidebar-toggle');
            const sidebarBackdrop = document.getElementById('catalog-sidebar-backdrop');
            const sidebarClose = document.getElementById('catalog-sidebar-close');
            const sidebarAccept = document.getElementById('catalog-sidebar-accept');
            const activeFiltersLabel = document.getElementById('catalog-active-filters');
            const filtersToggleCount = document.getElementById('catalog-filters-toggle-count');
            const clearFiltersButton = document.getElementById('catalog-clear-filters');
            const typeOptions = document.getElementById('filter-type-options');
            const typeCount = document.getElementById('filter-type-count');
            const typeEmpty = document.getElementById('filter-type-empty');
            const responsableOptions = document.getElementById('filter-responsable-options');
            const responsableCount = document.getElementById('filter-responsable-count');
            const keywordInput = document.getElementById('filter-keyword-input');
            const keywordSuggestions = document.getElementById('filter-keyword-suggestions');
            const keywordSelected = document.getElementById('filter-keyword-selected');
            const keywordCount = document.getElementById('filter-keyword-count');
            const keywordEmpty = document.getElementById('filter-keyword-empty');
            const keywordClear = document.getElementById('filter-keyword-clear');
            const cards = Array.from(document.querySelectorAll('.topic-card[data-theme]'));
            const tooltipButtons = Array.from(document.querySelectorAll('.tooltip-toggle'));
            let activeTooltipCard = null;

            if (!tabs.length || !panel || !title || !lead || !copy || !resultsCount || !searchInput || !grid) return;

            const normalizeText = (value) => (value || '')
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .replace(/\s+/g, ' ')
                .trim();

            let activeTheme = tabs.find((tab) => tab.getAttribute('aria-selected') === 'true')?.dataset.theme || '';
            const activeSelections = {
                type: new Set(),
                responsable: '',
                keyword: new Set(),
            };
            let themeMaps = {
                type: new Map(),
                responsable: new Map(),
                keyword: new Map(),
            };

            const syncThemeAccent = (tab) => {
                if (!tab || !panel) return;
                const chipColor = window.getComputedStyle(tab).backgroundColor;
                if (board) board.style.setProperty('--theme-chip-color', chipColor);
                panel.style.setProperty('--theme-chip-color', chipColor);
            };

            const resetFilterInputs = () => {
                if (keywordInput) keywordInput.value = '';
            };

            const getSelectedFilterLabels = () => {
                const labels = [];

                Array.from(activeSelections.type)
                    .map((value) => Array.from(themeMaps.type.keys()).find((item) => normalizeText(item) === value) || value)
                    .sort((a, b) => a.localeCompare(b, 'es'))
                    .forEach((label) => labels.push(`Tipo: ${label}`));

                if (activeSelections.responsable) {
                    const responsableLabel = Array.from(themeMaps.responsable.keys()).find((item) => normalizeText(item) === activeSelections.responsable) || activeSelections.responsable;
                    labels.push(`Responsable: ${responsableLabel}`);
                }

                Array.from(activeSelections.keyword)
                    .map((value) => Array.from(themeMaps.keyword.keys()).find((item) => normalizeText(item) === value) || value)
                    .sort((a, b) => a.localeCompare(b, 'es'))
                    .forEach((label) => labels.push(`Palabra clave: ${label}`));

                return labels;
            };

            const updateActiveFilterState = () => {
                const selectedCount = activeSelections.type.size + activeSelections.keyword.size + (activeSelections.responsable ? 1 : 0);

                if (activeFiltersLabel) {
                    activeFiltersLabel.innerHTML = '';

                    if (!selectedCount) {
                        const placeholder = document.createElement('span');
                        placeholder.className = 'catalog-filter-placeholder';
                        placeholder.textContent = 'Sin filtros adicionales activos.';
                        activeFiltersLabel.append(placeholder);
                    } else {
                        getSelectedFilterLabels().forEach((label) => {
                            const chip = document.createElement('span');
                            chip.className = 'catalog-filter-chip';
                            chip.textContent = label;
                            activeFiltersLabel.append(chip);
                        });
                    }
                }

                if (filtersToggleCount) {
                    filtersToggleCount.textContent = selectedCount;
                }

                if (clearFiltersButton) {
                    clearFiltersButton.hidden = selectedCount === 0;
                }
            };

            const syncSidebarToggle = () => {
                if (!catalogLayout || !sidebarToggle) return;

                const expanded = catalogLayout.classList.contains('is-sidebar-open');
                sidebarToggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
                sidebarToggle.textContent = expanded ? 'Ocultar filtros' : 'Mostrar filtros';
                if (sidebarBackdrop) sidebarBackdrop.hidden = !expanded;
                document.body.style.overflow = expanded ? 'hidden' : '';
            };

            const openSidebar = () => {
                if (!catalogLayout) return;
                catalogLayout.classList.add('is-sidebar-open');
                syncSidebarToggle();
            };

            const closeSidebar = () => {
                if (!catalogLayout) return;
                catalogLayout.classList.remove('is-sidebar-open');
                syncSidebarToggle();
            };

            const getThemeMaps = () => {
                const themeCards = cards.filter((card) => card.dataset.theme === activeTheme);
                const optionMaps = {
                    type: new Map(),
                    responsable: new Map(),
                    keyword: new Map(),
                };

                themeCards.forEach((card) => {
                    const typeLabel = (card.dataset.typeValue || '').trim();
                    const responsableLabel = (card.dataset.responsable || '').trim();
                    const keywordValues = (card.dataset.keywords || '').split('||').map((value) => value.trim()).filter(Boolean);

                    if (typeLabel) optionMaps.type.set(typeLabel, (optionMaps.type.get(typeLabel) || 0) + 1);
                    if (responsableLabel) optionMaps.responsable.set(responsableLabel, (optionMaps.responsable.get(responsableLabel) || 0) + 1);

                    keywordValues.forEach((keyword) => {
                        optionMaps.keyword.set(keyword, (optionMaps.keyword.get(keyword) || 0) + 1);
                    });
                });

                return optionMaps;
            };

            const renderTypeOptions = () => {
                if (!typeOptions || !typeCount || !typeEmpty) return;

                const entries = Array.from(themeMaps.type.entries()).sort((a, b) => {
                    if (b[1] !== a[1]) return b[1] - a[1];
                    return a[0].localeCompare(b[0], 'es');
                });

                const available = new Set(entries.map(([label]) => normalizeText(label)));
                Array.from(activeSelections.type).forEach((value) => {
                    if (!available.has(value)) activeSelections.type.delete(value);
                });

                typeOptions.innerHTML = '';
                typeCount.textContent = entries.length;
                typeEmpty.hidden = entries.length !== 0;

                entries.forEach(([label, amount]) => {
                    const option = document.createElement('label');
                    option.className = 'type-filter-option';

                    const input = document.createElement('input');
                    input.type = 'checkbox';
                    input.value = normalizeText(label);
                    input.checked = activeSelections.type.has(input.value);
                    input.addEventListener('change', () => {
                        if (input.checked) activeSelections.type.add(input.value);
                        else activeSelections.type.delete(input.value);
                        updateActiveFilterState();
                        applyFilters();
                    });

                    const text = document.createElement('span');
                    text.textContent = label;

                    const count = document.createElement('small');
                    count.textContent = amount;

                    option.append(input, text, count);
                    typeOptions.append(option);
                });
            };

            const renderResponsableOptions = () => {
                if (!responsableOptions || !responsableCount) return;

                const entries = Array.from(themeMaps.responsable.entries()).sort((a, b) => a[0].localeCompare(b[0], 'es'));
                const available = new Set(entries.map(([label]) => normalizeText(label)));

                if (activeSelections.responsable && !available.has(activeSelections.responsable)) {
                    activeSelections.responsable = '';
                }

                responsableOptions.innerHTML = '';
                responsableCount.textContent = entries.length;

                const allButton = document.createElement('button');
                allButton.type = 'button';
                allButton.className = `responsable-filter-option${activeSelections.responsable ? '' : ' is-active'}`;
                allButton.innerHTML = '<span>Todos los responsables</span>';
                allButton.addEventListener('click', () => {
                    activeSelections.responsable = '';
                    renderResponsableOptions();
                    updateActiveFilterState();
                    applyFilters();
                });
                responsableOptions.append(allButton);

                entries.forEach(([label, amount]) => {
                    const value = normalizeText(label);
                    const option = document.createElement('button');
                    option.type = 'button';
                    option.className = `responsable-filter-option${value === activeSelections.responsable ? ' is-active' : ''}`;

                    const text = document.createElement('span');
                    text.textContent = label;

                    const count = document.createElement('small');
                    count.textContent = amount;

                    option.append(text, count);
                    option.addEventListener('click', () => {
                        activeSelections.responsable = activeSelections.responsable === value ? '' : value;
                        renderResponsableOptions();
                        updateActiveFilterState();
                        applyFilters();
                    });
                    responsableOptions.append(option);
                });
            };

            const renderKeywordChips = () => {
                if (!keywordSelected || !keywordClear) return;

                keywordSelected.innerHTML = '';
                keywordClear.hidden = activeSelections.keyword.size === 0;

                Array.from(activeSelections.keyword)
                    .map((value) => Array.from(themeMaps.keyword.keys()).find((item) => normalizeText(item) === value) || value)
                    .sort((a, b) => a.localeCompare(b, 'es'))
                    .forEach((label) => {
                        const chip = document.createElement('span');
                        chip.className = 'keyword-chip';
                        chip.textContent = label;

                        const remove = document.createElement('button');
                        remove.type = 'button';
                        remove.textContent = '×';
                        remove.setAttribute('aria-label', `Quitar ${label}`);
                        remove.addEventListener('click', () => {
                            activeSelections.keyword.delete(normalizeText(label));
                            renderKeywordChips();
                            renderKeywordSuggestions();
                            updateActiveFilterState();
                            applyFilters();
                        });

                        chip.append(remove);
                        keywordSelected.append(chip);
                    });
            };

            const renderKeywordSuggestions = () => {
                if (!keywordSuggestions || !keywordCount || !keywordEmpty) return;

                const entries = Array.from(themeMaps.keyword.entries()).sort((a, b) => {
                    if (b[1] !== a[1]) return b[1] - a[1];
                    return a[0].localeCompare(b[0], 'es');
                });
                const available = new Set(entries.map(([label]) => normalizeText(label)));

                Array.from(activeSelections.keyword).forEach((value) => {
                    if (!available.has(value)) activeSelections.keyword.delete(value);
                });

                const query = normalizeText(keywordInput?.value || '');
                const filtered = entries
                    .filter(([label]) => !activeSelections.keyword.has(normalizeText(label)))
                    .filter(([label]) => !query || normalizeText(label).includes(query))
                    .slice(0, 12);

                keywordCount.textContent = entries.length;
                keywordSuggestions.innerHTML = '';
                keywordEmpty.hidden = filtered.length !== 0;

                filtered.forEach(([label, amount]) => {
                    const button = document.createElement('button');
                    button.type = 'button';
                    button.className = 'keyword-suggestion';
                    button.innerHTML = `<span>${label}</span><small>${amount}</small>`;
                    button.addEventListener('click', () => {
                        activeSelections.keyword.add(normalizeText(label));
                        renderKeywordChips();
                        renderKeywordSuggestions();
                        updateActiveFilterState();
                        applyFilters();
                    });
                    keywordSuggestions.append(button);
                });
            };

            const buildFilterControls = () => {
                themeMaps = getThemeMaps();
                renderTypeOptions();
                renderResponsableOptions();
                renderKeywordChips();
                renderKeywordSuggestions();
                updateActiveFilterState();
            };

            const closeTooltip = (card) => {
                if (!card) return;
                card.classList.remove('is-tooltip-open');
                const toggle = card.querySelector('.tooltip-toggle');
                if (toggle) toggle.setAttribute('aria-expanded', 'false');
                if (activeTooltipCard === card) activeTooltipCard = null;
            };

            const closeAllTooltips = (exceptCard = null) => {
                cards.forEach((card) => {
                    if (card !== exceptCard) closeTooltip(card);
                });
            };

            const positionTooltip = (card) => {
                if (!card || window.innerWidth <= 720) return;

                const tooltip = card.querySelector('.catalog-tooltip');
                const toggle = card.querySelector('.tooltip-toggle');
                if (!tooltip || !toggle) return;

                const spacing = 16;
                const toggleRect = toggle.getBoundingClientRect();

                tooltip.style.setProperty('--tooltip-left', `${spacing}px`);
                tooltip.style.setProperty('--tooltip-top', `${spacing}px`);

                const tooltipRect = tooltip.getBoundingClientRect();
                const viewportWidth = window.innerWidth;
                const viewportHeight = window.innerHeight;

                let left = toggleRect.left;
                if (left + tooltipRect.width > viewportWidth - spacing) {
                    left = viewportWidth - spacing - tooltipRect.width;
                }
                left = Math.max(spacing, left);

                let top = toggleRect.bottom + 10;
                if (top + tooltipRect.height > viewportHeight - spacing) {
                    top = toggleRect.top - tooltipRect.height - 10;
                }
                top = Math.max(spacing, top);

                tooltip.style.setProperty('--tooltip-left', `${Math.round(left)}px`);
                tooltip.style.setProperty('--tooltip-top', `${Math.round(top)}px`);
            };

            const updateCatalogViewport = () => {
                return;
            };

            const applyFilters = () => {
                const query = normalizeText(searchInput.value);
                const tokens = query ? query.split(' ').filter(Boolean) : [];
                const hasQuery = tokens.length > 0;
                let visibleCount = 0;

                cards.forEach((card) => {
                    const inTheme = hasQuery ? true : card.dataset.theme === activeTheme;
                    const searchable = normalizeText(card.dataset.search || '');
                    const matchesQuery = !hasQuery || searchable.includes(query) || tokens.every((token) => searchable.includes(token));
                    const typeValue = normalizeText(card.dataset.typeValue || '');
                    const responsableValue = normalizeText(card.dataset.responsable || '');
                    const keywordValues = (card.dataset.keywords || '').split('||').map((value) => normalizeText(value)).filter(Boolean);
                    const matchesType = !activeSelections.type.size || activeSelections.type.has(typeValue);
                    const matchesResponsable = !activeSelections.responsable || activeSelections.responsable === responsableValue;
                    const matchesKeyword = !activeSelections.keyword.size || keywordValues.some((value) => activeSelections.keyword.has(value));
                    const visible = inTheme && matchesQuery && matchesType && matchesResponsable && matchesKeyword;

                    card.classList.toggle('is-hidden', !visible);

                    if (!visible) {
                        closeTooltip(card);
                        return;
                    }

                    visibleCount += 1;
                });

                resultsCount.textContent = `${visibleCount} contenido${visibleCount === 1 ? '' : 's'}`;

                if (emptyState) {
                    emptyState.hidden = visibleCount !== 0;
                }

                updateCatalogViewport();
            };

            const activateTab = (tab, moveFocus = true) => {
                activeTheme = tab.dataset.theme || 'all';

                tabs.forEach((item) => {
                    const selected = item === tab;
                    item.setAttribute('aria-selected', selected ? 'true' : 'false');
                    item.tabIndex = selected ? 0 : -1;
                });

                title.textContent = tab.dataset.title || '';
                lead.textContent = tab.dataset.lead || '';
                copy.textContent = tab.dataset.copy || '';
                if (types) types.textContent = tab.dataset.types || '';
                if (keywords) keywords.textContent = tab.dataset.keywords || '';
                syncThemeAccent(tab);
                panel.setAttribute('aria-labelledby', tab.id);
                activeSelections.type.clear();
                activeSelections.keyword.clear();
                activeSelections.responsable = '';
                resetFilterInputs();
                buildFilterControls();
                closeAllTooltips();
                applyFilters();

                if (moveFocus) tab.focus();
            };

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => activateTab(tab, false));
                tab.addEventListener('keydown', (event) => {
                    let nextIndex = null;

                    if (event.key === 'ArrowRight') nextIndex = (index + 1) % tabs.length;
                    if (event.key === 'ArrowLeft') nextIndex = (index - 1 + tabs.length) % tabs.length;
                    if (event.key === 'Home') nextIndex = 0;
                    if (event.key === 'End') nextIndex = tabs.length - 1;

                    if (nextIndex === null) return;
                    event.preventDefault();
                    activateTab(tabs[nextIndex]);
                });
            });

            ['input', 'search', 'change', 'keyup'].forEach((eventName) => {
                searchInput.addEventListener(eventName, applyFilters);
            });
            if (keywordInput) {
                keywordInput.addEventListener('input', renderKeywordSuggestions);
            }
            if (keywordClear) {
                keywordClear.addEventListener('click', () => {
                    activeSelections.keyword.clear();
                    if (keywordInput) keywordInput.value = '';
                    renderKeywordChips();
                    renderKeywordSuggestions();
                    updateActiveFilterState();
                    applyFilters();
                });
            }

            if (clearFiltersButton) {
                clearFiltersButton.addEventListener('click', () => {
                    activeSelections.type.clear();
                    activeSelections.keyword.clear();
                    activeSelections.responsable = '';
                    resetFilterInputs();
                    buildFilterControls();
                    applyFilters();
                });
            }

            sidebarToggle?.addEventListener('click', () => {
                if (!catalogLayout) return;
                if (catalogLayout.classList.contains('is-sidebar-open')) closeSidebar();
                else openSidebar();
            });

            sidebarClose?.addEventListener('click', closeSidebar);
            sidebarAccept?.addEventListener('click', closeSidebar);
            sidebarBackdrop?.addEventListener('click', closeSidebar);

            tooltipButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const card = button.closest('.topic-card');
                    const willOpen = !card.classList.contains('is-tooltip-open');

                    closeAllTooltips(card);
                    card.classList.toggle('is-tooltip-open', willOpen);
                    button.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
                    activeTooltipCard = willOpen ? card : null;
                    if (willOpen) positionTooltip(card);
                });
            });

            cards.forEach((card) => {
                card.addEventListener('focusout', (event) => {
                    if (card.contains(event.relatedTarget)) return;
                    closeTooltip(card);
                });
            });

            document.addEventListener('click', (event) => {
                if (event.target.closest('.topic-card')) return;
                closeAllTooltips();
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    closeSidebar();
                    closeAllTooltips();
                }
            });

            window.addEventListener('resize', () => {
                updateCatalogViewport();
                if (activeTooltipCard) positionTooltip(activeTooltipCard);
            });
            window.addEventListener('scroll', () => {
                if (activeTooltipCard) positionTooltip(activeTooltipCard);
            }, { passive: true });
            syncSidebarToggle();

            const initialTab = tabs.find((tab) => tab.getAttribute('aria-selected') === 'true') || tabs[0];
            if (initialTab) activateTab(initialTab, false);
        })();
    </script>
</body>
</html>
