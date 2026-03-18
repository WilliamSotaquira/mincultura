<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="{{ url('/') }}">{{ config('app.name', 'Mincultura') }}</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Alternar navegacion">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold' : '' }}" href="{{ route('home') }}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ministerio.*') ? 'active fw-semibold' : '' }}"
                        href="{{ route('ministerio.index') }}">
                        Ministerio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('direcciones.*') ? 'active fw-semibold' : '' }}"
                        href="{{ route('direcciones.index') }}">
                        Direcciones
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('participa.*') ? 'active fw-semibold' : '' }}"
                        href="{{ route('participa.index') }}">
                        Participa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('atencion.*') ? 'active fw-semibold' : '' }}"
                        href="{{ route('atencion.index') }}">
                        Atencion
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transparencia.*') ? 'active fw-semibold' : '' }}"
                        href="{{ route('transparencia.index') }}">
                        Transparencia
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('buscado.*') ? 'active fw-semibold' : '' }}"
                        href="{{ route('buscado.index') }}">
                        Buscado
                    </a>
                </li>
                <li class="nav-item mt-2 mt-lg-0 ms-lg-2">
                    <a class="btn btn-outline-primary btn-sm wcag-aaa-link" href="{{ route('pages.gob-minculturas-master') }}">
                        Gob Master
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
