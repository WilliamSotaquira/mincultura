<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', config('app.name', 'Mincultura'))</title>

<!-- css BDC -->
<link href="https://cdn.www.gov.co/layout-govco-v5/all.css" rel="stylesheet">

<!-- css bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      rel="stylesheet" crossorigin="anonymous">

<style>
    .site-footer {
        --footer-hover-bg: #f5b400;
        --footer-hover-fg: #2f2483;
    }

    .site-footer a:hover,
    .site-footer a:focus-visible,
    .wcag-aaa-link:hover,
    .wcag-aaa-link:focus-visible {
        color: var(--footer-hover-fg) !important;
        background-color: var(--footer-hover-bg);
        text-decoration: underline;
        text-decoration-thickness: 2px;
        outline: 2px solid var(--footer-hover-fg);
        outline-offset: 2px;
    }

    .site-footer .social-links a,
    .site-footer .social-links a:hover,
    .site-footer .social-links a:focus,
    .site-footer .social-links a:focus-visible,
    .site-footer .social-links a:active {
        border: 0 !important;
        border-bottom: 0 !important;
        background-image: none !important;
        text-decoration: none !important;
        line-height: 0;
        font-size: 0;
    }

    .site-footer .social-links a::before,
    .site-footer .social-links a::after {
        content: none !important;
        display: none !important;
    }
</style>
