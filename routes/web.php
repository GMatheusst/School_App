<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
// rotas da aplicação

// rotas de página inicial
Route::get('/', function () {
    return view('welcome');
});

// rotas do dashboard
Route::middleware('auth')->group(function (){ // Método middleware para verificar se o usuário está logado
Route::resource('users', UserController::class); // Método resource para gerenciar usuários por meio das 4 funções crud
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard'); // Método get para gerenciar usuários e redirecionar para a página de dashboard
});


// rotas de login e registro
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login'); // Método get para exibir a página de login
Route::post('login', [AuthController::class, 'login']); // Método post para fazer login
Route::post('logout', [AuthController::class, 'logout'])->name('logout'); // Método post para fazer logout
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');  // Método get para exibir a página de registro
Route::post('register', [AuthController::class, 'register']); // Método post para criar um novo usuário
