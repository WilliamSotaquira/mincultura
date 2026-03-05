@extends('layouts.app')

@section('title', 'Mecanismos de Supervisión, Notificación y Vigilancia | ' . config('app.name', 'Mincultura'))

@section('content')
    <style>
        .grupo-ente + .grupo-ente {
            border-top: 1px solid var(--bs-border-color);
            padding-top: 1.5rem;
            margin-top: 1.5rem;
        }
    </style>
    <section class="container py-5">
        <h1 class="h3 mb-3">Mecanismos de Supervisión, Notificación y Vigilancia</h1>
        <p class="text-body-secondary mb-4">
            Conforme a los lineamientos de transparencia, el Ministerio de las Culturas, las Artes y los Saberes publica
            los mecanismos internos y externos de supervisión, notificación y vigilancia.
        </p>

        <h2 class="h4 mb-3">Mecanismos externos</h2>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Control Fiscal</h3>
                </li>
            </ul>
            <p>
                Contraloría General de la República (CGR): máximo órgano de control fiscal del Estado, que tiene como
                misión procurar el buen uso de los recursos y bienes públicos y contribuir a la modernización del estado,
                mediante acciones de mejoramiento continuo en las distintas entidades públicas.
            </p>
            <p class="mb-3">Contactos:</p>

            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_contraloria.png"
                    alt="Logo Contraloría General de la República" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>

            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Carrera 69 No 44-35, Bogotá, Colombia.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 518 7000 / FAX: (+57) 601 518 7001</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:cgr@contraloria.gov.co">cgr@contraloria.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.contraloria.gov.co/" target="_blank">www.contraloria.gov.co/</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Fiscal</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Control Disciplinario</h3>
                </li>
            </ul>
            <p>Procuraduría General de la Nación: entidad que representa a los ciudadanos ante el Estado y vela por el correcto ejercicio de las funciones de los servidores públicos.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_pgn.png"
                    alt="Logo Procuraduría General de la Nación" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Carrera 5 # 15-80, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 587 8750</p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.procuraduria.gov.co/portal/" target="_blank">www.procuraduria.gov.co/portal/</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Regulatorio</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Control Penal</h3>
                </li>
            </ul>
            <p>Fiscalía General de la Nación: entidad de la rama judicial con autonomía administrativa y presupuestal, encargada de investigar delitos y acusar a los presuntos infractores.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_fiscalia.png"
                    alt="Logo Fiscalía General de la Nación" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Nivel Central - Avenida Calle 24 No. 52-01, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 570 20 00</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:ges.documentalpqrs@fiscalia.gov.co">ges.documentalpqrs@fiscalia.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.fiscalia.gov.co/colombia/" target="_blank">www.fiscalia.gov.co/colombia/</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Fiscal</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Control Contable</h3>
                </li>
            </ul>
            <p>Contaduría General de la Nación: entidad rectora que regula la contabilidad general de la nación y consolida la contabilidad publica.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_contaduria.png"
                    alt="Logo Contaduría General de la Nación" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Calle 26 No 69-76, Edificio Elemento, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 492 64 00</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:contactenos@contaduria.gov.co">contactenos@contaduria.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.contaduria.gov.co/" target="_blank">www.contaduria.gov.co</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Regulatorio</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Control Archivístico</h3>
                </li>
            </ul>
            <p>Archivo General de la Nación (AGN): entidad del orden naciónal encargada de la organización y direccion del Sistema Nacional de Archivos (SNA).</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_archivo.png"
                    alt="Logo Archivo General de la Nación" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Carrera 6 No. 6-91, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 328 2888</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:contacto@archivogeneral.gov.co">contacto@archivogeneral.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.archivogeneral.gov.co/" target="_blank">www.archivogeneral.gov.co</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Regulatorio</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Departamento Administrativo de la Función Publica (DAFP)</h3>
                </li>
            </ul>
            <p>Entidad técnica y transversal del Gobierno Nacional enfocada en el mejoramiento de la gestión publica.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_funcion_publica.png"
                    alt="Logo Departamento Administrativo de la Función Publica" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Carrera 6 # 12-62, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 739 5656</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:eva@funcionpublica.gov.co">eva@funcionpublica.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.funcionpublica.gov.co/" target="_blank">www.funcionpublica.gov.co</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Regulatorio</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Comisión Nacional del Servicio Civil (CNSC)</h3>
                </li>
            </ul>
            <p>Órgano autonomo e independiente responsable de la administración y vigilancia de las carreras de los servidores públicos.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_cnsc.png"
                    alt="Logo Comisión Nacional del Servicio Civil" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Carrera 16 No. 96-64, Piso 7, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 325 9700</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:atencionalciudadano@cnsc.gov.co">atencionalciudadano@cnsc.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.cnsc.gov.co/" target="_blank">www.cnsc.gov.co</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Regulatorio</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Senado de la República de Colombia</h3>
                </li>
            </ul>
            <p>Cámara alta del Congreso, con funciones de legislación y control político sobre el Gobierno Nacional.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_senado.png"
                    alt="Logo Senado de la República" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Capitolio Nacional, Plaza de Bolivar, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 382 3000</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:atencionciudadanacongreso@senado.gov.co">atencionciudadanacongreso@senado.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.senado.gov.co/" target="_blank">www.senado.gov.co</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Politico</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Cámara de Representantes de la República de Colombia</h3>
                </li>
            </ul>
            <p>Cámara baja del Congreso de la República, organismo colegiado de representación directa y función legislativa.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_camara.png"
                    alt="Logo Cámara de Representantes" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Edificio Nuevo del Congreso, Carrera 7 No. 8-68, Primer Piso, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 877 0720</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:atencionciudadanacongreso@senado.gov.co">atencionciudadanacongreso@senado.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.camara.gov.co/" target="_blank">www.camara.gov.co</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Politico</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Ministerio de Hacienda y Crédito Publico</h3>
                </li>
            </ul>
            <p>Entidad que coordina la política macroeconómica, formula y ejecuta la politica fiscal y gestióna los recursos públicos de la Nación.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_minhacienda.png"
                    alt="Logo Ministerio de Hacienda y Crédito Publico" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Carrera 8 No. 6C-38, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 381 1700</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:relacionciudadano@minhacienda.gov.co">relacionciudadano@minhacienda.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.minhacienda.gov.co/" target="_blank">www.minhacienda.gov.co</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Presupuestal</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Departamento Administrativo de la Presidencia de la República (DAPRE)</h3>
                </li>
            </ul>
            <p>Entidad encargada de organizar, dirigir y coordinar las actividades requeridas por la Presidencia de la República.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_presidencia.png"
                    alt="Logo Presidencia de la República" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Calle 7 No. 6-54, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 562 9300</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:contacto@presidencia.gov.co">contacto@presidencia.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://dapre.presidencia.gov.co/dapre" target="_blank">dapre.presidencia.gov.co/dapre</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Administrativo</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <ul class="mb-2">
                <li>
                    <h3 class="h5 d-inline">Agencia Nacional de Defensa Jurídica del Estado</h3>
                </li>
            </ul>
            <p>Entidad descentralizada encargada de liderar la prevención del dano antijurídico y la defensa jurídica del Estado.</p>
            <p class="mb-3">Contactos:</p>
            <div class="text-center mb-3">
                <img src="/transparencia/PublishingImages/entes_control/logo_juridica.png"
                    alt="Logo Agencia Nacional de Defensa Jurídica del Estado" class="img-fluid" style="height: 90px; width: auto; object-fit: contain;">
            </div>
            <div class="text-center">
                <p class="mb-1"><strong>Dirección:</strong> Carrera 7 No. 75-66, Pisos 2 y 3, Bogotá D.C.</p>
                <p class="mb-1"><strong>Teléfono:</strong> (+57) 601 255 8955</p>
                <p class="mb-1"><strong>Correo:</strong> <a href="mailto:agencia@defensajuridica.gov.co">agencia@defensajuridica.gov.co</a></p>
                <p class="mb-1"><strong>Web:</strong> <a href="https://www.defensajuridica.gov.co/" target="_blank">www.defensajuridica.gov.co</a></p>
                <p class="mb-0"><strong>Tipo de control:</strong> Juridico</p>
            </div>
        </div>

        <div class="mb-4 grupo-ente">
            <h3 class="h5">Otros mecanismos externos</h3>
            <ul>
                <li>Rendición de cuentas.</li>
                <li>Proceso auditor de la CGR.</li>
                <li>Programa de Transparencia y Ética Publica.</li>
                <li>Encuestas de satisfacción.</li>
            </ul>
        </div>

        <h2 class="h4 mb-3">Mecanismos internos de control</h2>
        <p>La entidad desarrolla mecanismos internos de control para garantizar el cumplimiento de sus funciones y mejorar continuamente su gestión.</p>
        <ul>
            <li>Políticas internas, procesos y procedimientos acordes al Modelo Integrado de Planeación y Gestión.</li>
            <li>Autoevaluación y autocontrol de los procesos y procedimientos.</li>
            <li>Auditorías internas y seguimientos a los procesos y procedimientos.</li>
            <li>Seguimiento a planes de acción, planes de mejoramiento y proyectos de inversión.</li>
            <li>Constitución y funciónamiento de comités institucionales.</li>
            <li>Código de integridad.</li>
            <li>
                Líneas de
                <a href="https://www.mincultura.gov.co/atencion-y-servicio-a-la-ciudadania/Paginas/atencion-pqrs.aspx"
                    target="_blank">Atención PQRS</a>
                y correo para notificaciones judiciales.
            </li>
        </ul>

        <div class="mb-4 grupo-ente">
            <h3 class="h5">Control Interno (de Gestión)</h3>
            <p>
                De acuerdo con el Artículo 209 de la Constitución Politica y el Artículo 11 de la Ley 87 de 1993, las
                entidades estatales deben ejercer control interno en todas sus actuaciones.
            </p>
            <p>
                Para el adecuado funciónamiento del Sistema de Control Interno, la Oficina de Control Interno del Ministerio
                de las Culturas, las Artes y los Saberes desarrolla cinco roles fundamentales establecidos en el Decreto 648
                de 2017:
            </p>
            <ul>
                <li>Liderazgo estratégico.</li>
                <li>Enfoque hacia la prevención.</li>
                <li>Evaluación de la gestión del riesgo.</li>
                <li>Evaluación y seguimiento.</li>
                <li>Relación con entes externos.</li>
            </ul>
            <p class="mb-0">
                Para amplia la información visite:
                <a href="https://www.mincultura.gov.co/despacho/Paginas/oficina-de-control-interno/default.aspx" target="_blank">
                    Oficina de control interno
                </a>
            </p>
        </div>

        <div class="mb-4 grupo-ente">
            <h3 class="h5">Control interno disciplinario</h3>
            <p>
                El Grupo de Control Interno Disciplinario es responsable de ejercer la función disciplinaria en etapa de
                instrucción, en los casos de su competencia, frente a servidores y exservidores del Ministerio.
            </p>
            <p class="mb-0">
                Para amplia la información visite:
                <a href="https://www.mincultura.gov.co/despacho/Paginas/grupo-de-control-interno-disciplinario/grupo-de-control-interno-disciplinario.aspx"
                    target="_blank">
                    Grupo de control interno disciplinario
                </a>
            </p>
        </div>

        <a href="{{ route('transparencia.index') }}" class="btn btn-outline-secondary btn-sm">Volver a Transparencia</a>
    </section>
@endsection





