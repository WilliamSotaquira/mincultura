# AGENTS.md

## Reglas recurrentes

### Boletin
Usar este flujo cuando el usuario pegue correos en el chat para preparar una lista de envio.

1. Solicitar datos obligatorios al usuario.
- Pedir `nombre del envio`.
- Pedir `solicitante`.
- Pedir `numero de boletin`.

2. Crear carpeta de trabajo.
- Ruta base: `database/mailing/<nombre-campana>`.
- El nombre de carpeta se toma exactamente del nombre enviado por el usuario.
- Crear primero `datos.txt` vacio dentro de la carpeta.

3. Guardar entrada en bruto.
- Si la base llega en bloques, anexar cada bloque en `datos.txt` sin limpiar contenido previo.
- Confirmar al final que `datos.txt` contiene la base completa antes de validar.
- Si `datos.txt` ya existe con contenido, permitir retomar el proceso desde ese archivo sin volver a solicitar toda la base.

4. Validar y normalizar correos.
- Extraer posibles correos desde `datos.txt`.
- Quitar espacios, comas finales, caracteres de relleno y texto no correo.
- Conservar solo correos con estructura valida: `local@dominio.tld`.
- Convertir a minusculas.
- Eliminar duplicados.
- Clasificar como `candidato` solo tokens con apariencia de correo (ejemplo: contiene `@` o dominio tipo `.com`, `.co`, `.org`, etc.).

5. Generar salidas obligatorias.
- Crear `correos_validos.txt` con un correo por linea.
- Crear `correos_descartados.txt` solo con `candidatos` invalidos (un registro por linea).
- No incluir en `correos_descartados.txt` texto basura o respuestas vacias: `NA`, `No tiene`, `sin respuesta`, numeros sueltos, iniciales sueltas, etiquetas o cualquier valor sin apariencia de correo.

6. Regla de entrega.
- Siempre responder con conteo total: `validos`, `descartados` y `total procesados`.
- Confirmar rutas de los dos archivos generados.

### Respuesta masivo
Usar este flujo despues de `Boletin` para redactar el reporte y correo de respuesta.

1. Recibir el numero de boletin.
- Solicitar explicitamente al usuario el `numero de boletin`.
- El usuario indica el numero (ejemplo: `boletin 94`).
- Ir a `database/mailing/<nombre-boletin>`.

2. Leer resultados de base de datos.
- Leer `correos_validos.txt`.
- Leer `correos_descartados.txt`.
- Calcular cantidad de validos y descartados.

3. Entregar resumen tecnico inicial.
- Describir en 1 parrafo la tarea realizada con la base de datos.
- Informar cantidades: `validos` y `descartados`.
- Listar todos los correos de `correos_descartados.txt`.

4. Solicitar cifras de envio al usuario.
- Pedir explicitamente las cifras del envio para completar el reporte.
- Campos esperados: enviados, entregados, aperturas, clics, rebotes, bajas (si aplica).

5. Analizar cifras de forma general.
- Hacer un analisis breve, general y orientado a resultados.
- Omitir lenguaje negativo o conclusiones pesimistas.
- Enfocar el mensaje en avance, alcance y oportunidades de mejora.

6. Generar estructura del correo de respuesta.
- Incluir: `asunto`, `saludo`, `resumen de depuracion`, `resumen de envio`, `cierre`.
- Mantener tono profesional y claro.
- Incluir una linea final con siguiente paso sugerido.
- No cerrar solicitando metricas faltantes ni condicionando el cierre.
- Usar cierre estandar: `Quedo atento a cualquier novedad. Saludos cordiales.`

### Crear solicitud
Usar este flujo para construir la solicitud formal despues de ejecutar `Boletin` y `Respuesta masivo`.

1. Solicitar campos obligatorios al usuario.
- `descripcion de la solicitud` (enfocada en el requerimiento, no en listado de tareas ejecutadas)
- `solicitante` (siempre pedirlo explicitamente)
- `titulo de la solicitud`: usar automaticamente el mismo valor del `nombre del envio` definido en `Boletin`.

2. Completar campos fijos.
- `subservicio`: `Ejecucion de envio de comunicaciones masivas`

3. Construir una tarea principal con subtareas ejecutadas.
- Crear `tarea principal` con estado `ejecutada`.
- Incluir subtareas necesarias ya realizadas en el proceso, cada una con una descripcion breve:
- `depuracion de base de correos` - `ejecutada` - Limpieza inicial de datos y eliminacion de ruido en la base fuente.
- `validacion y normalizacion de correos` - `ejecutada` - Verificacion de estructura de email, estandarizacion de formato y deduplicacion.
- `generacion de correos_validos y correos_descartados` - `ejecutada` - Separacion de registros aptos para envio y candidatos invalidos.
- `resumen tecnico de resultados` - `ejecutada` - Consolidacion de conteos de validos y rechazados con evidencia de descartes.
- `analisis general de cifras de envio` - `ejecutada` - Lectura de metricas de envio y sintesis general orientada a resultados.
- `redaccion de respuesta masiva` - `ejecutada` - Elaboracion del mensaje final con resumen de depuracion y resultado de envio.

4. Entregar la solicitud en estructura clara.
- Mostrar bloque final con: `titulo`, `descripcion`, `solicitante`, `subservicio`, `tarea`, `subtareas`.
- Redactar `descripcion` en un solo parrafo breve pero nutrido, incluyendo objetivo de envio, depuracion realizada, resultado de validacion y reporte de envio.
- En `subtareas`, agregar al final de cada linea un tiempo estimado en minutos entre parentesis.
- Usar tiempos razonables segun complejidad (ejemplo: `(... 15 min)`).

### Masivo
Usar esta instruccion unica para ejecutar el proceso completo en una sola secuencia.

Entrada minima requerida:
- `nombre del envio`
- `numero de boletin`
- `solicitante`
- base de correos en texto plano
- cifras de envio: enviados, entregados, aperturas, clics, rebotes, bajas (si aplica)
- `descripcion de la solicitud`

Secuencia obligatoria:
1. Ejecutar `Boletin` y generar `datos.txt`, `correos_validos.txt`, `correos_descartados.txt`.
2. Ejecutar `Respuesta masivo` con resumen tecnico, lista de rechazados y correo final.
3. Ejecutar `Crear solicitud` con:
- titulo igual a `nombre del envio`
- subservicio fijo `Ejecucion de envio de comunicaciones masivas`
- tarea principal y subtareas ejecutadas con tiempos en minutos.

Regla de continuidad:
- Si el usuario dice `retomar` o solicita `tomar datos de la carpeta`, leer directamente `database/mailing/<boletin>/datos.txt` y continuar el flujo desde validacion sin pedir nuevamente la base.

### Plantilla rapida (usar por defecto)

- Objetivo:
- Segmento:
- Asunto:
- Preheader:
- CTA principal:
- Fecha/hora de envio:
- Metrica objetivo:
