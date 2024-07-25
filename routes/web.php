<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
// rotas da aplicação

// rotas de página inicial
Route::get('/', function () {
    return view('welcome');
});

// rotas do dashboard
Route::get('dashboard', [UserController::class, 'index'])->middleware('auth');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->middleware('auth');
Route::put('users/{user}', [UserController::class, 'update'])->middleware('auth');
Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware('auth');

// rotas de login e registro
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

