@extends('layouts.app')

@section('content')
    <div class="banner">
        <h1>Bem-vindo, Professor {{ Auth::user()->name }}!</h1>
        <p>Veja seus cursos e acompanhe seus alunos.</p>
    </div>

    <div class="courses">
        <h2>Meus Cursos</h2>
        <div class="course-list">
            @foreach($meusCursos as $curso)
                <div class="course-card">
                    <img src="{{ $curso->imagem }}" alt="{{ $curso->nome }}">
                    <h3>{{ $curso->nome }}</h3>
                    <p>{{ $curso->descricao }}</p>
                    <p>Carga Horária: {{ $curso->carga_horaria }} horas</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
