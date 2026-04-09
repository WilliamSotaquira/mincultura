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

        :root{--ink:#06090f;--poster:#5b6484;--poster-deep:#4e5876;--cream:#f4ebbe;--butter:#eed367;--teal:#58d7c9;--teal-deep:#2fc2b0;--mint:#70d7b5;--mint-dark:#4cc4ab;--pink:#e88bc1;--orange:#ef9141;--red:#c85c4f;--aqua:#4cd0c7;--line:rgba(18,26,35,.16);--text:#162127;--shadow:0 28px 70px rgba(0,0,0,.28)}
        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{margin:0;min-width:320px;background:#020305;font-family:'Google Sans',sans-serif;color:var(--cream)}
        a{color:inherit;text-decoration:none}
        img,video,svg{display:block;max-width:100%}
        .page{overflow-x:clip;background:#020305}
        .wrap{width:min(100% - 18px,1040px);margin:0 auto}

        .poster-hero{position:relative;background:#49556f;overflow:hidden}
        .poster-hero::before{content:"";position:absolute;inset:0;background:repeating-linear-gradient(180deg,rgba(255,255,255,.13) 0 1px,transparent 1px 5px);mix-blend-mode:screen;opacity:.55;pointer-events:none}
        .sky-media{position:absolute;inset:0 0 auto;height:280px;overflow:hidden}
        .sky-media img,.sky-media video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
        .sky-media img{filter:saturate(.65) brightness(1.05)}
        .sky-media video{opacity:.22;mix-blend-mode:multiply}

        .poster-shell{position:relative;padding:0}


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

        .house-panel{position:relative;z-index:5;width:min(100% - 48px,1080px);margin:0 auto 0;padding:60px clamp(20px,3.4vw,40px) 0;background:transparent;clip-path:polygon(50% 0,100% 14%,100% 100%,0 100%,0 14%);box-shadow:none;overflow:hidden}
        .house-panel::before,.house-panel::after{content:none}
        .roof-carousel{position:absolute;left:0;right:0;top:60px;height:318px;z-index:3;overflow:hidden}
        .roof-slide{position:absolute;inset:0;opacity:0;transition:opacity .55s ease}
        .roof-slide.is-active{opacity:1}
        .roof-slide::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(255,255,255,.03),transparent 62%)}
        .roof-slide-media{width:100%;height:100%;object-fit:cover;object-position:center top}
        .roof-dots{position:absolute;left:50%;top:332px;z-index:6;display:flex;gap:10px;transform:translateX(-50%)}
        .roof-dot{width:12px;height:12px;padding:0;border:0;border-radius:999px;background:rgba(244,235,190,.34);box-shadow:0 0 0 1px rgba(9,14,18,.18);cursor:pointer;transition:transform .18s ease,background-color .18s ease}
        .roof-dot[aria-selected="true"]{background:var(--cream);transform:scale(1.16)}
        .roof-dot:focus-visible{outline:2px solid rgba(244,235,190,.92);outline-offset:3px}

        .themes-section{position:relative;z-index:4;padding:480px 0 34px}
        .themes-title{position:relative;z-index:4;max-width:860px;margin:0 auto 24px;text-align:right;font-family:'Alternate Gothic',sans-serif;font-size:48px;letter-spacing:.05em;text-transform:uppercase;color:var(--cream)}
        .themes-stage{position:relative;max-width:860px;margin:0 auto}
        .themes-stage::before{content:"";position:absolute;left:-132px;right:-132px;top:-245px;height:266px;background:linear-gradient(180deg,rgba(92,102,132,.98),rgba(78,88,118,.98));z-index:1}
        .board{position:relative;z-index:2;overflow:visible;color:var(--text);background:linear-gradient(180deg,var(--mint) 0%,var(--mint-dark) 100%);box-shadow:0 22px 44px rgba(14,27,34,.28)}
        .chip-row{position:absolute;left:14px;right:14px;top:-18px;display:grid;grid-template-columns:repeat(8,1fr);gap:7px}
        .board-layers{position:absolute;inset:0;z-index:1;pointer-events:none}
        .board-collage-left{position:absolute;left:-102px;top:-546px;width:min(71vw,700px);height:1060px}
        .board-collage-right{position:absolute;right:-112px;top:-102px;width:min(24vw,214px);height:382px;opacity:.9}
        .board-panel,.topic-grid{position:relative;z-index:3}
        .chip{display:flex;align-items:center;justify-content:center;height:32px;padding:0;border:0;clip-path:polygon(12% 100%,0 40%,50% 0,100% 40%,88% 100%);font-size:12px;font-weight:700;color:#1c2730;background:transparent;cursor:pointer;transition:transform .18s ease,filter .18s ease,box-shadow .18s ease}
        .chip:hover{transform:translateY(-2px)}
        .chip:focus-visible{outline:2px solid rgba(24,33,39,.7);outline-offset:2px}
        .chip[aria-selected="true"]{transform:translateY(-4px);filter:saturate(1.06) brightness(1.02);box-shadow:0 9px 0 rgba(34,53,60,.16)}
        .chip:nth-child(1){background:#f3d44f}
        .chip:nth-child(2){background:#76d677}
        .chip:nth-child(3){background:#f2a857}
        .chip:nth-child(4){background:#f5a1cf}
        .chip:nth-child(5){background:#ff9464}
        .chip:nth-child(6){background:#d1ef8d}
        .chip:nth-child(7){background:#b8e6ef}
        .chip:nth-child(8){background:#c8dbef}
        .board-panel{display:block}
        .board-intro{display:grid;grid-template-columns:1.2fr .92fr;align-items:stretch;min-height:184px;border-bottom:1px solid var(--line)}
        .board-copy{display:flex;flex-direction:column;justify-content:flex-start;padding:22px 18px 12px}
        .board-copy:first-child{border-right:1px solid var(--line)}
        .board-copy h2{margin:0;font-family:'Alternate Gothic',sans-serif;font-size:34px;line-height:.96;letter-spacing:.02em;text-transform:uppercase}
        .board-copy p{margin:0;font-size:13px;line-height:1.56;color:rgba(20,33,38,.86)}
        .board-copy .lead{margin-top:10px;max-width:34ch}
        .topic-grid{display:grid;grid-template-columns:repeat(3,1fr)}
        .topic-card{display:flex;flex-direction:column;gap:8px;min-height:102px;padding:12px 14px;border-right:1px solid var(--line);border-bottom:1px solid var(--line);transition:background-color .2s ease,box-shadow .2s ease}
        .topic-card:nth-child(3n){border-right:0}
        .topic-card:hover{background:rgba(255,255,255,.12)}
        .topic-card.is-emphasis{background:rgba(255,255,255,.16);box-shadow:inset 0 0 0 2px rgba(20,33,38,.18)}
        .topic-card h3{margin:0;font-size:13px;font-weight:700;line-height:1.24;text-transform:uppercase}
        .topic-card p{margin:0;font-size:11px;line-height:1.48;color:rgba(20,33,38,.8)}
        .topic-link{margin-top:auto;display:inline-flex;align-items:center;gap:8px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.05em}
        .topic-link::before{content:"";width:18px;height:2px;background:rgba(20,33,38,.56)}

        .highlights{position:relative;z-index:2;padding:36px 0 52px}
        .highlights::before{content:"";position:absolute;inset:0;background-image:url('{{ asset('assets/casa-comun/layer-stripes.png') }}');background-size:280px auto;background-repeat:repeat;opacity:.1;mix-blend-mode:screen;pointer-events:none}
        .highlights-title{max-width:860px;margin:0 auto 18px;font-family:'Alternate Gothic',sans-serif;font-size:50px;letter-spacing:.05em;text-transform:uppercase;color:var(--cream)}
        .cards{max-width:860px;margin:0 auto;display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
        .card{display:flex;flex-direction:column;overflow:hidden;min-height:100%;box-shadow:0 18px 40px rgba(0,0,0,.16)}
        .card img{width:100%;aspect-ratio:1/1;object-fit:cover}
        .card-body{display:flex;flex:1 1 auto;flex-direction:column;gap:10px;padding:12px 12px 14px;color:#261d1f}
        .card-pink{background:linear-gradient(180deg,#ef8abd,#e680b1)}
        .card-yellow{background:linear-gradient(180deg,#f2c83d,#ebbf2d)}
        .card-orange{background:linear-gradient(180deg,#f39a49,#ef8740)}
        .card h3{margin:0;font-size:13px;font-weight:700;line-height:1.34;text-transform:uppercase}
        .card p{margin:0;font-size:11px;line-height:1.48;color:rgba(30,22,25,.76)}
        .mini-btn{display:inline-flex;align-items:center;justify-content:center;align-self:flex-start;min-height:30px;padding:0 16px;border-radius:999px;background:rgba(255,255,255,.92);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.05em}

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

        @media (max-width:900px){
            .house-panel{width:min(100% - 32px,1080px);padding-top:52px}
            .roof-carousel{top:52px;height:286px}
            .roof-dots{top:294px}
            .themes-section{padding-top:326px}
            .themes-title{max-width:800px;font-size:44px}
            .themes-stage{max-width:800px}
            .themes-stage::before{left:-94px;right:-94px;top:-154px;height:232px}
            .board-collage-left{left:-66px;top:-450px;width:min(69vw,580px);height:874px}
            .board-collage-right{right:-88px;top:-82px;width:min(24vw,182px);height:336px}
            .board-intro,.strip-grid,.strip-sonido .strip-grid{grid-template-columns:1fr}
            .strip-grid{height:auto}
            .strip-copy,.strip-art{height:auto;min-height:0}
            .board-copy:first-child{border-right:0;border-bottom:1px solid var(--line)}
            .strip-copy,.strip-mirada .strip-copy,.strip-sonido .strip-copy{align-items:center;text-align:center;padding:18px 18px 24px}
        }

        @media (max-width:720px){
            .wrap{width:min(100% - 12px,1040px)}
            .sky-media{height:228px}
            .roof-carousel{top:38px;height:188px}
            .roof-dots{top:204px;gap:8px}
            .roof-dot{width:10px;height:10px}
            .themes-section{padding-top:164px}
            .themes-stage::before{left:-14px;right:-14px;top:-72px;height:128px}
            .board-layers{display:none}
            .house-panel{width:100%;margin-top:0;padding:38px 14px 0;clip-path:polygon(50% 0,100% 10%,100% 100%,0 100%,0 10%)}
            .themes-title,.highlights-title,.strip-copy h2{font-size:40px}
            .themes-stage,.cards,.highlights-title{max-width:100%}
            .themes-stage::before{left:-14px;right:-14px;top:-52px;height:88px}
            .chip-row{grid-template-columns:repeat(4,1fr);row-gap:5px;top:-31px}
            .board-intro{min-height:0}
            .board-copy{padding:36px 16px 16px}
            .board-copy h2{font-size:30px}
            .board-copy p{font-size:13px}
            .topic-card h3{font-size:13px}
            .topic-card p{font-size:12px}
            .card h3{font-size:13px}
            .card p{font-size:11px}
            .strip-copy p{font-size:13px}
            .topic-grid,.cards{grid-template-columns:1fr}
            .topic-card:nth-child(3n){border-right:1px solid var(--line)}
            .topic-card{min-height:0;padding:14px 16px}
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
    <div class="page">
        <section class="poster-hero">
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

                    <section class="themes-section">
                        <h1 class="themes-title">Tematicas</h1>
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
                                <div class="chip-row" role="tablist" aria-label="Tematicas de Casa Común">
                                    <button class="chip" id="tema-tab-1" role="tab" type="button" aria-selected="true" aria-controls="temas-panel" tabindex="0" data-title="Somos territorios bioculturales y economias populares" data-lead="Un mapa editorial para reunir conversaciones sobre cuidado, intercambio, memoria y formas de vida compartidas." data-copy="Casa Común reúne prácticas, relatos y experiencias que surgen desde los territorios. Aquí convergen creación comunitaria, saberes situados, circulación cultural y economías populares con una mirada viva, cercana y contemporánea." data-focus="territorio economias">+</button>
                                    <button class="chip" id="tema-tab-2" role="tab" type="button" aria-selected="false" aria-controls="temas-panel" tabindex="-1" data-title="Memorias compartidas que siguen activando comunidad" data-lead="Relatos, celebraciones, archivos y oralidades que cuidan el pasado para mantenerlo presente." data-copy="Esta entrada destaca procesos donde la memoria no se conserva en silencio: circula en fiestas, repertorios, documentos, voces y prácticas que sostienen identidades colectivas." data-focus="patrimonio participacion">✦</button>
                                    <button class="chip" id="tema-tab-3" role="tab" type="button" aria-selected="false" aria-controls="temas-panel" tabindex="-1" data-title="Territorio, ambiente y cuidado comun" data-lead="Acciones colectivas que conectan diversidad biocultural, gestión local y maneras sostenibles de habitar." data-copy="Aquí aparecen experiencias de protección del entorno, vínculos comunitarios y decisiones compartidas que entienden la cultura como una forma concreta de cuidado del territorio." data-focus="territorio saberes">◌</button>
                                    <button class="chip" id="tema-tab-4" role="tab" type="button" aria-selected="false" aria-controls="temas-panel" tabindex="-1" data-title="Circulacion cultural y escenarios de encuentro" data-lead="Rutas, festivales, espacios y plataformas que conectan públicos, creadoras, creadores y comunidades." data-copy="Casa Común también se mueve. Esta temática reúne experiencias donde la circulación amplía el alcance de los contenidos y fortalece la vida cultural local." data-focus="circulacion participacion">∞</button>
                                    <button class="chip" id="tema-tab-5" role="tab" type="button" aria-selected="false" aria-controls="temas-panel" tabindex="-1" data-title="Economias populares que sostienen la vida cultural" data-lead="Intercambios, oficios y emprendimientos solidarios que producen bienestar material y simbólico." data-copy="Este tabpanel reúne prácticas productivas, redes locales y formas de cooperación que hacen posible la creación, la circulación y la permanencia de proyectos culturales." data-focus="economias">✳</button>
                                <button class="chip" id="tema-tab-6" role="tab" type="button" aria-selected="false" aria-controls="temas-panel" tabindex="-1" data-title="Saberes locales e innovacion cotidiana" data-lead="Aprendizajes situados que mezclan tradición, experimentación y soluciones nacidas desde la experiencia." data-copy="La cultura también se transmite como conocimiento útil. Aquí se reconocen prácticas pedagógicas, técnicas, oficios y metodologías que evolucionan sin romper su raíz territorial." data-focus="saberes patrimonio">✷</button>
                                    <button class="chip" id="tema-tab-7" role="tab" type="button" aria-selected="false" aria-controls="temas-panel" tabindex="-1" data-title="Participacion y tejido social para un futuro comun" data-lead="Conversaciones abiertas que fortalecen vínculos, confianza y capacidad colectiva de decisión." data-copy="Esta temática pone el foco en procesos donde la cultura convoca, organiza y abre espacios de participación para imaginar comunidades más conectadas, diversas y sostenibles." data-focus="participacion circulacion">↗</button>
                                    <button class="chip" id="tema-tab-8" role="tab" type="button" aria-selected="false" aria-controls="temas-panel" tabindex="-1" data-title="Futuros posibles desde el territorio" data-lead="Miradas contemporáneas que integran creación, sostenibilidad, innovación y bienestar compartido." data-copy="El tabpanel también proyecta horizontes. Aquí se agrupan relatos y prácticas que ensayan nuevas formas de colaboración entre cultura, comunidad y transformación social." data-focus="territorio participacion saberes">⟡</button>
                                </div>

                                <div class="board-panel" id="temas-panel" role="tabpanel" tabindex="0" aria-labelledby="tema-tab-1">
                                    <div class="board-intro">
                                        <div class="board-copy">
                                            <h2 id="themes-panel-title">Somos territorios bioculturales y economias populares</h2>
                                            <p class="lead" id="themes-panel-lead">Un mapa editorial para reunir conversaciones sobre cuidado, intercambio, memoria y formas de vida compartidas.</p>
                                        </div>
                                        <div class="board-copy">
                                            <p id="themes-panel-copy">Casa Común reúne prácticas, relatos y experiencias que surgen desde los territorios. Aquí convergen creación comunitaria, saberes situados, circulación cultural y economías populares con una mirada viva, cercana y contemporánea.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="topic-grid">
                                    <article class="topic-card d1 is-emphasis" data-topic="patrimonio">
                                        <h3>Patrimonio vivo y memorias compartidas</h3>
                                        <p>Procesos que protegen archivos, oralidades, celebraciones y relatos con valor para las comunidades.</p>
                                        <a class="topic-link" href="#!">Conocer más</a>
                                    </article>
                                    <article class="topic-card d2 is-emphasis" data-topic="economias">
                                        <h3>Economias populares y oficios culturales</h3>
                                        <p>Redes de intercambio, emprendimientos solidarios y prácticas que sostienen la vida cultural cotidiana.</p>
                                        <a class="topic-link" href="#!">Explorar</a>
                                    </article>
                                    <article class="topic-card d3 is-emphasis" data-topic="territorio">
                                        <h3>Territorio, ambiente y cuidado comun</h3>
                                        <p>Acciones colectivas que articulan diversidad biocultural, gestión local y nuevas formas de habitar.</p>
                                        <a class="topic-link" href="#!">Ver historias</a>
                                    </article>
                                    <article class="topic-card d4" data-topic="circulacion">
                                        <h3>Circulacion cultural y escenarios de encuentro</h3>
                                        <p>Rutas, festivales, espacios culturales y plataformas que ponen en diálogo públicos y comunidades.</p>
                                        <a class="topic-link" href="#!">Recorrer</a>
                                    </article>
                                    <article class="topic-card d5" data-topic="saberes">
                                        <h3>Saberes locales e innovacion cotidiana</h3>
                                        <p>Aprendizajes situados que conectan tradición, experimentación y soluciones nacidas del territorio.</p>
                                        <a class="topic-link" href="#!">Descubrir</a>
                                    </article>
                                    <article class="topic-card d6" data-topic="participacion">
                                        <h3>Participacion, tejido social y futuro comun</h3>
                                        <p>Conversaciones abiertas para imaginar comunidades más conectadas, diversas y sostenibles.</p>
                                        <a class="topic-link" href="#!">Sumarse</a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="highlights">
                        <h2 class="highlights-title">Destacados</h2>
                        <div class="cards">
                            <article class="card d1">
                                <img src="{{ asset('assets/casa-comun/destacado-musica.jpeg') }}" alt="Artista en escenario">
                                <div class="card-body card-pink">
                                    <h3>Cantaoras, rituales y encuentros donde la voz sostiene memoria y comunidad.</h3>
                                    <p>Relatos sonoros, transmisión oral y celebraciones que continúan moviendo la cultura desde el territorio.</p>
                                    <a class="mini-btn" href="#!">Leer más</a>
                                </div>
                            </article>

                            <article class="card d2">
                                <img src="{{ asset('assets/casa-comun/destacado-teatro.jpeg') }}" alt="Interior de teatro">
                                <div class="card-body card-yellow">
                                    <h3>Escenas y públicos que hacen del espacio cultural un punto de encuentro abierto.</h3>
                                    <p>Experiencias de circulación, creación escénica y gestión local que fortalecen la vida cultural.</p>
                                    <a class="mini-btn" href="#!">Leer más</a>
                                </div>
                            </article>

                            <article class="card d3">
                                <img src="{{ asset('assets/casa-comun/destacado-danza.jpeg') }}" alt="Grupo cultural">
                                <div class="card-body card-orange">
                                    <h3>Procesos colectivos que convierten la cultura en motor de economías populares.</h3>
                                    <p>Redes, emprendimientos y prácticas colaborativas que activan producción simbólica y bienestar local.</p>
                                    <a class="mini-btn" href="#!">Leer más</a>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="feature-strip strip-mirada">
            <div class="wrap strip-grid">
                <div class="strip-art" aria-hidden="true"></div>
                <div class="strip-copy">
                    <h2>Somos mirada</h2>
                    <p>Galerias, piezas y relatos visuales para recorrer el territorio desde otras perspectivas.</p>
                    <a class="strip-btn" href="#!">Descubre aqui</a>
                </div>
            </div>
        </section>

        <section class="feature-strip strip-sonido">
            <div class="wrap strip-grid">
                <div class="strip-copy">
                    <h2>Somos sonido, somos voces</h2>
                    <p>Escuchas abiertas para conocer acentos, memorias, archivos y ritmos que habitan Casa Comun.</p>
                    <a class="strip-btn" href="#!">Escucha aqui</a>
                </div>
                <div class="strip-art" aria-hidden="true"></div>
            </div>
        </section>

        <footer class="footer">
            <a class="footer-pill" href="https://www.mincultura.gov.co/" target="_blank" rel="noreferrer">https://www.mincultura.gov.co/</a>
            <div class="socials" aria-label="Redes sociales">
                <a href="https://www.facebook.com/MinisterioCultura/" target="_blank" rel="noreferrer" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M13.4 21v-8h2.7l.4-3.1h-3.1V8.2c0-.9.3-1.5 1.6-1.5h1.7V4c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.4v1.7H7.6V13h2.9v8h2.9Z"/></svg></a>
                <a href="https://www.instagram.com/mincultura/" target="_blank" rel="noreferrer" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 7.2A4.8 4.8 0 1 0 12 17a4.8 4.8 0 0 0 0-9.8Zm0 8A3.2 3.2 0 1 1 12 8.8a3.2 3.2 0 0 1 0 6.4Zm6.1-8.3a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0ZM21 7c-.1-1.5-.4-2.5-1.1-3.2-.7-.8-1.7-1-3.2-1.1C15.3 2.6 15 2.6 12 2.6s-3.3 0-4.7.1c-1.5.1-2.5.3-3.2 1.1C3.3 4.5 3 5.5 3 7c-.1 1.4-.1 1.8-.1 5s0 3.6.1 5c.1 1.5.3 2.5 1.1 3.2.7.8 1.7 1 3.2 1.1 1.4.1 1.7.1 4.7.1s3.3 0 4.7-.1c1.5-.1 2.5-.3 3.2-1.1.8-.7 1-1.7 1.1-3.2.1-1.4.1-1.7.1-5s0-3.6-.1-5Zm-2 10.2c-.1 1.1-.2 1.7-.5 2-.4.4-1 .5-2 .5-1.5.1-1.7.1-4.5.1s-3 0-4.5-.1c-1-.1-1.6-.2-2-.5-.3-.3-.4-.9-.5-2C5 15.8 5 15.5 5 12s0-3.8.1-5.2c.1-1.1.2-1.7.5-2 .4-.4 1-.5 2-.5C9 4.2 9.2 4.2 12 4.2s3 0 4.5.1c1 .1 1.6.2 2 .5.3.3.4.9.5 2 .1 1.4.1 1.7.1 5.2s0 3.8-.1 5.2Z"/></svg></a>
                <a href="https://x.com/mincultura" target="_blank" rel="noreferrer" aria-label="X"><svg viewBox="0 0 24 24"><path d="M18.8 3H21l-4.8 5.5L22 21h-4.6l-3.7-5.1L9.1 21H7l5-5.8L2.5 3h4.6l3.4 4.7L18.8 3Zm-1.6 16.3h1.3L7.3 4.6H6l11.2 14.7Z"/></svg></a>
                <a href="https://www.youtube.com/@Mincultura" target="_blank" rel="noreferrer" aria-label="YouTube"><svg viewBox="0 0 24 24"><path d="M21.4 7.3a2.8 2.8 0 0 0-2-2c-1.7-.5-7.4-.5-7.4-.5s-5.7 0-7.4.5a2.8 2.8 0 0 0-2 2A30 30 0 0 0 2.2 12a30 30 0 0 0 .4 4.7 2.8 2.8 0 0 0 2 2c1.7.5 7.4.5 7.4.5s5.7 0 7.4-.5a2.8 2.8 0 0 0 2-2 30 30 0 0 0 .4-4.7 30 30 0 0 0-.4-4.7ZM10.2 15.3V8.7L15.9 12l-5.7 3.3Z"/></svg></a>
            </div>
        </footer>
    </div>

    <script>
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
            const panel = document.getElementById('temas-panel');
            const title = document.getElementById('themes-panel-title');
            const lead = document.getElementById('themes-panel-lead');
            const copy = document.getElementById('themes-panel-copy');
            const cards = Array.from(document.querySelectorAll('.topic-card[data-topic]'));

            if (!tabs.length || !panel || !title || !lead || !copy) return;

            const activateTab = (tab, moveFocus = true) => {
                tabs.forEach((item) => {
                    const selected = item === tab;
                    item.setAttribute('aria-selected', selected ? 'true' : 'false');
                    item.tabIndex = selected ? 0 : -1;
                });

                title.textContent = tab.dataset.title || '';
                lead.textContent = tab.dataset.lead || '';
                copy.textContent = tab.dataset.copy || '';
                panel.setAttribute('aria-labelledby', tab.id);

                const focusTopics = new Set((tab.dataset.focus || '').split(/\s+/).filter(Boolean));
                cards.forEach((card) => {
                    card.classList.toggle('is-emphasis', focusTopics.has(card.dataset.topic));
                });

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
        })();
    </script>
</body>
</html>
