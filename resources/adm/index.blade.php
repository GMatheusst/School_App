@extends('layouts.app')

@section('content')
    <div class="banner">
        <h1>Bem-vindo, Administrador {{ Auth::user()->name }}!</h1>
        <p>Gerencie cursos e usuários no sistema.</p>
    </div>

    <div class="courses">
        <h2>Todos os Cursos</h2>
        <div class="course-list">
            @foreach($cursos as $curso)
                <div class="course-card">
                    <img src="{{ $curso->imagem }}" alt="{{ $curso->nome }}">
                    <h3>{{ $curso->nome }}</h3>
                    <p>{{ $curso->descricao }}</p>
                    <p>Preço: R$ {{ $curso->preco }}</p>
                    <a href="/dashboard/cursos/{{ $curso->id }}/editar" class="btn btn-primary">Editar Curso</a>
                    <form action="/dashboard/cursos/{{ $curso->id }}/deletar" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Remover Curso</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
