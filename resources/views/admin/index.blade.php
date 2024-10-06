@extends('layouts.app')

@section('content')
    <div class="banner">
        <h1>Cursos em Destaque</h1>
        <!-- Banner com imagem ou carrossel -->
    </div>
    <div class="courses">
        @foreach ($courses as $course)
            <div class="card">
                <img src="{{ $course->image }}" alt="{{ $course->name }}">
                <h2>{{ $course->name }}</h2>
                <p>Preço: {{ $course->price }}</p>
                <p>{{ $course->description }}</p>
                <p>Carga Horária: {{ $course->duration }} horas</p>
            </div>
        @endforeach
    </div>
    <div class="about">
        <h2>Sobre Nós</h2>
        <p>Informações sobre a escola e colaboradores.</p>
    </div>
    <div class="menu">
        <a href="{{ route('logout') }}">Sair</a>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    </div>
@endsection
