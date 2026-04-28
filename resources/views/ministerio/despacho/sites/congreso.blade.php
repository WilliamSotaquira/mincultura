<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Congreso | Ministerio de las Culturas</title>
    <meta name="description" content="Congreso Iberoamericano de Educación y Formación Artística y Cultural - Artes para la Paz.">

    <link href="https://cdn.www.gov.co/layout-govco-v5/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --congreso-ink: #271f4f;
            --congreso-purple: #493189ff;
            --congreso-yellow: #ffcf24;
            --congreso-bg: #f6f8fb;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            overflow-x: hidden;
            color: var(--congreso-ink);
            background: var(--congreso-bg);
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            line-height: 1.5;
        }

        a {
            color: inherit;
        }

        a:focus-visible,
        button:focus-visible {
            outline: 3px solid var(--congreso-yellow);
            outline-offset: 3px;
        }

        .skip-link {
            position: fixed;
            top: 12px;
            left: 12px;
            z-index: 60;
            padding: 10px 14px;
            background: var(--congreso-ink);
            color: #fff;
            text-decoration: none;
            transform: translateY(-150%);
        }

        .skip-link:focus {
            transform: translateY(0);
        }

        .site-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            background: transparent;
            transition: background-color 180ms ease, box-shadow 180ms ease;
        }

        .site-nav.is-scrolled {
            background: var(--congreso-purple);
            box-shadow: 0 10px 24px rgba(32, 22, 62, 0.18);
        }

        .congreso-navbar {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
        }

        .brand-mark {
            display: inline-flex;
            align-items: center;
            min-width: 0;
            text-decoration: none;
        }

        .brand-mark img {
            width: clamp(150px, 16vw, 220px);
            height: auto;
            display: block;
        }

        .congreso-menu {
            display: flex;
            align-items: stretch;
            justify-content: flex-end;
            gap: 0;
        }

        .nav-link-small {
            color: #5f6368;
            font-size: 0.95rem;
            font-weight: 700;
            text-decoration: none;
        }

        .nav-link-small:hover {
            color: var(--congreso-ink);
        }

        .congreso-menu .nav-link-small {
            min-height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 28px;
            border-left: 1px solid rgba(255, 255, 255, 0.72);
            color: #fff;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.18em;
            line-height: 1.05;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        .congreso-menu .nav-link-small:last-child {
            border-right: 1px solid rgba(255, 255, 255, 0.72);
        }

        .congreso-menu .nav-link-small:hover {
            color: var(--congreso-yellow);
        }

        .hero {
            position: relative;
            min-height: 724px;
            overflow: hidden;
            isolation: isolate;
            background:
                linear-gradient(90deg, rgba(39, 31, 79, 0.12) 0%, rgba(39, 31, 79, 0) 58%),
                url('{{ asset('assets/congreso/hero-background.png') }}') center top / cover no-repeat,
                #292153;
            color: #fff;
        }

        .hero-inner {
            position: relative;
            min-height: inherit;
            padding-top: clamp(124px, 10vw, 148px);
            padding-bottom: 50px;
        }

        .hero-title {
            max-width: 540px;
            margin: 0 0 0 clamp(0px, 3.8vw, 52px);
            text-align: center;
            text-transform: uppercase;
        }

        .hero-title > span {
            display: block;
        }

        .hero-title-kicker {
            color: rgba(255, 255, 255, 0.82);
            font-size: clamp(1rem, 2vw, 1.48rem);
            font-weight: 400;
            letter-spacing: 0.26em;
            line-height: 1.28;
        }

        .hero-title-main {
            margin-top: 2px;
            color: #fff;
            font-size: clamp(1.85rem, 3.25vw, 2.72rem);
            font-weight: 900;
            letter-spacing: 0.01em;
            line-height: 1.05;
        }

        .hero-title-y {
            width: 0.95em;
            height: 0.95em;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1.5px solid rgba(255, 255, 255, 0.82);
            border-radius: 50%;
            font-size: 0.46em;
            line-height: 1;
            transform: translateY(-0.08em);
        }

        .hero-title-accent {
            margin-top: 8px;
            color: var(--congreso-yellow);
            font-size: clamp(1.55rem, 2.7vw, 2.28rem);
            font-weight: 900;
            letter-spacing: 0.02em;
            line-height: 1.05;
        }

        .hero-video {
            width: min(524px, 45vw);
            aspect-ratio: 524 / 299;
            margin: 32px 0 0 clamp(0px, 3.2vw, 36px);
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(92, 94, 91, 0.98);
            color: rgba(255, 255, 255, 0.88);
            font-size: clamp(0.9rem, 1.25vw, 1.08rem);
            font-weight: 400;
            letter-spacing: 0.06em;
            text-align: center;
        }

        .hero-partners {
            position: absolute;
            left: 0;
            bottom: 50px;
            width: clamp(220px, 22vw, 300px);
            height: auto;
            display: block;
        }

        .hero-date {
            position: absolute;
            left: 52%;
            bottom: 72px;
            width: clamp(390px, 41vw, 555px);
            height: auto;
            display: block;
            z-index: 1;
        }

        .inflection {
            position: relative;
            min-height: 482px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background:
                url('{{ asset('assets/congreso/inflection-background.png') }}') center center / cover no-repeat,
                #f8f2d8;
            color: var(--congreso-ink);
        }

        .inflection::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 25%;
            height: 2px;
            background: var(--congreso-purple);
        }

        .inflection-inner {
            position: relative;
            width: 100%;
            z-index: 1;
        }

        .inflection-content {
            max-width: 510px;
            margin-left: auto;
            padding-right: clamp(0px, 5vw, 64px);
        }

        .inflection h2 {
            max-width: 430px;
            margin: 0 0 24px;
            color: var(--congreso-ink);
            font-size: clamp(2rem, 3.4vw, 2.55rem);
            font-weight: 800;
            line-height: 0.98;
            letter-spacing: 0;
        }

        .inflection p {
            margin: 0 0 17px;
            color: var(--congreso-ink);
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.18;
        }

        .inflection-button {
            min-height: 27px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            padding: 6px 16px;
            border-radius: 999px;
            background: var(--congreso-yellow);
            color: var(--congreso-ink);
            font-size: 0.77rem;
            font-weight: 900;
            line-height: 1;
            text-decoration: none;
            text-transform: uppercase;
        }

        .inflection-button:hover {
            color: var(--congreso-ink);
            background: #f4a900;
        }

        .inflection-mask {
            position: absolute;
            top: 0;
            left: 42%;
            width: clamp(70px, 7vw, 84px);
            height: auto;
            z-index: 2;
        }

        .inflection-waves {
            position: absolute;
            right: clamp(20px, 3.5vw, 48px);
            bottom: 62px;
            width: clamp(72px, 7vw, 88px);
            height: auto;
            z-index: 2;
        }

        .site-footer {
            padding: 28px 0;
            border-top: 1px solid #dfe4ea;
            background: #fff;
            color: #5f6368;
        }

        @media (max-width: 767.98px) {
            .congreso-navbar {
                min-height: 86px;
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
                padding-top: 14px;
                padding-bottom: 14px;
            }

            .brand-mark img {
                width: 168px;
            }

            .congreso-menu {
                width: 100%;
                max-width: 100%;
                min-width: 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: flex-start;
                row-gap: 6px;
                overflow: visible;
            }

            .congreso-menu .nav-link-small {
                flex: 0 0 auto;
                width: auto;
                max-width: none;
                min-width: 0;
                min-height: 30px;
                padding: 0 10px;
                font-size: 0.48rem;
                letter-spacing: 0.06em;
                white-space: normal;
            }

            .hero {
                min-height: 860px;
                background:
                    linear-gradient(180deg, rgba(39, 31, 79, 0.9) 0%, rgba(39, 31, 79, 0.18) 58%),
                    url('{{ asset('assets/congreso/hero-background.png') }}') 66% top / auto 100% no-repeat,
                    #292153;
            }

            .hero-inner {
                padding-top: 124px;
                padding-bottom: 36px;
            }

            .hero-title {
                max-width: 100%;
                margin-left: 0;
                text-align: left;
            }

            .hero-title-kicker {
                font-size: clamp(0.78rem, 3.55vw, 0.96rem);
                letter-spacing: 0.14em;
            }

            .hero-title-main {
                font-size: clamp(1.34rem, 6.35vw, 1.75rem);
            }

            .hero-title-accent {
                font-size: clamp(1.22rem, 5.95vw, 1.64rem);
            }

            .hero-video {
                width: 100%;
                margin-left: 0;
                margin-top: 28px;
            }

            .hero-date,
            .hero-partners {
                position: relative;
                left: auto;
                bottom: auto;
            }

            .hero-date {
                width: min(100%, 460px);
                margin-top: 30px;
            }

            .hero-partners {
                width: min(78vw, 270px);
                margin-top: 34px;
            }

            .inflection {
                min-height: 640px;
                align-items: flex-start;
                padding: 118px 0 56px;
                background-position: 28% center;
            }

            .inflection::after {
                width: 42%;
            }

            .inflection-content {
                max-width: 100%;
                margin-left: 0;
                padding-right: 0;
            }

            .inflection h2 {
                max-width: 320px;
                font-size: clamp(1.8rem, 8vw, 2.25rem);
            }

            .inflection p {
                max-width: 330px;
                font-size: 0.96rem;
                line-height: 1.25;
            }

            .inflection-mask {
                left: auto;
                right: 24px;
                width: 74px;
            }

            .inflection-waves {
                right: 22px;
                bottom: 28px;
                width: 82px;
            }
        }
    </style>
</head>

<body>
    <a class="skip-link" href="#contenido">Saltar al contenido</a>

    <header class="site-nav" id="congreso-header">
        <nav class="container congreso-navbar" aria-label="Navegación principal">
            <a class="brand-mark" href="{{ route('home') }}">
                <img src="{{ asset('assets/congreso/header-logos.png') }}" alt="Ministerio de las Culturas y OEI">
            </a>

            <div class="congreso-menu">
                <a class="nav-link-small" href="#inscripcion">Inscribirme</a>
                <a class="nav-link-small" href="#explorar">Explorar<br>el Congreso</a>
                <a class="nav-link-small" href="#agenda">Ver agenda</a>
            </div>
        </nav>
    </header>

    <main id="contenido">
        <section class="hero" aria-label="Congreso Iberoamericano de Educación y Formación Artística y Cultural">
            <div class="container hero-inner">
                <h1 class="hero-title">
                    <span class="hero-title-kicker">Congreso Iberoamericano</span>
                    <span class="hero-title-kicker">de Educación y Formación</span>
                    <span class="hero-title-main">Artística <span class="hero-title-y">y</span> Cultural</span>
                    <span class="hero-title-accent">Artes para la Paz</span>
                </h1>

                <div class="hero-video" id="explorar">
                    Video explicativo del congreso
                </div>

                <img class="hero-partners" src="{{ asset('assets/congreso/hero-partners.png') }}"
                    alt="UNESCO, Secretaría General Iberoamericana y CAF Banco de Desarrollo de América Latina y el Caribe">
                <img class="hero-date" src="{{ asset('assets/congreso/hero-date.png') }}"
                    alt="13 al 15 de mayo en Bogotá. Artes para la Paz 2026">
            </div>
        </section>

        <section class="inflection" id="inscripcion">
            <img class="inflection-mask" src="{{ asset('assets/congreso/inflection-mask.png') }}" alt="" aria-hidden="true">
            <img class="inflection-waves" src="{{ asset('assets/congreso/inflection-waves.png') }}" alt="" aria-hidden="true">

            <div class="container inflection-inner">
                <div class="inflection-content">
                    <h2>Un punto de inflexión para la región</h2>
                    <p>
                        El Congreso Iberoamericano de Educación Artística y Cultural -Artes para la paz- reúne a
                        gobiernos, instituciones y sociedad civil para dar un paso decisivo:
                    </p>
                    <p>
                        pasar del discurso sobre la educación artística a su implementación real como política pública
                        de paz.
                    </p>
                    <p>
                        Liderado por el Ministerio de las Culturas, las Artes y los Saberes de Colombia, en alianza con
                        la OEI y con el apoyo de UNESCO, SEGIB y CAF, este encuentro articula visiones y compromisos
                        para toda Iberoamérica.
                    </p>
                    <a class="inflection-button" href="#explorar">Conoce más</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
            <span>Ministerio de las Culturas, las Artes y los Saberes</span>
            <a class="nav-link-small" href="{{ route('ministerio.index') }}">Regresar</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        (() => {
            const header = document.getElementById('congreso-header');
            const updateHeader = () => {
                header.classList.toggle('is-scrolled', window.scrollY > 12);
            };

            updateHeader();
            window.addEventListener('scroll', updateHeader, {
                passive: true
            });
        })();
    </script>
</body>

</html>
