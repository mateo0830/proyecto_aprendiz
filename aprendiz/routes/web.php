<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

route::view('/iniciar-sesion', 'iniciar_sesion')->name('iniciar.sesion');
route::get('/asignar_cita', function () {
    return view('citas.asignarcitas');
})->name('asignar_cita');
