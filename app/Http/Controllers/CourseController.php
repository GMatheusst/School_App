<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Exibe a lista de cursos
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    // Exibe o formulário de criação de novo curso
    public function create()
    {
        return view('cursos.create');
    }

    // Armazena um novo curso no banco de dados
   
    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'duracao' => 'required|integer',
            'preco' => 'required|numeric',
            'in_stock' => 'required|integer|min:0'
            
        ]);

        // Processar o upload de imagem

        // Criação do curso
        Curso::create([
            'name' => $request->input('nome'),
            'description' => $request->input('descricao'),
            'workload' => $request->input('duracao'),
            'price' => $request->input('preco'),
            'in_stock' => $request->input('in_stock'),
        ]);

        return redirect()->route('cursos.index')->with('success', 'Curso criado com sucesso!');
    }



    // Exibe o formulário de edição de um curso
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    // Atualiza um curso no banco de dados
    public function update(Request $request, Curso $curso)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'duracao' => 'required|integer',
            'preco' => 'required|numeric',
            'in_stock' => 'required|integer|min:0'
        ]);

        $curso->update($validatedData);

        return redirect()->route('cursos.index')->with('success', 'Curso atualizado com sucesso!');
    }

    // Remove um curso do banco de dados
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso excluído com sucesso!');
    }
}
