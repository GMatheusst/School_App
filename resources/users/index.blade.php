@extends('layouts.app')

@section('content')
    <div class="banner">
        <h1>Bem-vindo, {{ Auth::user()->name }}!</h1>
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
                    <p>Carga Horária: {{ $curso->carga_horaria }} horas</p>
                    <a href="/carrinho/add/{{ $curso->id }}" class="btn btn-primary">Adicionar ao Carrinho</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
