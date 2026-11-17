<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('principal');
});

<<<<<<< HEAD
route::view('/iniciar-sesion', 'iniciar_sesion')->name('iniciar.sesion');
route::get('/asignar_cita', function () {
=======
Route::view('/iniciar-sesion', 'iniciar_sesion')->name('iniciar.sesion');
Route::post('/iniciar-sesion', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (! Auth::attempt($credentials)) {
        return back()->withErrors([
            'email' => 'Las credenciales no son válidas.',
        ])->onlyInput('email');
    }

    $request->session()->regenerate();

    return redirect()->intended('/');
})->name('iniciar.sesion.procesar');
Route::get('/asignar_cita', function () {
>>>>>>> temp-branch
    return view('citas.asignarcitas');
})->name('asignar_cita');
