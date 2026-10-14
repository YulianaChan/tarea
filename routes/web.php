<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/Editar', function () {
    return view('auth.Editar');
})->name('Editar');

Route::get('/Catalogo', function () {
    return view('auth.Catalogo');
})->name('Catalogo');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    return back()
        ->withErrors(['email' => 'Las credenciales proporcionadas no son válidas.'])
        ->onlyInput('email');
})->middleware('throttle:5,1')->name('login.authenticate');
