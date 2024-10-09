<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateFrequenciaGraph implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Caminho para o script Python
        $scriptPath = base_path('School_app/python_scripts/frequency.py'); // Caminho do seu script

        // Executa o script Python
        $command = "python3 {$scriptPath}"; // Use 'python' se for o caso
        exec($command, $output, $returnVar);

        // Verifica se a execução foi bem-sucedida
        if ($returnVar !== 0) {
            // Você pode registrar o erro ou lançar uma exceção
            \Log::error('Erro ao executar o script Python: ' . implode("\n", $output));
        }
    }
}
