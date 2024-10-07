<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// Rotas de Carrinho (API)
Route::middleware('auth:sanctum')->group(function() {
    Route::get('/carrinho', [CartController::class, 'index'])->name('api.carrinho.index');
    Route::post('/carrinho/add', [CartController::class, 'store'])->name('api.carrinho.store');
    Route::put('/carrinho/update', [CartController::class, 'update'])->name('api.carrinho.update');
    Route::delete('/carrinho/remove/{id}', [CartController::class, 'destroy'])->name('api.carrinho.destroy');
});

// Rotas de Pedido (API)
Route::middleware('auth:sanctum')->group(function() {
    Route::post('/pedido/finalizar', [OrderController::class, 'checkout'])->name('api.pedido.finalizar');
    Route::post('/pedido/cancelar', [OrderController::class, 'cancelar'])->name('api.pedido.cancelar');
});
