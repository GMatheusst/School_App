<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
// rotas da aplicação

// rotas de página inicial
Route::get('/', function () {
    return view('welcome');
});

// rotas do dashboard
Route::middleware('auth')->group(function (){
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [UserController::class, 'destroy']);
});


// rotas de login e registro
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
