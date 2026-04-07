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

        :root{--bg:#141a32;--bg-soft:#5d6482;--cream:#f7f0ce;--mint:#47d8b4;--mint-deep:#30bea0;--yellow:#f0d53b;--pink:#f68dcb;--orange:#ff9434;--orange-deep:#ef6d2f;--cyan:#39d2ca;--red:#d94a43;--text:#162126;--line:rgba(16,24,39,.14);--shadow:0 24px 60px rgba(0,0,0,.24)}
        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{margin:0;min-width:320px;font-family:'Google Sans',sans-serif;background:linear-gradient(180deg,#111730 0%,#181e39 100%);color:var(--cream)}
        a{text-decoration:none;color:inherit}
        img,video{display:block;max-width:100%}
        .page{overflow-x:clip}
        .wrap{width:min(100% - 24px,1080px);margin:0 auto}

        .hero{position:relative;padding:18px 0 0;background:linear-gradient(180deg,#18cdb8 0%,#18cdb8 24%,#1b2441 72%,#1a213b 100%);overflow:hidden}
        .hero::before{content:"";position:absolute;inset:0;background:repeating-linear-gradient(180deg,rgba(255,255,255,.08) 0 1px,transparent 1px 4px);pointer-events:none}
        .hero-header{position:relative;z-index:2}
        .brand{display:inline-flex;align-items:center;gap:8px;font-size:11px;font-weight:700;letter-spacing:.06em;text-transform:uppercase}
        .brand-mark{width:18px;height:18px;border-radius:50%;background:linear-gradient(135deg,#fff,#cae4ff 70%,#3d7be0)}

        .hero-media{position:absolute;left:0;right:0;top:0;height:430px;overflow:hidden}
        .hero-media img,.hero-media video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
        .hero-media img{filter:saturate(1.03)}
        .hero-media video{mix-blend-mode:screen;opacity:.32}
        .hero-media::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(24,205,184,.12),rgba(14,18,34,.24) 65%,rgba(14,18,34,.46))}

        .house{position:relative;left:50%;z-index:3;width:100vw;max-width:none;margin:112px 0 0;transform:translateX(-50%);padding:30px 20px 100px;background:rgba(93,100,130,.92);clip-path:polygon(50% 0,100% 70%,100% 100%,0 100%,0 70%);box-shadow:var(--shadow);text-align:center;backdrop-filter:blur(3px)}
        .logo{width:min(100%,300px);margin:0 auto}
        .logo svg{width:100%;height:auto;overflow:visible}
        .logo text{font-family:'Alternate Gothic',sans-serif;font-size:34px;letter-spacing:.08em;fill:var(--cream)}
        .logo .accent{fill:var(--yellow)}
        .tagline{margin-top:-2px;font-size:12px;font-weight:700;letter-spacing:.28em;text-transform:uppercase}

        .tematicas{position:relative;padding:10px 0 0}
        .tematicas-title{margin:0 0 12px;text-align:right;font-family:'Alternate Gothic',sans-serif;font-size:34px;letter-spacing:.05em;text-transform:uppercase}
        .board{position:relative;background:linear-gradient(180deg,var(--mint) 0%,var(--mint-deep) 100%);color:var(--text);box-shadow:0 22px 54px rgba(5,24,24,.3)}
        .board::before{content:"";position:absolute;left:6px;right:6px;top:-24px;height:26px;background:linear-gradient(135deg,transparent 12px,#ffc93b 0) left/14.3% 100% no-repeat,linear-gradient(45deg,transparent 12px,#f37fc7 0) 14.3% 0/14.3% 100% no-repeat,linear-gradient(135deg,transparent 12px,#ff9835 0) 28.6% 0/14.3% 100% no-repeat,linear-gradient(45deg,transparent 12px,#ffe776 0) 42.9% 0/14.3% 100% no-repeat,linear-gradient(135deg,transparent 12px,#7fe6d9 0) 57.2% 0/14.3% 100% no-repeat,linear-gradient(45deg,transparent 12px,#82c6ff 0) 71.5% 0/14.3% 100% no-repeat,linear-gradient(135deg,transparent 12px,#ffa6d7 0) right/14.3% 100% no-repeat}
        .board-top{display:grid;grid-template-columns:1.1fr 1fr}
        .board-copy{padding:32px 24px 18px}
        .board-copy:first-child{border-right:1px solid var(--line)}
        .board-copy h2{margin:0 0 14px;font-family:'Alternate Gothic',sans-serif;font-size:40px;line-height:.92;letter-spacing:.03em;text-transform:uppercase}
        .board-copy p{margin:0;font-size:13px;line-height:1.65;color:rgba(20,33,38,.86)}
        .topics{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid var(--line)}
        .topic{padding:18px 16px 16px;min-height:122px;border-right:1px solid var(--line);border-bottom:1px solid var(--line);transform:translateY(18px);opacity:0;transition:transform .42s ease,opacity .42s ease,background-color .18s ease}
        .topic:nth-child(3n){border-right:0}
        .topic.show{transform:none;opacity:1}
        .topic:hover{background:rgba(255,255,255,.12)}
        .topic-mark{display:inline-flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:50%;border:2px solid rgba(20,33,38,.42);font-size:12px;font-weight:700;margin-bottom:12px}
        .topic h3{margin:0 0 8px;font-size:12px;font-weight:700;line-height:1.35;text-transform:uppercase}
        .topic p{margin:0;font-size:11px;line-height:1.55;color:rgba(20,33,38,.8)}

        .destacados{position:relative;padding:48px 0 42px;background:repeating-linear-gradient(90deg,rgba(255,255,255,.06) 0 1px,transparent 1px 8px),linear-gradient(180deg,#4f5878 0%,#343b55 100%)}
        .section-title{margin:0 0 22px;font-family:'Alternate Gothic',sans-serif;font-size:38px;letter-spacing:.05em;text-transform:uppercase}
        .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
        .card{display:flex;flex-direction:column;overflow:hidden;border-radius:12px;box-shadow:0 16px 34px rgba(0,0,0,.22);transform:translateY(22px);opacity:0;transition:transform .46s ease,opacity .46s ease}
        .card.show{transform:none;opacity:1}
        .card img{width:100%;aspect-ratio:.86/1;object-fit:cover}
        .card-body{display:flex;flex:1 1 auto;flex-direction:column;gap:12px;padding:14px 12px 14px}
        .card-pink{background:linear-gradient(180deg,#ff9bd2,#ff7ebb)}
        .card-yellow{background:linear-gradient(180deg,#efd126,#ffb80f)}
        .card-orange{background:linear-gradient(180deg,#ffaa3f,#ff8738)}
        .card h3{margin:0;font-size:13px;line-height:1.45;color:#251c1f}
        .card p{margin:0;font-size:11px;line-height:1.55;color:rgba(29,20,24,.74)}
        .mini-btn{display:inline-flex;align-items:center;justify-content:center;align-self:flex-start;min-width:84px;min-height:28px;padding:0 12px;border-radius:999px;background:rgba(255,255,255,.92);color:#131722;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.04em}

        .band{overflow:hidden}
        .band-inner{display:grid;grid-template-columns:1fr 1fr;align-items:center;min-height:150px}
        .band-copy{padding:24px 20px;text-align:center}
        .band-copy h2{margin:0 0 10px;font-family:'Alternate Gothic',sans-serif;font-size:36px;letter-spacing:.05em;text-transform:uppercase}
        .band-copy p{margin:0 0 14px;font-size:13px;line-height:1.5}
        .band-btn{display:inline-flex;align-items:center;justify-content:center;min-width:132px;min-height:36px;padding:0 18px;border-radius:999px;background:var(--cream);color:#161922;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.06em}
        .band-visual{min-height:150px}
        .mirada{background:linear-gradient(90deg,var(--red),#ef703b)}
        .mirada .band-visual{background:radial-gradient(circle at 18% 40%,rgba(255,176,54,.72) 0 54px,transparent 55px),radial-gradient(circle at 40% 58%,rgba(28,37,67,.28) 0 44px,transparent 45px),repeating-linear-gradient(90deg,rgba(23,31,58,.18) 0 2px,transparent 2px 48px)}
        .sonido{background:linear-gradient(90deg,#31d4c8,#35c1c7)}
        .sonido .band-visual{background:radial-gradient(circle at 78% 26%,#ff7eba 0 52px,transparent 53px),radial-gradient(circle at 94% 62%,#ff9a37 0 82px,transparent 83px),radial-gradient(circle at 84% 68%,#ffe24f 0 34px,transparent 35px),radial-gradient(circle at 67% 18%,#4f88ff 0 16px,transparent 17px)}

        .footer{padding:26px 16px 34px;background:#07080d;text-align:center}
        .footer-pill{display:inline-flex;align-items:center;justify-content:center;min-height:28px;padding:0 14px;border-radius:999px;background:#f7f0ce;color:#171b24;font-size:11px;font-weight:700;margin-bottom:18px}
        .socials{display:flex;justify-content:center;gap:10px}
        .socials a{display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:50%;background:rgba(255,255,255,.08)}
        .socials svg{width:14px;height:14px;fill:#fff}

        .d1{transition-delay:.07s}.d2{transition-delay:.14s}.d3{transition-delay:.21s}

        @media (max-width:860px){
            .board-top,.band-inner{grid-template-columns:1fr}
            .board-copy:first-child{border-right:0;border-bottom:1px solid var(--line)}
        }

        @media (max-width:680px){
            .wrap{width:min(100% - 16px,1080px)}
            .hero{padding-bottom:0}
            .hero-media{height:340px}
            .house{margin-top:96px;padding:60px 18px 22px}
            .logo{width:250px}
            .logo text{font-size:30px}
            .tagline{font-size:11px;letter-spacing:.22em}
            .tematicas-title,.section-title,.band-copy h2{font-size:30px}
            .board-copy{padding:26px 18px 16px}
            .board-copy h2{font-size:31px}
            .topics{grid-template-columns:repeat(2,1fr)}
            .topic:nth-child(3n){border-right:1px solid var(--line)}
            .topic:nth-child(2n){border-right:0}
            .cards{gap:8px}
            .card-body{padding:10px 8px 12px}
            .card h3{font-size:11px}
            .card p{font-size:10px}
            .mini-btn{min-width:74px}
            .band-copy{padding:20px 16px 24px}
            .band-visual{min-height:92px}
        }

        @media (prefers-reduced-motion:reduce){
            html{scroll-behavior:auto}
            .topic,.card{transition:none}
        }
    </style>
</head>
<body>
    <div class="page">
        <section class="hero">
            <div class="hero-media" aria-hidden="true">
                <img src="{{ asset('assets/casa-comun/hero-bg.png') }}" alt="">
                <video autoplay muted loop playsinline preload="metadata" poster="{{ asset('assets/casa-comun/hero-bg.png') }}">
                    <source src="{{ asset('assets/casa-comun/hero-video.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="wrap hero-header">
                <a class="brand" href="https://www.mincultura.gov.co/" target="_blank" rel="noreferrer">
                    <span class="brand-mark" aria-hidden="true"></span>
                    <span>Minculturas</span>
                </a>
            </div>

            <div class="wrap">
                <div class="house">
                    <div class="logo" aria-label="Casa Común">
                        <svg viewBox="0 0 320 120" role="img" aria-hidden="true">
                            <defs>
                                <path id="casa-comun-curve" d="M 42 94 Q 160 6 278 94" />
                            </defs>
                            <text>
                                <textPath href="#casa-comun-curve" startOffset="50%" text-anchor="middle">
                                    CAS<tspan class="accent">A</tspan> COMÚN
                                </textPath>
                            </text>
                        </svg>
                    </div>
                    <div class="tagline">Territorios de encuentro</div>
                </div>
            </div>
        </section>

        <section class="tematicas">
            <div class="wrap">
                <h1 class="tematicas-title">Temáticas</h1>
                <div class="board">
                    <div class="board-top">
                        <div class="board-copy">
                            <h2>Somos territorios bioculturales y economías populares</h2>
                            <p>Un mapa editorial para reunir relatos, prácticas, aprendizajes y rutas que nacen desde los territorios.</p>
                        </div>
                        <div class="board-copy">
                            <p>Casa Común abre conversaciones sobre patrimonio vivo, creación comunitaria, cuidado del entorno, circulación cultural, oficios y memorias que conectan saberes locales con nuevas formas de participación.</p>
                        </div>
                    </div>

                    <div class="topics">
                        <article class="topic d1"><div class="topic-mark">01</div><h3>Prácticas de cuidado</h3><p>Procesos colectivos que protegen ecosistemas, memorias y vínculos comunitarios.</p></article>
                        <article class="topic d2"><div class="topic-mark">02</div><h3>Economías populares</h3><p>Modelos solidarios que sostienen oficios, mercados culturales y redes colaborativas.</p></article>
                        <article class="topic d3"><div class="topic-mark">03</div><h3>Saberes del territorio</h3><p>Conocimientos situados que se transmiten entre generaciones y comunidades.</p></article>
                        <article class="topic d1"><div class="topic-mark">04</div><h3>Memoria viva</h3><p>Archivos, relatos y expresiones que mantienen abierta la conversación con el pasado.</p></article>
                        <article class="topic d2"><div class="topic-mark">05</div><h3>Circulación cultural</h3><p>Escenarios, plataformas y encuentros para compartir contenidos y experiencias.</p></article>
                        <article class="topic d3"><div class="topic-mark">06</div><h3>Futuro común</h3><p>Miradas que integran arte, diversidad y sostenibilidad para imaginar nuevos caminos.</p></article>
                    </div>
                </div>
            </div>
        </section>

        <section class="destacados">
            <div class="wrap">
                <h2 class="section-title">Destacados</h2>
                <div class="cards">
                    <article class="card d1">
                        <img src="{{ asset('assets/casa-comun/destacado-musica.jpeg') }}" alt="Artista en escenario">
                        <div class="card-body card-pink">
                            <h3>Cantaoras, fiestas y encuentros que hacen del canto una manera de sostener comunidad.</h3>
                            <p>Historias sobre transmisión oral, celebración, herencia musical y tejido social.</p>
                            <a class="mini-btn" href="#!">Leer más</a>
                        </div>
                    </article>

                    <article class="card d2">
                        <img src="{{ asset('assets/casa-comun/destacado-teatro.jpeg') }}" alt="Interior de teatro">
                        <div class="card-body card-yellow">
                            <h3>Escenas, luces y públicos que convierten el espacio cultural en un punto de encuentro.</h3>
                            <p>Recorridos por experiencias escénicas, gestión local y circulación de contenidos.</p>
                            <a class="mini-btn" href="#!">Leer más</a>
                        </div>
                    </article>

                    <article class="card d3">
                        <img src="{{ asset('assets/casa-comun/destacado-danza.jpeg') }}" alt="Grupo cultural">
                        <div class="card-body card-orange">
                            <h3>Procesos comunitarios que activan economías populares desde la cultura y la colaboración.</h3>
                            <p>Redes, emprendimientos y prácticas que ponen a circular bienes simbólicos y materiales.</p>
                            <a class="mini-btn" href="#!">Leer más</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="band mirada">
            <div class="wrap band-inner">
                <div class="band-visual" aria-hidden="true"></div>
                <div class="band-copy">
                    <h2>Somos mirada</h2>
                    <p>Galerías, piezas y relatos visuales para recorrer el territorio desde otras perspectivas.</p>
                    <a class="band-btn" href="#!">Descubre aquí</a>
                </div>
            </div>
        </section>

        <section class="band sonido">
            <div class="wrap band-inner">
                <div class="band-copy">
                    <h2>Somos sonido, somos voces</h2>
                    <p>Escuchas abiertas para conocer acentos, memorias, archivos y ritmos que habitan Casa Común.</p>
                    <a class="band-btn" href="#!">Escucha aquí</a>
                </div>
                <div class="band-visual" aria-hidden="true"></div>
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
            const items = document.querySelectorAll('.topic,.card');
            const reduce = window.matchMedia('(prefers-reduced-motion: reduce)');
            if (reduce.matches || typeof IntersectionObserver === 'undefined') {
                items.forEach((item) => item.classList.add('show'));
                return;
            }
            const io = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('show');
                    io.unobserve(entry.target);
                });
            }, { threshold: 0.18 });
            items.forEach((item) => io.observe(item));
        })();
    </script>
</body>
</html>
