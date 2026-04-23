<?php

use Illuminate\Support\Facades\Route;

Route::match(['GET', 'HEAD'], '/_layouts/{path}', function () {
    $rawUri = request()->server('REQUEST_URI', '/_layouts');

    return redirect()->away('https://www.mincultura.gov.co' . $rawUri);
})->where('path', '.*')->name('sharepoint-layouts.redirect');

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/inicio/botones', function () {
    return view('pages.secciones.inicio.botones');
})->name('inicio.botones');

Route::get('/pages/gob-minculturas-master', function () {
    $path = resource_path('views/pages/gob_minculturas_master.html');

    abort_unless(file_exists($path), 404);

    return response()->file($path);
})->name('pages.gob-minculturas-master');

Route::get('/despacho/PublishingImages/{path}', function () {
    $rawUri = request()->server('REQUEST_URI', '/despacho/PublishingImages');

    return redirect()->away('https://www.mincultura.gov.co' . $rawUri);
})->where('path', '.*')->name('publishing-images.redirect');

Route::get('/despacho/oficina-de-control-interno/servicios-informacion/programa-anual-de-auditorias', function () {
    return view('ministerio.despacho.oficina-de-control-interno.servicios-informacion.programa-anual-de-auditorias');
})->name('despacho.oficina-de-control-interno.servicios-informacion.programa-anual-de-auditorias');

Route::get('/despacho/oficina-de-control-interno/servicios-informacion', function () {
    return view('ministerio.despacho.oficina-de-control-interno.servicios-informacion.index');
})->name('despacho.oficina-de-control-interno.servicios-informacion.public.index');

Route::get('/despacho/oficina-de-control-interno/servicios-informacion/informes-de-la-oficina-de-control-interno', function () {
    return view('ministerio.despacho.oficina-de-control-interno.servicios-informacion.informes-de-la-oficina-de-control-interno');
})->name('despacho.oficina-de-control-interno.servicios-informacion.informes-de-la-oficina-de-control-interno');
