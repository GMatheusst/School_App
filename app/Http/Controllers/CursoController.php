<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use App\Models\Curso;
use App\Http\Requests\StoreUpdateCursoRequest;

class CursOController extends Controller
{
    public function store(StoreCursoRequest $request)
    {
        $curso =  Curso::create($request->validated());
        
        return response()->json($curso, 201);
    }

    public function update(UpdateCursoRequest $request, Curso $curso)
    {
        $curso->update($request->validated());

        return response()->json($curso, 200);
    }
}
