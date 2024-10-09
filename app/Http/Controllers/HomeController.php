<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Recupera cursos em destaque
        $cursos = Curso::orderBy('created_at', 'desc')->take(6)->get();  // Exibe 6 cursos mais recentes

        return view('index', compact('cursos'));
    }
}
