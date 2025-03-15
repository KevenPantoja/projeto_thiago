<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Página sobre
Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

// Página portfólio
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// Página de serviços
Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

// Página de contato
Route::get('/contato', function () {
    return view('contato');
})->name('contato');

// Rota para enviar o formulário de contato
Route::post('/contato', [ContatoController::class, 'enviar'])->name('contato.enviar');

// Página área do cliente
Route::get('/area-cliente', function () {
    return view('area-cliente');
})->name('area-cliente');

// Rota para login
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

// Rota para logout
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Rota de registro (Cadastro)
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');
