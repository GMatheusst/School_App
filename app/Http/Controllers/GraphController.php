<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Jobs\GenerateFrequenciaGraph;

class GraphController extends Controller
{
    public function getFrequenciaData()
    {
        // Exemplo: Obtendo a frequência de cursos de um banco de dados
        $cursos = Curso::all();
        $data = [];
    
        foreach ($cursos as $curso) {
            $data[$curso->nome] = $curso->frequencia; // Supondo que há um campo de frequência no modelo
        }
    
        // Dispara o job para gerar o gráfico
        GenerateFrequenciaGraph::dispatch();
    
        return response()->json($data);
    }
}
