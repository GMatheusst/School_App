<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Recupera cursos em destaque
        $cursos = Curso::all();

        return view('index', compact('cursos'));
    }
}
