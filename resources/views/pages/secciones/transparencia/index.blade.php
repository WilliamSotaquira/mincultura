@extends('layouts.app')

@section('title', 'Transparencia | ' . config('app.name', 'Mincultura'))

@section('content')
    <section class="container py-5">
        <h1 class="h3 mb-3">Transparencia</h1>
        <p class="text-body-secondary mb-4">Accesos disponibles de la seccion Transparencia.</p>

        <div class="list-group">
            <a href="{{ route('transparencia.entidad.entes') }}" class="list-group-item list-group-item-action">
                Entidad - Entes y autoridades
            </a>
            <a href="{{ route('transparencia.4.planeacion-presupuesto-e-informes.plan-anual-de-adquisiciones') }}" class="list-group-item list-group-item-action">
                4. Planeación, presupuesto e informes - Plan anual de adquisiciones
            </a>
            <a href="{{ route('transparencia.9.estados-financieros') }}" class="list-group-item list-group-item-action">
                9. Información financiera - Estados financieros
            </a>
        </div>
    </section>
@endsection
