<?php

use Illuminate\Support\Facades\Route;

// Ruta 1
Route::get('/', function () {
    return view('ruta1');
});

// Ruta 2
Route::get('/info', function () {
    return view('info');
});

// Ruta 3
Route::get('/saludo/{nombre}', function ($nombre) {
    return view('saludo', ['nombre' => $nombre]);
});