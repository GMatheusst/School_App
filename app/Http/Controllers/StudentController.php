<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Curso;
use App\Models\Student;
use App\Http\Requests\StoreUpdateStudentRequest;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function dashboard()
    {
        // Aqui você pode adicionar lógica para exibir informações do aluno no dashboard
            return view('student.dashboard');
    }

    // Método para listar os cursos do aluno
    public function meusCursos()
    {
        $alunoId = Auth::id(); // Obtém o ID do aluno autenticado
        $cursos = Curso::where('id', $alunoId)->get(); // Recupera os cursos associados ao aluno

        return view('student.meus_cursos', compact('cursos'));
    }

    // Método para exibir detalhes de um curso específico
    public function verCurso($id)
    {
        $curso = Curso::findOrFail($id); // Recupera o curso pelo ID fornecido

        return view('student.curso_detalhe', compact('curso'));
    }

    // Método para exibir a frequência do aluno
    public function frequencia()
    {
        // Aqui você pode adicionar lógica para exibir a frequência do aluno
        return view('student.frequencia');
    }

    // Método para exibir as notas do aluno
    public function nota()
    {
        // Aqui você pode adicionar lógica para exibir as notas do aluno
        return view('student.nota');
    }

    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());

        return response()->json($student, 201);
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());
       
        return response()->json($student, 200);
    }
}
