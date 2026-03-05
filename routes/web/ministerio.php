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
