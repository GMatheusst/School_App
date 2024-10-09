@extends('layouts.app')

@section('content')
    <div class="dashboard-professor">
        <h2>Painel do Professor</h2>

        <div class="classroom-management">
            <h3>Salas de Aula</h3>
            <ul>
                @foreach($salas as $sala)
                    <li><a href="/salas/{{ $sala->id }}">{{ $sala->nome }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="assignments">
            <h3>Gerenciar Tarefas</h3>
            <a href="/tarefas/criar" class="btn btn-primary">Criar Nova Tarefa</a>
            <ul>
                @foreach($tarefas as $tarefa)
                    <li>{{ $tarefa->titulo }} - <a href="/tarefas/{{ $tarefa->id }}/editar">Editar</a></li>
                @endforeach
            </ul>
        </div>

        <div class="grades">
            <h3>Frequência e Notas</h3>
            <a href="/frequencia" class="btn btn-primary">Ver Frequência Geral</a>
            <a href="/notas" class="btn btn-primary">Ver Notas de Alunos</a>
        </div>
    </div>
@endsection
