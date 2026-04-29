<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Congreso | Ministerio de las Culturas</title>
    <meta name="description"
        content="Congreso Iberoamericano de Educación y Formación Artística y Cultural - Artes para la Paz.">

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
            --congreso-violet: #8b6aff;
            --congreso-magenta: #ff39f1;
            --congreso-lime: #c3d00e;
            --congreso-bg: #f6f8fb;
            --congreso-section-max: 1440px;
            --congreso-section-title-size: clamp(1.75rem, 2.55vw, 2.42rem);
            --congreso-card-title-size: clamp(1.1rem, 1.46vw, 1.46rem);
            --congreso-card-copy-size: clamp(0.86rem, 1.02vw, 1.12rem);
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

        .site-nav.is-menu-open {
            background: var(--congreso-purple);
        }

        .congreso-navbar {
            position: relative;
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
            padding: 10px clamp(12px, 1.8vw, 24px) 10px 0;
            text-decoration: none;
        }

        .brand-mark img {
            width: clamp(150px, 16vw, 220px);
            height: auto;
            display: block;
        }

        .congreso-menu-toggle {
            display: none;
            width: 42px;
            height: 42px;
            align-items: center;
            justify-content: center;
            flex: 0 0 auto;
            border: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.92);
            color: var(--congreso-ink);
            cursor: pointer;
        }

        .congreso-menu-toggle-lines {
            width: 20px;
            display: grid;
            gap: 4px;
        }

        .congreso-menu-toggle-lines span {
            width: 100%;
            height: 2px;
            display: block;
            border-radius: 999px;
            background: currentColor;
            transition: transform 180ms ease, opacity 180ms ease;
        }

        .site-nav.is-menu-open .congreso-menu-toggle-lines span:nth-child(1) {
            transform: translateY(6px) rotate(45deg);
        }

        .site-nav.is-menu-open .congreso-menu-toggle-lines span:nth-child(2) {
            opacity: 0;
        }

        .site-nav.is-menu-open .congreso-menu-toggle-lines span:nth-child(3) {
            transform: translateY(-6px) rotate(-45deg);
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

        .hero::before {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 50%;
            z-index: 0;
            pointer-events: none;
            background:
                radial-gradient(circle at 74% 46%, rgba(39, 31, 79, 0.62) 0%, rgba(39, 31, 79, 0.38) 26%, rgba(39, 31, 79, 0.08) 56%, rgba(39, 31, 79, 0) 78%),
                linear-gradient(90deg, rgba(39, 31, 79, 0.06) 0%, rgba(39, 31, 79, 0.12) 48%, rgba(39, 31, 79, 0.38) 100%),
                linear-gradient(180deg, rgba(39, 31, 79, 0) 0%, rgba(39, 31, 79, 0.16) 36%, rgba(39, 31, 79, 0.58) 100%);
            -webkit-mask-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.18) 18%, rgba(0, 0, 0, 1) 44%);
            mask-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.18) 18%, rgba(0, 0, 0, 1) 44%);
        }

        .hero-inner {
            position: relative;
            min-height: inherit;
            padding-top: clamp(124px, 10vw, 148px);
            padding-bottom: 50px;
            z-index: 1;
        }

        .hero-title {
            max-width: 540px;
            margin: 0 0 0 clamp(0px, 3.8vw, 52px);
            text-align: center;
            text-transform: uppercase;
        }

        .hero-title>span {
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
            position: relative;
            left: auto;
            bottom: auto;
            width: clamp(220px, 22vw, 300px);
            height: auto;
            display: block;
            margin: clamp(28px, 3vw, 42px) 0 0 clamp(0px, 3.2vw, 36px);
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
            right: 0;
            bottom: 62px;
            width: clamp(72px, 7vw, 88px);
            height: auto;
            z-index: 2;

        }

        .outcomes {
            position: relative;
            min-height: 590px;
            padding: clamp(56px, 5.1vw, 78px) 0 clamp(62px, 5.6vw, 84px);
            overflow: hidden;
            isolation: isolate;
            background: var(--congreso-violet);
            color: #fff;
        }

        .outcomes-frame {
            position: relative;
            max-width: var(--congreso-section-max);
            margin-right: auto;
            margin-left: auto;
        }

        .outcomes-inner {
            position: relative;
            z-index: 2;
        }

        .outcomes-title {
            margin: 0 0 clamp(42px, 4.1vw, 60px);
            color: #fff;
            font-size: var(--congreso-section-title-size);
            font-weight: 800;
            line-height: 1;
            letter-spacing: 0;
            text-align: center;
        }

        .outcomes-grid {
            width: min(100%, 980px);
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: clamp(34px, 4.7vw, 78px);
            margin: 0 auto;
        }

        .outcome-card {
            min-width: 0;
            text-align: center;
        }

        .outcome-icon {
            width: auto;
            height: clamp(104px, 7.1vw, 134px);
            display: block;
            margin: 0 auto clamp(24px, 2.4vw, 34px);
            object-fit: contain;
        }

        .outcome-card h3 {
            margin: 0 0 16px;
            color: #fff;
            font-size: var(--congreso-card-title-size);
            font-weight: 800;
            line-height: 1.02;
            letter-spacing: 0;
        }

        .outcome-card p {
            max-width: 290px;
            margin: 0 auto;
            color: #fff;
            font-size: var(--congreso-card-copy-size);
            font-weight: 500;
            line-height: 1.12;
            letter-spacing: 0;
        }

        .outcomes-character,
        .outcomes-mask {
            position: absolute;
            display: block;
            height: auto;
            pointer-events: none;
            user-select: none;
            z-index: 1;
        }

        .outcomes-character {
            top: clamp(38px, 3.9vw, 60px);
            left: 0;
            width: clamp(260px, 18vw, 330px);
            transform: none;
        }

        .outcomes-mask {
            top: 0;
            right: max(24px, calc((100% - var(--congreso-section-max)) / 2 + 56px));
            width: clamp(70px, 7vw, 84px);
        }

        .conversations {
            position: relative;
            padding: clamp(54px, 4.7vw, 72px) 0 clamp(56px, 5vw, 78px);
            overflow: hidden;
            background: var(--congreso-magenta);
            color: var(--congreso-ink);
        }

        .conversations-inner {
            position: relative;
            max-width: var(--congreso-section-max);
            margin-right: auto;
            margin-left: auto;
            z-index: 1;
        }

        .conversations-title {
            margin: 0 0 clamp(40px, 4vw, 58px);
            color: var(--congreso-ink);
            font-size: var(--congreso-section-title-size);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: 0;
            text-align: center;
        }

        .conversations-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: clamp(30px, 4.6vw, 72px);
        }

        .conversation-card {
            min-width: 0;
            text-align: center;
        }

        .conversation-icon {
            width: auto;
            height: clamp(86px, 6.3vw, 118px);
            display: block;
            margin: 0 auto clamp(24px, 2.6vw, 34px);
            object-fit: contain;
        }

        .conversation-card h3 {
            margin: 0 0 18px;
            color: var(--congreso-ink);
            font-size: var(--congreso-card-title-size);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: 0;
        }

        .conversation-card p {
            max-width: 270px;
            margin: 0 auto;
            color: var(--congreso-ink);
            font-size: var(--congreso-card-copy-size);
            font-weight: 500;
            line-height: 1.18;
            letter-spacing: 0;
        }

        .conversations-waves {
            position: absolute;
            top: clamp(44px, 4.6vw, 62px);
            right: 0;
            width: clamp(74px, 7vw, 94px);
            height: auto;
            display: block;
            pointer-events: none;
            user-select: none;
        }

        .workflow {
            position: relative;
            min-height: 560px;
            padding: clamp(74px, 6.4vw, 98px) 0 clamp(76px, 6.8vw, 104px);
            overflow: hidden;
            isolation: isolate;
            background: var(--congreso-lime);
            color: var(--congreso-ink);
        }

        .workflow-inner {
            position: relative;
            max-width: var(--congreso-section-max);
            margin-right: auto;
            margin-left: auto;
            z-index: 2;
        }

        .workflow-title {
            margin: 0 0 clamp(42px, 4.1vw, 60px);
            color: var(--congreso-ink);
            font-size: var(--congreso-section-title-size);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: 0;
            text-align: center;
        }

        .workflow-grid {
            width: min(100%, 1120px);
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: clamp(38px, 5.2vw, 84px);
            margin: 0 auto;
        }

        .workflow-card {
            min-width: 0;
            text-align: center;
        }

        .workflow-icon {
            width: auto;
            height: clamp(106px, 7.2vw, 138px);
            display: block;
            margin: 0 auto clamp(34px, 3.2vw, 46px);
            object-fit: contain;
        }

        .workflow-card h3 {
            margin: 0;
            color: var(--congreso-ink);
            font-size: var(--congreso-card-title-size);
            font-weight: 800;
            line-height: 1.06;
            letter-spacing: 0;
        }

        .workflow-character {
            position: absolute;
            right: 0;
            bottom: 0;
            width: auto;
            height: min(100%, clamp(430px, 38vw, 560px));
            display: block;
            pointer-events: none;
            user-select: none;
            z-index: 1;
        }

        .policy {
            position: relative;
            padding: clamp(76px, 6.8vw, 104px) 0 clamp(72px, 6vw, 92px);
            overflow: hidden;
            isolation: isolate;
            background: #271f4f;
            color: #fff;
        }

        .policy-inner {
            position: relative;
            max-width: var(--congreso-section-max);
            margin-right: auto;
            margin-left: auto;
            z-index: 2;
        }

        .policy-title {
            margin: 0 0 clamp(48px, 4.4vw, 66px);
            color: #fff;
            font-size: var(--congreso-section-title-size);
            font-weight: 800;
            line-height: 1.05;
            text-align: center;
        }

        .policy-layout {
            display: grid;
            grid-template-columns: minmax(0, 0.92fr) minmax(0, 1fr);
            gap: clamp(48px, 6vw, 92px);
            align-items: start;
        }

        .policy-copy {
            max-width: 500px;
            margin: 0 0 30px;
            color: #fff;
            font-size: clamp(0.9rem, 1vw, 1.05rem);
            font-weight: 500;
            line-height: 1.25;
        }

        .policy-impact-title,
        .policy-subtitle {
            margin: 0 0 22px;
            color: var(--congreso-violet);
            font-size: clamp(1.18rem, 1.45vw, 1.55rem);
            font-weight: 800;
            line-height: 1.08;
        }

        .policy-map {
            width: min(100%, 430px);
            height: auto;
            display: block;
            margin: 0 0 28px clamp(12px, 3vw, 44px);
        }

        .policy-stats {
            width: min(100%, 470px);
            height: auto;
            display: block;
            margin: 0 0 36px;
        }

        .policy-territory {
            margin-top: 18px;
        }

        .policy-territory p {
            max-width: 520px;
            margin: 0;
            color: #fff;
            font-size: clamp(0.9rem, 1vw, 1.05rem);
            font-weight: 500;
            line-height: 1.24;
        }

        .policy-video {
            width: 100%;
            aspect-ratio: 16 / 9;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            background: rgba(92, 94, 91, 0.98);
            color: rgba(255, 255, 255, 0.88);
            font-size: clamp(0.86rem, 1vw, 1rem);
            font-weight: 500;
            text-align: center;
        }

        .policy-lead {
            margin: 0 0 24px;
            color: #fff;
            font-size: clamp(0.88rem, 0.95vw, 1rem);
            font-weight: 500;
            line-height: 1.24;
        }

        .policy-audience {
            display: grid;
            gap: 18px;
            margin: 0 0 30px;
            padding: 0;
            list-style: none;
        }

        .policy-audience li {
            display: flex;
            align-items: baseline;
            gap: 10px;
            color: #fff;
            font-size: clamp(1rem, 1.34vw, 1.42rem);
            font-weight: 800;
            line-height: 1.12;
        }

        .policy-audience li::before {
            content: "";
            width: 8px;
            height: 8px;
            flex: 0 0 auto;
            border-radius: 50%;
            background: var(--dot-color, var(--congreso-yellow));
            transform: translateY(-0.12em);
        }

        .policy-note {
            margin: 0 0 46px;
            color: #fff;
            font-size: clamp(0.86rem, 0.95vw, 1rem);
            font-weight: 500;
            line-height: 1.22;
        }

        .policy-methods {
            display: grid;
            gap: 15px;
            margin-bottom: 28px;
        }

        .policy-methods p {
            margin: 0;
            color: #fff;
            font-size: clamp(0.82rem, 0.88vw, 0.96rem);
            font-weight: 500;
            line-height: 1.2;
        }

        .policy-methods strong {
            color: var(--congreso-yellow);
            font-weight: 800;
        }

        .policy-photos {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
        }

        .policy-photos img {
            width: 100%;
            aspect-ratio: 1 / 1;
            display: block;
            object-fit: cover;
        }

        .policy-character {
            position: absolute;
            left: 0;
            bottom: clamp(180px, 16vw, 250px);
            width: clamp(116px, 10vw, 170px);
            height: auto;
            display: block;
            pointer-events: none;
            user-select: none;
            z-index: 1;
        }

        .mapping {
            position: relative;
            overflow: hidden;
            background: var(--congreso-violet);
            color: #fff;
            isolation: isolate;
        }

        .mapping-hero {
            position: relative;
            min-height: clamp(310px, 31vw, 445px);
            background:
                linear-gradient(90deg, rgba(139, 106, 255, 0) 0%, rgba(139, 106, 255, 0.18) 34%, rgba(139, 106, 255, 0.78) 51%, rgba(139, 106, 255, 1) 68%),
                url('{{ asset('assets/congreso/mapping-hero-composite.png') }}') left top / cover no-repeat,
                var(--congreso-violet);
        }

        .mapping-hero-inner {
            position: relative;
            max-width: var(--congreso-section-max);
            min-height: inherit;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-right: auto;
            margin-left: auto;
            z-index: 2;
        }

        .mapping-content {
            width: min(44%, 590px);
            margin-right: clamp(34px, 6.2vw, 104px);
            padding: clamp(42px, 5vw, 70px) 0;
            text-shadow: 0 2px 14px rgba(39, 31, 79, 0.18);
        }

        .mapping-title {
            margin: 0 0 clamp(26px, 2.2vw, 34px);
            color: #fff;
            font-size: var(--congreso-section-title-size);
            font-weight: 800;
            line-height: 1.04;
            letter-spacing: 0;
        }

        .mapping-copy {
            max-width: 510px;
            margin: 0 0 clamp(34px, 3.4vw, 48px);
            color: #fff;
            font-size: clamp(0.95rem, 1.05vw, 1.1rem);
            font-weight: 600;
            line-height: 1.34;
        }

        .mapping-button {
            display: inline-flex;
            min-height: 38px;
            align-items: center;
            justify-content: center;
            padding: 0 24px;
            border-radius: 999px;
            background: #ffe666;
            color: var(--congreso-ink);
            font-size: clamp(0.66rem, 0.72vw, 0.78rem);
            font-weight: 800;
            line-height: 1;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.02em;
        }

        .mapping-waves {
            position: absolute;
            right: 0;
            bottom: clamp(28px, 3vw, 44px);
            width: clamp(78px, 8.4vw, 122px);
            height: auto;
            z-index: 3;
            pointer-events: none;
            user-select: none;
        }

        .mapping-logos {
            position: relative;
            padding: clamp(26px, 3vw, 42px) 0 clamp(28px, 3.4vw, 48px);
            background: var(--congreso-violet);
            z-index: 2;
        }

        .mapping-logos-inner {
            max-width: var(--congreso-section-max);
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: clamp(54px, 8vw, 118px);
            margin-right: auto;
            margin-left: auto;
        }

        .mapping-logo-group {
            display: grid;
            gap: 14px;
            justify-items: start;
        }

        .mapping-logo-label {
            margin: 0;
            color: rgba(39, 31, 79, 0.58);
            font-size: clamp(0.75rem, 0.76vw, 0.86rem);
            font-weight: 800;
            line-height: 1;
        }

        .mapping-organizers {
            width: clamp(210px, 21vw, 310px);
            height: auto;
            display: block;
        }

        .mapping-allies {
            width: clamp(360px, 43vw, 690px);
            height: auto;
            display: block;
        }

        .news-cards {
            padding: clamp(78px, 7vw, 112px) 0 clamp(86px, 7.6vw, 124px);
            background: #f5f1df;
            color: var(--congreso-ink);
        }

        .news-cards-inner {
            max-width: var(--congreso-section-max);
            margin-right: auto;
            margin-left: auto;
        }

        .news-card-grid {
            width: min(100%, 1040px);
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: clamp(34px, 3vw, 44px);
            margin: 0 auto;
        }

        .news-card {
            overflow: hidden;
            border-radius: 0 0 10px 10px;
            background: var(--card-bg, var(--congreso-lime));
            box-shadow: none;
        }

        .news-card img {
            width: 100%;
            aspect-ratio: 1 / 1;
            display: block;
            object-fit: cover;
        }

        .news-card-body {
            min-height: clamp(210px, 15.5vw, 248px);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: clamp(28px, 2.4vw, 34px) clamp(28px, 2.6vw, 36px);
        }

        .news-card-body p {
            margin: 0 0 30px;
            color: var(--congreso-ink);
            font-size: clamp(0.92rem, 1.02vw, 1.08rem);
            font-weight: 500;
            line-height: 1.32;
        }

        .news-card-link {
            display: inline-flex;
            min-height: 38px;
            align-items: center;
            justify-content: center;
            margin-top: auto;
            padding: 0 24px;
            border-radius: 999px;
            background: #fffbed;
            color: var(--congreso-ink);
            font-size: clamp(0.82rem, 0.88vw, 0.94rem);
            font-weight: 800;
            line-height: 1;
            text-decoration: none;
        }

        .regional-cta {
            position: relative;
            min-height: clamp(188px, 19vw, 280px);
            overflow: hidden;
            isolation: isolate;
            background:
                linear-gradient(90deg, rgba(245, 241, 223, 0.1) 0%, rgba(245, 241, 223, 0.42) 30%, rgba(245, 241, 223, 0.9) 50%, rgba(245, 241, 223, 0.42) 70%, rgba(245, 241, 223, 0.1) 100%),
                url('{{ asset('assets/congreso/regional-cta-background.png') }}') center center / cover no-repeat;
            color: var(--congreso-ink);
        }

        .regional-cta-inner {
            position: relative;
            max-width: var(--congreso-section-max);
            min-height: inherit;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: auto;
            margin-left: auto;
            z-index: 2;
        }

        .regional-cta-content {
            width: min(100%, 520px);
            margin-left: clamp(10px, 3vw, 48px);
            padding: clamp(34px, 4vw, 58px) 0;
        }

        .regional-cta-title {
            margin: 0 0 18px;
            color: var(--congreso-ink);
            font-size: clamp(1.58rem, 2.6vw, 2.46rem);
            font-weight: 800;
            line-height: 1.04;
            letter-spacing: 0;
        }

        .regional-cta-button {
            display: inline-flex;
            min-height: 38px;
            align-items: center;
            justify-content: center;
            padding: 0 28px;
            border-radius: 999px;
            background: #ffdc33;
            color: var(--congreso-ink);
            font-size: clamp(0.78rem, 0.82vw, 0.9rem);
            font-weight: 800;
            line-height: 1;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.02em;
        }

        .regional-cta-character {
            position: absolute;
            left: calc(50% + clamp(94px, 11vw, 170px));
            bottom: -1px;
            width: clamp(112px, 12vw, 178px);
            height: auto;
            display: block;
            pointer-events: none;
            user-select: none;
            z-index: 1;
        }

        .site-footer {
            padding: clamp(36px, 3.6vw, 52px) 0;
            background: var(--congreso-ink);
            color: #fff;
        }

        .site-footer-inner {
            max-width: var(--congreso-section-max);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: clamp(82px, 10vw, 160px);
            margin-right: auto;
            margin-left: auto;
        }

        .footer-email {
            display: inline-flex;
            min-height: 28px;
            align-items: center;
            justify-content: center;
            padding: 0 clamp(18px, 2vw, 32px);
            border-radius: 999px;
            background: var(--congreso-violet);
            color: rgba(255, 255, 255, 0.92);
            font-size: clamp(0.68rem, 0.84vw, 0.92rem);
            font-weight: 600;
            line-height: 1;
            text-decoration: none;
            letter-spacing: 0;
        }

        .footer-socials {
            display: flex;
            align-items: center;
            gap: clamp(18px, 2.1vw, 30px);
        }

        .footer-social-link {
            width: clamp(28px, 2.6vw, 36px);
            height: clamp(28px, 2.6vw, 36px);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 auto;
            border-radius: 50%;
            text-decoration: none;
        }

        .footer-social-link img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
        }

        @media (max-width: 991.98px) {
            .congreso-navbar {
                min-height: 72px;
                align-items: center;
                flex-direction: row;
                gap: 16px;
                padding-top: 14px;
                padding-bottom: 14px;
            }

            .brand-mark img {
                width: 154px;
            }

            .congreso-menu-toggle {
                position: fixed;
                top: 15px;
                right: 16px;
                z-index: 100;
                display: inline-flex !important;
            }

            .congreso-menu {
                position: absolute;
                top: 100%;
                left: 12px;
                right: 12px;
                width: auto;
                max-width: none;
                min-width: 0;
                display: grid;
                gap: 0;
                padding: 10px 0;
                border-radius: 0 0 10px 10px;
                background: var(--congreso-purple);
                box-shadow: 0 16px 28px rgba(32, 22, 62, 0.22);
                opacity: 0;
                visibility: hidden;
                transform: translateY(-8px);
                pointer-events: none;
                transition: opacity 160ms ease, transform 160ms ease, visibility 160ms ease;
            }

            .site-nav.is-menu-open .congreso-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
                pointer-events: auto;
            }

            .congreso-menu .nav-link-small {
                width: 100%;
                max-width: none;
                min-width: 0;
                min-height: 44px;
                justify-content: flex-start;
                padding: 0 22px;
                border-left: 0;
                border-right: 0;
                font-size: 0.68rem;
                letter-spacing: 0.12em;
                white-space: normal;
            }

            .congreso-menu .nav-link-small:last-child {
                border-right: 0;
            }
        }

        @media (max-width: 767.98px) {
            .congreso-navbar {
                min-height: 72px;
                align-items: center;
                flex-direction: row;
                gap: 16px;
                padding-top: 14px;
                padding-bottom: 14px;
            }

            .brand-mark img {
                width: 154px;
            }

            .congreso-menu-toggle {
                position: fixed;
                top: 15px;
                right: 16px;
                z-index: 100;
                display: inline-flex !important;
            }

            .congreso-menu {
                position: absolute;
                top: 100%;
                left: 12px;
                right: 12px;
                width: auto;
                max-width: none;
                min-width: 0;
                display: grid;
                gap: 0;
                padding: 10px 0;
                border-radius: 0 0 10px 10px;
                background: var(--congreso-purple);
                box-shadow: 0 16px 28px rgba(32, 22, 62, 0.22);
                opacity: 0;
                visibility: hidden;
                transform: translateY(-8px);
                pointer-events: none;
                transition: opacity 160ms ease, transform 160ms ease, visibility 160ms ease;
            }

            .site-nav.is-menu-open .congreso-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
                pointer-events: auto;
            }

            .congreso-menu .nav-link-small {
                width: 100%;
                max-width: none;
                min-width: 0;
                min-height: 44px;
                justify-content: flex-start;
                padding: 0 22px;
                border-left: 0;
                border-right: 0;
                font-size: 0.68rem;
                letter-spacing: 0.12em;
                white-space: normal;
            }

            .congreso-menu .nav-link-small:last-child {
                border-right: 0;
            }

            .hero {
                min-height: 860px;
                background:
                    linear-gradient(180deg, rgba(39, 31, 79, 0.9) 0%, rgba(39, 31, 79, 0.18) 58%),
                    url('{{ asset('assets/congreso/hero-background.png') }}') 66% top / auto 100% no-repeat,
                    #292153;
            }

            .hero::before {
                height: 52%;
                background:
                    linear-gradient(180deg, rgba(39, 31, 79, 0) 0%, rgba(39, 31, 79, 0.26) 42%, rgba(39, 31, 79, 0.7) 100%),
                    radial-gradient(circle at 68% 48%, rgba(39, 31, 79, 0.6) 0%, rgba(39, 31, 79, 0.28) 32%, rgba(39, 31, 79, 0) 62%);
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
                margin: 34px 0 0;
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

            .outcomes {
                min-height: auto;
                padding: 68px 0 78px;
            }

            .outcomes-title {
                max-width: 310px;
                margin: 0 auto 42px;
                font-size: clamp(1.5rem, 7.6vw, 1.9rem);
                line-height: 1.05;
            }

            .outcomes-grid {
                max-width: 360px;
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .outcome-icon {
                height: 104px;
                margin-bottom: 18px;
            }

            .outcome-card h3 {
                max-width: 280px;
                margin: 0 auto 12px;
                font-size: clamp(1.08rem, 5.8vw, 1.32rem);
            }

            .outcome-card p {
                max-width: 300px;
                font-size: 0.88rem;
                line-height: 1.2;
            }

            .outcomes-character {
                top: 74px;
                left: -164px;
                width: 258px;
                transform: none;
            }

            .outcomes-mask {
                top: 0;
                right: -42px;
                width: 84px;
            }

            .conversations {
                padding: 58px 0 66px;
            }

            .conversations-title {
                max-width: 320px;
                margin: 0 auto 38px;
                font-size: clamp(1.5rem, 7.6vw, 1.9rem);
            }

            .conversations-grid {
                max-width: 340px;
                grid-template-columns: 1fr;
                gap: 42px;
                margin: 0 auto;
            }

            .conversation-icon {
                height: 92px;
                margin-bottom: 18px;
            }

            .conversation-card h3 {
                margin-bottom: 12px;
                font-size: clamp(1.08rem, 5.8vw, 1.32rem);
            }

            .conversation-card p {
                max-width: 290px;
                font-size: 0.88rem;
                line-height: 1.22;
            }

            .conversations-waves {
                top: 18px;
                right: -22px;
                width: 78px;
            }

            .workflow {
                min-height: auto;
                padding: 58px 0 72px;
            }

            .workflow-title {
                max-width: 300px;
                margin: 0 auto 42px;
                font-size: clamp(1.5rem, 7.6vw, 1.9rem);
                line-height: 1.05;
            }

            .workflow-grid {
                max-width: 330px;
                grid-template-columns: 1fr;
                gap: 38px;
            }

            .workflow-icon {
                height: 96px;
                margin-bottom: 18px;
            }

            .workflow-card h3 {
                font-size: clamp(1.08rem, 5.8vw, 1.32rem);
            }

            .workflow-character {
                right: -78px;
                bottom: 0;
                width: auto;
                height: 240px;
                opacity: 0.9;
            }

            .policy {
                padding: 60px 0 68px;
            }

            .policy-title {
                max-width: 320px;
                margin: 0 auto 34px;
                font-size: clamp(1.5rem, 7.6vw, 1.9rem);
            }

            .policy-layout {
                grid-template-columns: 1fr;
                gap: 34px;
            }

            .policy-copy,
            .policy-territory p,
            .policy-lead,
            .policy-note {
                font-size: 0.88rem;
            }

            .policy-impact-title,
            .policy-subtitle {
                margin-bottom: 16px;
                font-size: 1.16rem;
            }

            .policy-map {
                width: min(100%, 280px);
                margin: 0 auto 24px;
            }

            .policy-stats {
                width: min(100%, 320px);
                margin-bottom: 30px;
            }

            .policy-audience li {
                font-size: 1.08rem;
            }

            .policy-photos {
                gap: 6px;
            }

            .policy-character {
                left: -74px;
                bottom: auto;
                top: 240px;
                width: 124px;
                opacity: 0.95;
            }

            .mapping-hero {
                min-height: 520px;
                background:
                    linear-gradient(180deg, rgba(139, 106, 255, 0.06) 0%, rgba(139, 106, 255, 0.45) 48%, rgba(139, 106, 255, 0.98) 74%),
                    url('{{ asset('assets/congreso/mapping-hero-composite.png') }}') 23% top / auto 100% no-repeat,
                    var(--congreso-violet);
            }

            .mapping-hero-inner {
                align-items: flex-end;
                justify-content: center;
            }

            .mapping-content {
                width: 100%;
                margin: 0;
                padding: 260px 0 56px;
                text-align: center;
            }

            .mapping-title {
                max-width: 330px;
                margin: 0 auto 18px;
                font-size: clamp(1.55rem, 7.4vw, 1.95rem);
            }

            .mapping-copy {
                max-width: 330px;
                margin: 0 auto 26px;
                font-size: 0.88rem;
                line-height: 1.24;
            }

            .mapping-waves {
                right: -18px;
                bottom: 22px;
                width: 78px;
            }

            .mapping-logos-inner {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }

            .mapping-logo-group {
                justify-items: center;
            }

            .mapping-organizers {
                width: min(78vw, 280px);
            }

            .mapping-allies {
                width: min(88vw, 420px);
            }

            .news-cards {
                padding: 58px 0 68px;
            }

            .news-card-grid {
                width: min(100%, 340px);
                grid-template-columns: 1fr;
                gap: 28px;
            }

            .news-card-body {
                min-height: 188px;
                padding: 24px 24px 26px;
            }

            .news-card-body p {
                margin-bottom: 24px;
                font-size: 0.9rem;
                line-height: 1.28;
            }

            .regional-cta {
                min-height: 360px;
                background:
                    linear-gradient(180deg, rgba(245, 241, 223, 0.38) 0%, rgba(245, 241, 223, 0.86) 54%, rgba(245, 241, 223, 0.94) 100%),
                    url('{{ asset('assets/congreso/regional-cta-background.png') }}') center center / auto 100% no-repeat;
            }

            .regional-cta-inner {
                align-items: center;
                justify-content: center;
            }

            .regional-cta-content {
                width: min(100%, 320px);
                margin: 0;
                padding: 44px 0 124px;
                text-align: center;
            }

            .regional-cta-title {
                font-size: clamp(1.5rem, 7vw, 1.9rem);
            }

            .regional-cta-character {
                left: 50%;
                width: 112px;
                transform: translateX(18%);
            }

            .site-footer {
                padding: 30px 0 34px;
            }

            .site-footer-inner {
                flex-direction: column;
                gap: 22px;
            }

            .footer-email {
                max-width: 100%;
                min-height: 28px;
                padding: 0 14px;
                font-size: clamp(0.64rem, 3vw, 0.78rem);
                overflow-wrap: anywhere;
                text-align: center;
            }

            .footer-socials {
                gap: 14px;
            }

            .footer-social-link {
                width: 32px;
                height: 32px;
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

            <a class="congreso-menu-toggle" href="#congreso-menu" role="button" aria-controls="congreso-menu" aria-expanded="false"
                aria-label="Abrir menú">
                <span class="congreso-menu-toggle-lines" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <div class="congreso-menu" id="congreso-menu">
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
            <img class="inflection-mask" src="{{ asset('assets/congreso/inflection-mask.png') }}" alt=""
                aria-hidden="true">
            <img class="inflection-waves" src="{{ asset('assets/congreso/inflection-waves.png') }}" alt=""
                aria-hidden="true">

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
                    <a class="inflection-button" href="#lo-que-deja">Conoce más</a>
                </div>
            </div>
        </section>

        <section class="outcomes" id="lo-que-deja" aria-labelledby="outcomes-title">
            <img class="outcomes-mask" src="{{ asset('assets/congreso/outcomes-mask.png') }}" alt=""
                aria-hidden="true">
            <img class="outcomes-character" src="{{ asset('assets/congreso/outcomes-character.png') }}" alt=""
                aria-hidden="true">

            <div class="outcomes-frame">
                <div class="container outcomes-inner">
                    <h2 class="outcomes-title" id="outcomes-title">Lo que deja este Congreso</h2>

                    <div class="outcomes-grid">
                        <article class="outcome-card">
                            <img class="outcome-icon"
                                src="{{ asset('assets/congreso/outcomes-icon-declaration.png') }}" alt=""
                                aria-hidden="true">
                            <h3>Declaración<br>de Bogotá</h3>
                            <p>Un acuerdo regional para posicionar la educación artística como derecho.</p>
                        </article>

                        <article class="outcome-card">
                            <img class="outcome-icon" src="{{ asset('assets/congreso/outcomes-icon-redartes.png') }}"
                                alt="" aria-hidden="true">
                            <h3>REDARTES</h3>
                            <p>Creación de la Red Iberoamericana de Educación Artística y Cultural.</p>
                        </article>

                        <article class="outcome-card">
                            <img class="outcome-icon" src="{{ asset('assets/congreso/outcomes-icon-roadmap.png') }}"
                                alt="" aria-hidden="true">
                            <h3>Hoja de ruta<br>2026-2028</h3>
                            <p>Acciones concretas para implementar políticas en los países.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="conversations" id="conversaciones" aria-labelledby="conversations-title">
            <img class="conversations-waves" src="{{ asset('assets/congreso/conversation-waves.png') }}" alt=""
                aria-hidden="true">

            <div class="container conversations-inner">
                <h2 class="conversations-title" id="conversations-title">Cuatro conversaciones clave</h2>

                <div class="conversations-grid">
                    <article class="conversation-card">
                        <img class="conversation-icon"
                            src="{{ asset('assets/congreso/conversation-icon-policy.png') }}" alt=""
                            aria-hidden="true">
                        <h3>Políticas públicas</h3>
                        <p>Cómo garantizar el derecho a la educación artística.</p>
                    </article>

                    <article class="conversation-card">
                        <img class="conversation-icon"
                            src="{{ asset('assets/congreso/conversation-icon-model.png') }}" alt=""
                            aria-hidden="true">
                        <h3>Modelos de<br>implementación</h3>
                        <p>Qué hace viable el sistema: recursos, infraestructura y alianzas.</p>
                    </article>

                    <article class="conversation-card">
                        <img class="conversation-icon"
                            src="{{ asset('assets/congreso/conversation-icon-training.png') }}" alt=""
                            aria-hidden="true">
                        <h3>Formación y<br>profesionalización</h3>
                        <p>El papel del artista formador y los agentes culturales.</p>
                    </article>

                    <article class="conversation-card">
                        <img class="conversation-icon"
                            src="{{ asset('assets/congreso/conversation-icon-knowledge.png') }}" alt=""
                            aria-hidden="true">
                        <h3>Conocimiento<br>y evaluación</h3>
                        <p>Cómo medir impacto y tomar decisiones basadas en datos.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="workflow" id="agenda" aria-labelledby="workflow-title">
            <img class="workflow-character" src="{{ asset('assets/congreso/workflow-character.png') }}" alt=""
                aria-hidden="true">

            <div class="container workflow-inner">
                <h2 class="workflow-title" id="workflow-title">Cómo trabajaremos</h2>

                <div class="workflow-grid">
                    <article class="workflow-card">
                        <img class="workflow-icon" src="{{ asset('assets/congreso/workflow-icon-conferences.png') }}"
                            alt="" aria-hidden="true">
                        <h3>Conferencias<br>magistrales</h3>
                    </article>

                    <article class="workflow-card">
                        <img class="workflow-icon" src="{{ asset('assets/congreso/workflow-icon-panels.png') }}"
                            alt="" aria-hidden="true">
                        <h3>Paneles<br>comparados</h3>
                    </article>

                    <article class="workflow-card">
                        <img class="workflow-icon" src="{{ asset('assets/congreso/workflow-icon-tables.png') }}"
                            alt="" aria-hidden="true">
                        <h3>Mesas técnicas<br>por país</h3>
                    </article>

                    <article class="workflow-card">
                        <img class="workflow-icon" src="{{ asset('assets/congreso/workflow-icon-experiences.png') }}"
                            alt="" aria-hidden="true">
                        <h3>Experiencias<br>inmersivas</h3>
                    </article>
                </div>
            </div>
        </section>

        <section class="policy" aria-labelledby="policy-title">
            <img class="policy-character" src="{{ asset('assets/congreso/policy-character.png') }}" alt=""
                aria-hidden="true">

            <div class="container policy-inner">
                <h2 class="policy-title" id="policy-title">Una política que ya está en marcha</h2>

                <div class="policy-layout">
                    <div class="policy-left">
                        <p class="policy-copy">
                            Artes para la Paz es la apuesta del Ministerio de las Culturas, las Artes y los Saberes de
                            Colombia, para llevar la formación artística a los territorios, garantizando el acceso a la
                            cultura como un derecho.
                        </p>

                        <h3 class="policy-impact-title">Impacto</h3>
                        <img class="policy-map" src="{{ asset('assets/congreso/policy-map.png') }}"
                            alt="Mapa de Colombia con cobertura territorial de Artes para la Paz">
                        <img class="policy-stats" src="{{ asset('assets/congreso/policy-impact-stats.png') }}"
                            alt="726 municipios, más de 538.332 personas, presencia en 2 de cada 3 municipios">

                        <div class="policy-territory">
                            <h3 class="policy-subtitle">El Arte Transforma Territorios</h3>
                            <p>
                                Más allá de la técnica, fomentamos la creatividad, la confianza y la convivencia. Cuando
                                el arte habita lo cotidiano, la paz se vuelve una realidad tangible en el territorio.
                            </p>
                        </div>
                    </div>

                    <div class="policy-right">
                        <div class="policy-video">Video testimoniales</div>
                        <p class="policy-lead">No formamos solo artistas. Fortalecemos territorios.</p>

                        <ul class="policy-audience" aria-label="Públicos fortalecidos">
                            <li style="--dot-color: var(--congreso-yellow)">Niñez y juventud</li>
                            <li style="--dot-color: var(--congreso-magenta)">Artistas formadores</li>
                            <li style="--dot-color: var(--congreso-lime)">Organizaciones locales</li>
                            <li style="--dot-color: #48c3df">Comunidades</li>
                        </ul>

                        <p class="policy-note">
                            Cuando el arte se vuelve parte de la vida cotidiana, la paz empieza a sentirse.
                        </p>

                        <h3 class="policy-subtitle">¿Cómo Lo Logramos?</h3>
                        <div class="policy-methods">
                            <p>
                                Operamos mediante una red de alianzas con universidades públicas y organizaciones
                                territoriales bajo cuatro pilares:
                            </p>
                            <p><strong>Formación Continua:</strong> Procesos constantes en instituciones educativas y
                                centros culturales.</p>
                            <p><strong>Pertinencia Territorial:</strong> Adaptamos los contenidos a la diversidad
                                geográfica y social de cada región.</p>
                            <p><strong>Fortalecimiento Local:</strong> Impulso técnico y financiero a agentes
                                culturales de base.</p>
                            <p><strong>Articulación Nacional:</strong> Conexión con otros programas para ampliar el
                                impacto.</p>
                        </div>

                        <div class="policy-photos" aria-label="Registro fotográfico de Artes para la Paz">
                            <img src="{{ asset('assets/congreso/policy-photo-conductor.png') }}" alt="">
                            <img src="{{ asset('assets/congreso/policy-photo-dancers.png') }}" alt="">
                            <img src="{{ asset('assets/congreso/policy-photo-community.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mapping" id="mapeo" aria-labelledby="mapping-title">
            <div class="mapping-hero">
                <img class="mapping-waves" src="{{ asset('assets/congreso/mapping-waves.png') }}" alt=""
                    aria-hidden="true">

                <div class="container mapping-hero-inner">
                    <div class="mapping-content">
                        <h2 class="mapping-title" id="mapping-title">Construyendo<br>conocimiento regional</h2>
                        <p class="mapping-copy">
                            El Congreso impulsa el Mapeo Regional EFAC, una herramienta para entender el estado de la
                            educación artística en Iberoamérica, identificar brechas y orientar decisiones de política
                            pública.
                        </p>
                        <a class="mapping-button" href="#inscripcion">Participar en el mapeo</a>
                    </div>
                </div>
            </div>

            <div class="mapping-logos" aria-label="Organizadores y aliados">
                <div class="container mapping-logos-inner">
                    <div class="mapping-logo-group">
                        <p class="mapping-logo-label">Organizan</p>
                        <img class="mapping-organizers" src="{{ asset('assets/congreso/mapping-organizers.png') }}"
                            alt="Ministerio de las Culturas y OEI">
                    </div>

                    <div class="mapping-logo-group">
                        <p class="mapping-logo-label">Aliados</p>
                        <img class="mapping-allies" src="{{ asset('assets/congreso/mapping-allies.png') }}"
                            alt="Unesco, Secretaría General Iberoamericana y CAF">
                    </div>
                </div>
            </div>
        </section>

        <section class="news-cards" aria-label="Noticias y experiencias del Congreso">
            <div class="container news-cards-inner">
                <div class="news-card-grid">
                    <article class="news-card" style="--card-bg: var(--congreso-lime)">
                        <img src="{{ asset('assets/congreso/news-card-band.png') }}"
                            alt="Comunidad cantando en un espacio de formación artística">
                        <div class="news-card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                            <a class="news-card-link" href="#">Leer más</a>
                        </div>
                    </article>

                    <article class="news-card" style="--card-bg: #18bfe4">
                        <img src="{{ asset('assets/congreso/news-card-youth.png') }}"
                            alt="Jóvenes celebrando durante una actividad cultural">
                        <div class="news-card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                            <a class="news-card-link" href="#">Leer más</a>
                        </div>
                    </article>

                    <article class="news-card" style="--card-bg: var(--congreso-magenta)">
                        <img src="{{ asset('assets/congreso/news-card-community.png') }}"
                            alt="Jóvenes intérpretes tocando saxofón en una agrupación musical">
                        <div class="news-card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                            <a class="news-card-link" href="#">Leer más</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="regional-cta" id="inscripcion" aria-labelledby="regional-cta-title">
            <img class="regional-cta-character" src="{{ asset('assets/congreso/regional-cta-character.png') }}"
                alt="" aria-hidden="true">

            <div class="container regional-cta-inner">
                <div class="regional-cta-content">
                    <h2 class="regional-cta-title" id="regional-cta-title">Sé parte de esta<br>conversación regional</h2>
                    <a class="regional-cta-button" href="#">Inscribirme</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container site-footer-inner">
            <a class="footer-email" href="mailto:Congresoefac@mincultura.gov.co">
                Congresoefac@mincultura.gov.co.
            </a>

            <div class="footer-socials" aria-label="Redes sociales">
                <a class="footer-social-link" href="#" aria-label="Facebook">
                    <img src="{{ asset('assets/congreso/footer-icon-facebook.png') }}" alt="">
                </a>
                <a class="footer-social-link" href="#" aria-label="X">
                    <img src="{{ asset('assets/congreso/footer-icon-x.png') }}" alt="">
                </a>
                <a class="footer-social-link" href="#" aria-label="Instagram">
                    <img src="{{ asset('assets/congreso/footer-icon-instagram.png') }}" alt="">
                </a>
                <a class="footer-social-link" href="#" aria-label="YouTube">
                    <img src="{{ asset('assets/congreso/footer-icon-youtube.png') }}" alt="">
                </a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        (() => {
            const header = document.getElementById('congreso-header');
            const menuToggle = header.querySelector('.congreso-menu-toggle');
            const menuLinks = header.querySelectorAll('.congreso-menu a');

            const updateHeader = () => {
                header.classList.toggle('is-scrolled', window.scrollY > 12);
            };

            const closeMenu = () => {
                header.classList.remove('is-menu-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.setAttribute('aria-label', 'Abrir menú');
            };

            updateHeader();
            window.addEventListener('scroll', updateHeader, {
                passive: true
            });

            menuToggle.addEventListener('click', (event) => {
                event.preventDefault();
                const isOpen = header.classList.toggle('is-menu-open');
                menuToggle.setAttribute('aria-expanded', String(isOpen));
                menuToggle.setAttribute('aria-label', isOpen ? 'Cerrar menú' : 'Abrir menú');
            });

            menuLinks.forEach((link) => {
                link.addEventListener('click', closeMenu);
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth >= 768) {
                    closeMenu();
                }
            });
        })();
    </script>
</body>

</html>
