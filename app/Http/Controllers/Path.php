<?php

namespace App\Http\Controllers;

class Path extends Controller
{
    public function indexA()
    {
        return view('alunos');
    }

    public function indexC()
    {
        return view('cursos');
    }

    public function indexP()
    {
        return view('projetos');
    }

    public function indexCt()
    {
        return view('contato');
    }
}
