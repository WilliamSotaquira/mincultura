<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.secciones.atencion.index');
})->name('index');
