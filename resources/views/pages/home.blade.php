@extends('layouts.app')

@section('title', 'Inicio | ' . config('app.name', 'Mincultura'))

@section('content')
    <section class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="display-6 fw-semibold mb-2">{{ config('app.name', 'Mincultura') }}</h1>
                <p class="text-body-secondary mb-0">
                    Portal principal con acceso a las secciones configuradas por grupos de rutas.
                </p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Ministerio</h2>
                        <p class="text-body-secondary small mb-3">Informacion institucional del ministerio.</p>
                        <a href="{{ route('ministerio.index') }}">Ministerio</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Direcciones</h2>
                        <p class="text-body-secondary small mb-3">Acceso a direcciones y dependencias.</p>
                        <a href="{{ route('direcciones.index') }}">Direcciones</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Participa</h2>
                        <p class="text-body-secondary small mb-3">Espacios de participacion ciudadana.</p>
                        <a href="{{ route('participa.index') }}">Participa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Atencion</h2>
                        <p class="text-body-secondary small mb-3">Canales de atencion al ciudadano.</p>
                        <a href="{{ route('atencion.index') }}">Atencion</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Transparencia</h2>
                        <p class="text-body-secondary small mb-3">Publicacion de informacion de transparencia.</p>
                        <a href="{{ route('transparencia.index') }}">Transparencia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Buscado</h2>
                        <p class="text-body-secondary small mb-3">Busqueda y accesos rapidos del portal.</p>
                        <a href="{{ route('buscado.index') }}">Buscado</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
