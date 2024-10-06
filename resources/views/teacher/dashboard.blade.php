@extends('layouts.app')

@section('content')
    <h1>Área do Professor</h1>
    <h2>Salas de Aula</h2>
    @foreach ($teacher->classes as $class)
        <div>
            <h3>{{ $class->name }}</h3>
            <p>Carga Horária: {{ $class->duration }} horas</p>
            <p>Frequência / Nota Geral: {{ $class->average_grade }}</p>
            <p>Frequência / Nota do Aluno: {{ $class->student_grade }}</p>
            <a href="{{ route('tasks.create', $class->id) }}">Criar Tarefa</a>
        </div>
    @endforeach
@endsection
