@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Meus Cursos</h1>

    @if($cursos->isEmpty())
        <p>Você ainda não está matriculado em nenhum curso.</p>
    @else
        <ul class="list-group">
            @foreach($cursos as $curso)
                <li class="list-group-item">
                    <h3>{{ $curso->nome }}</h3>
                    <p>Descrição: {{ $curso->descricao }}</p>
                    <p>Carga Horária: {{ $curso->carga_horaria }} horas</p>
                    <a href="{{ route('aluno.curso.detalhe', $curso->id) }}" class="btn btn-info">Ver Detalhes</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
