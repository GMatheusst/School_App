<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CursOController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Rotas para usuários não autenticados

// Página Inicial - Usuários não autenticados e autenticados
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cursos', [CourseController::class, 'index'])->name('cursos');
Route::get('/sobre', function () {
    return view('about'); // Página estática
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Autenticação
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas para alunos (área protegida por auth)
Route::middleware('auth')->group(function () {
    Route::get('/area-aluno', [StudentController::class, 'dashboard'])->name('aluno.dashboard');
    Route::get('/meus-cursos', [StudentController::class, 'meusCursos'])->name('aluno.cursos');
    Route::get('/curso/{id}', [StudentController::class, 'verCurso'])->name('aluno.curso.detalhe');
    Route::get('/frequencia', [StudentController::class, 'frequencia'])->name('aluno.frequencia');
    Route::get('/nota', [StudentController::class, 'nota'])->name('aluno.nota');
});

// Rotas para professores
Route::middleware(['auth', 'role:professor'])->group(function () {
    Route::get('/area-professor', [TeacherController::class, 'dashboard'])->name('professor.dashboard');
    Route::get('/aulas', [TeacherController::class, 'aulas'])->name('professor.aulas');
    Route::get('/aula/{id}', [TeacherController::class, 'detalheAula'])->name('professor.aula.detalhe');
    Route::get('/frequencia', [TeacherController::class, 'frequenciaGeral'])->name('professor.frequencia');
    Route::get('/nota', [TeacherController::class, 'notaGeral'])->name('professor.nota');
});

// Rotas para administradores
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('usuarios', UserController::class);
    Route::resource('cursos', CourseController::class);
    Route::resource('banners', BannerController::class);
});