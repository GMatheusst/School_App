@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $curso->nome }}</h1>
    <p>Descrição: {{ $curso->descricao }}</p>
    <p>Preço: R$ {{ number_format($curso->preco, 2, ',', '.') }}</p>
    <p>Carga Horária: {{ $curso->carga_horaria }} horas</p>
    <p>Tempo de Conclusão: {{ $curso->tempo_conclusao }} dias</p>

    <a href="{{ route('aluno.cursos') }}" class="btn btn-secondary">Voltar para Meus Cursos</a>
</div>
@endsection
