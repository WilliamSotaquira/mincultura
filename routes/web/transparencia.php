<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.secciones.transparencia.index');
})->name('index');

Route::get('/entidad/entes', function () {
    return view('transparencia.entidad.entes');
})->name('entidad.entes');

Route::get('/4/planeacion-presupuesto-e-informes/plan-anual-de-adquisiciones', function () {
    return view('transparencia.4.planeacion-presupuesto-e-informes.plan-anual-de-adquisiciones');
})->name('4.planeacion-presupuesto-e-informes.plan-anual-de-adquisiciones');
Route::get('/9/estados-financieros', function () {
    return view('transparencia.9.estados_financieros');
})->name('9.estados-financieros');
