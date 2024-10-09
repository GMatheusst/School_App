<?php
namespace App\Http\Controllers;

use App\Jobs\GenerateMediaGeralGraph;
use App\Models\Aluno; 
use App\Models\Student;// Certifique-se de ter o modelo Aluno importado

class MediaGeralController extends Controller
{
    public function calcularMediaGeral()
    {
        // Exemplo: Obtendo todos os alunos para calcular a média
        $alunos = Student::all();
        $data = [];

        // Loop para calcular média (supondo que você tenha um campo de notas no modelo Aluno)
        foreach ($alunos as $aluno) {
            $media = ($aluno->nota1 + $aluno->nota2 + $aluno->nota3) / 3; // Exemplo simples de média
            $data[$aluno->nome] = $media; // Armazena a média de cada aluno
        }

        // Dispara o job para gerar o gráfico
        GenerateMediaGeralGraph::dispatch();

        return response()->json($data);
    }
}
