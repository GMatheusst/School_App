@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <h2>Relatório Geral</h2>
    <!-- Relatório geral com gráficos e informações -->
    <h2>Gerenciar Cursos</h2>
    <a href="{{ route('courses.index') }}">Ver Cursos</a>
    <h2>Gerenciar Banners</h2>
    <a href="{{ route('banners.index') }}">Ver Banners</a>
@endsection
