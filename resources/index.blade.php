@extends('layouts.app')

@section('content')
    <div class="banner">
        <h1>Bem-vindo à Escola de Cursos</h1>
        <p>Explore nossos cursos em destaque!</p>
    </div>

    <div class="courses">
        <h2>Cursos em Destaque</h2>
        <div class="course-list">
            @foreach($cursos as $curso)
                <div class="course-card">
                    <img src="{{ $curso->imagem }}" alt="{{ $curso->nome }}">
                    <h3>{{ $curso->nome }}</h3>
                    <p>{{ $curso->descricao }}</p>
                    <p>Preço: R$ {{ $curso->preco }}</p>
                    <p>Tipo: {{ $curso->tipo }}</p>
                    <p>Carga Horária: {{ $curso->carga_horaria }} horas</p>
                    <p>Tempo de Conclusão: {{ $curso->tempo_conclusao }} semanas</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
