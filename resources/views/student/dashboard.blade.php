@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard do Aluno</h1>
    <p>Bem-vindo à sua área de aluno!</p>
    <a href="{{ route('aluno.cursos') }}" class="btn btn-primary">Ver Meus Cursos</a>
    <!-- Aqui você pode adicionar mais informações relevantes para o aluno -->
</div>
@endsection
