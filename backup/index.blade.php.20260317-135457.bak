@extends('layouts.app')

@section('title', 'Servicios de información | Oficina de Control Interno | ' . config('app.name', 'Mincultura'))

@section('content')
    <section class="container py-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('ministerio.index') }}">Ministerio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Servicios de información</li>
            </ol>
        </nav>

        <div class="mb-4">
            <h1 class="h2 mb-3">Servicios de información</h1>
            <p class="text-body-secondary mb-0">
                Espacio de consulta de la Oficina de Control Interno con accesos a contenidos publicados para seguimiento
                y consulta institucional.
            </p>
        </div>

        <div class="list-group mb-4">
            <a href="{{ route('ministerio.despacho.oficina-de-control-interno.servicios-informacion.programa-anual-de-auditorias') }}"
                class="list-group-item list-group-item-action">
                Programa anual de auditorías
            </a>
            <a href="{{ route('ministerio.despacho.oficina-de-control-interno.servicios-informacion.informes-de-la-oficina-de-control-interno') }}"
                class="list-group-item list-group-item-action">
                Informes de la Oficina de Control Interno
            </a>
            <a href="{{ route('ministerio.despacho.oficina-de-control-interno.servicios-informacion.plan-de-mejoramiento-de-la-cgr') }}"
                class="list-group-item list-group-item-action">
                Plan de mejoramiento de la CGR
            </a>
        </div>

        <a href="https://www.mincultura.gov.co/despacho/Paginas/oficina-de-control-interno/default.aspx"
            class="btn btn-outline-primary" target="_blank" rel="noopener noreferrer">
            Ver sitio oficial de la Oficina de Control Interno
        </a>
    </section>
@endsection
