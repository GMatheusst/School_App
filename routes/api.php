<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Rotas para usuários não autenticados
Route::get('/', [CourseController::class, 'index'])->name('home'); // Página inicial
Route::get('/cursos', [CourseController::class, 'list'])->name('cursos'); // Listagem de cursos
Route::get('/sobre-nos', function () {
    return view('about'); // Página sobre nós
})->name('sobre-nos');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Rotas protegidas para alunos autenticados
Route::middleware(['auth', 'role:aluno'])->group(function () {
    Route::get('/carrinho', [CartController::class, 'index'])->name('carrinho');
    Route::post('/carrinho/adicionar', [CartController::class, 'add'])->name('carrinho.adicionar');
    Route::delete('/carrinho/remover/{id}', [CartController::class, 'remove'])->name('carrinho.remover');
    Route::get('/pedidos', [OrderController::class, 'index'])->name('pedidos');
    Route::post('/pedidos/confirmar', [OrderController::class, 'confirm'])->name('pedidos.confirmar');
    Route::get('/dashboard/aluno', [DashboardController::class, 'aluno'])->name('dashboard.aluno');
    Route::get('/atividades', [DashboardController::class, 'atividadesAluno'])->name('atividades.aluno');
    Route::get('/notas', [DashboardController::class, 'notasAluno'])->name('notas.aluno');
});

// Rotas protegidas para professores autenticados
Route::middleware(['auth', 'role:professor'])->group(function () {
    Route::get('/dashboard/professor', [DashboardController::class, 'professor'])->name('dashboard.professor');
    Route::get('/atividades', [DashboardController::class, 'atividadesProfessor'])->name('atividades.professor');
    Route::get('/salas', [DashboardController::class, 'salasProfessor'])->name('salas.professor');
    Route::get('/notas', [DashboardController::class, 'notasProfessor'])->name('notas.professor');
    Route::post('/criar-tarefa', [DashboardController::class, 'criarTarefa'])->name('criar.tarefa');
});

// Rotas protegidas para administradores
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::get('/gerenciar/cursos', [DashboardController::class, 'gerenciarCursos'])->name('gerenciar.cursos');
    Route::get('/gerenciar/banners', [DashboardController::class, 'gerenciarBanners'])->name('gerenciar.banners');
    Route::get('/gerenciar/usuarios', [DashboardController::class, 'gerenciarUsuarios'])->name('gerenciar.usuarios');
    Route::post('/cursos/adicionar', [CourseController::class, 'create'])->name('cursos.adicionar');
    Route::put('/cursos/editar/{id}', [CourseController::class, 'update'])->name('cursos.editar');
    Route::delete('/cursos/remover/{id}', [CourseController::class, 'destroy'])->name('cursos.remover');
});

// Rotas protegidas para administradores master
Route::middleware(['auth', 'role:admin-master'])->group(function () {
    Route::get('/dashboard/admin-master', [DashboardController::class, 'adminMaster'])->name('dashboard.admin-master');
    Route::get('/gerenciar/pedidos', [DashboardController::class, 'gerenciarPedidos'])->name('gerenciar.pedidos');
    Route::get('/gerenciar/carrinhos', [DashboardController::class, 'gerenciarCarrinhos'])->name('gerenciar.carrinhos');
    Route::get('/relatorios/gerais', [DashboardController::class, 'relatoriosGerais'])->name('relatorios.gerais');
});
