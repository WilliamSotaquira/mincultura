@extends('layouts.app')

@section('title', 'Ministerio | ' . config('app.name', 'Mincultura'))

@section('content')
    <section class="container py-5">
        <h1 class="h3 mb-3">Ministerio</h1>
        <p class="text-body-secondary mb-4">Accesos disponibles de la seccion Ministerio.</p>

        <div class="list-group">
            <a href="{{ route('ministerio.despacho.comunicaciones.micasa.publicaciones.index') }}"
                class="list-group-item list-group-item-action">
                Publicaciones MiCASa
            </a>
            <a href="{{ route('ministerio.despacho.sites.pnc') }}" class="list-group-item list-group-item-action">
                Plan Nacional de Cultura (PNC)
            </a>
        </div>
    </section>
@endsection
