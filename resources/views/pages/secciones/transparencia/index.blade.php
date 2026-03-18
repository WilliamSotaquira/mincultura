@extends('layouts.app')

@section('title', 'Transparencia | ' . config('app.name', 'Mincultura'))

@section('content')
    <section class="container py-5">
        <div class="row mb-4">
            <div class="col-lg-8">
                <h1 class="h3 mb-3">Transparencia</h1>
                <p class="text-body-secondary mb-0">
                    Consulta los accesos habilitados de la seccion de transparencia, con rutas directas a contenidos
                    institucionales, planeacion y reportes financieros.
                </p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Entidad</h2>
                        <p class="text-body-secondary small mb-3">
                            Informacion de entes, autoridades y organos de control relacionados.
                        </p>
                        <a href="{{ route('transparencia.entidad.entes') }}">Ir a Entidad</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Planeacion e Informes</h2>
                        <p class="text-body-secondary small mb-3">
                            Acceso al plan anual de adquisiciones dentro de la categoria 4.
                        </p>
                        <a href="{{ route('transparencia.4.planeacion-presupuesto-e-informes.plan-anual-de-adquisiciones') }}">
                            Ver plan anual de adquisiciones
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h5 mb-2">Informacion Financiera</h2>
                        <p class="text-body-secondary small mb-3">
                            Consulta de estados financieros y reportes publicados.
                        </p>
                        <a href="{{ route('transparencia.9.estados-financieros') }}">Ver estados financieros</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h2 class="h6 text-uppercase text-body-secondary mb-3">Rutas disponibles</h2>
            <div class="list-group">
                <a href="{{ route('transparencia.index') }}" class="list-group-item list-group-item-action">
                    /transparencia
                </a>
                <a href="{{ route('transparencia.entidad.entes') }}" class="list-group-item list-group-item-action">
                    /transparencia/entidad/entes
                </a>
                <a href="{{ route('transparencia.4.planeacion-presupuesto-e-informes.plan-anual-de-adquisiciones') }}"
                    class="list-group-item list-group-item-action">
                    /transparencia/4/planeacion-presupuesto-e-informes/plan-anual-de-adquisiciones
                </a>
                <a href="{{ route('transparencia.9.estados-financieros') }}" class="list-group-item list-group-item-action">
                    /transparencia/9/estados-financieros
                </a>
            </div>
        </div>
    </section>
@endsection
