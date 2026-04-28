<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.secciones.ministerio.index');
})->name('index');

Route::get('/despacho/comunicaciones/micasa/publicaciones', function () {
    return view('ministerio.despacho.comunicaciones.micasa.publicaciones.index');
})->name('despacho.comunicaciones.micasa.publicaciones.index');

Route::get('/despacho/sites/pnc', function () {
    return view('ministerio.despacho.sites.pnc');
})->name('despacho.sites.pnc');

Route::get('/despacho/sites/escenario-del-mundo', function () {
    return view('ministerio.despacho.sites.escenario-del-mundo');
})->name('despacho.sites.escenario-del-mundo');

Route::get('/despacho/sites/casa-comun', function () {
    return view('ministerio.despacho.sites.casa-comun');
})->name('despacho.sites.casa-comun');

Route::get('/despacho/sites/congreso', function () {
    return view('ministerio.despacho.sites.congreso');
})->name('despacho.sites.congreso');

Route::get('/despacho/oficina-de-control-interno/servicios-informacion', function () {
    return view('ministerio.despacho.oficina-de-control-interno.servicios-informacion.index');
})->name('despacho.oficina-de-control-interno.servicios-informacion.index');

Route::get('/despacho/oficina-de-control-interno/servicios-informacion/programa-anual-de-auditorias', function () {
    return view('ministerio.despacho.oficina-de-control-interno.servicios-informacion.programa-anual-de-auditorias');
})->name('despacho.oficina-de-control-interno.servicios-informacion.programa-anual-de-auditorias');

Route::get('/despacho/oficina-de-control-interno/servicios-informacion/informes-de-la-oficina-de-control-interno', function () {
    return view('ministerio.despacho.oficina-de-control-interno.servicios-informacion.informes-de-la-oficina-de-control-interno');
})->name('despacho.oficina-de-control-interno.servicios-informacion.informes-de-la-oficina-de-control-interno');

Route::get('/despacho/oficina-de-control-interno/servicios-informacion/plan-de-mejoramiento-de-la-cgr', function () {
    return view('ministerio.despacho.oficina-de-control-interno.servicios-informacion.plan-de-mejoramiento-de-la-cgr');
})->name('despacho.oficina-de-control-interno.servicios-informacion.plan-de-mejoramiento-de-la-cgr');
