@extends('layouts.app')

@section('content')
    <h1>Área do Aluno</h1>
    <h2>Cursos</h2>
    @foreach ($student->courses as $course)
        <div>
            <h3>{{ $course->name }}</h3>
            <p>Carga Horária: {{ $course->duration }} horas</p>
            <p>Frequência / Nota: {{ $course->pivot->grade }}</p>
            <p>Tarefas: {{ $course->tasks_count }}</p>
        </div>
    @endforeach
@endsection
