@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Frequência</h1>
    <p>Aqui você poderá visualizar sua frequência nos cursos.</p>
    
    <div class="text-center">
        <h2>Gráfico de Frequência</h2>
        <img src="{{ asset('images/frequencia_cursos.png') }}" alt="Gráfico de Frequência" class="img-fluid">
    </div>
    
    <!-- Se você quiser exibir mais gráficos ou informações, você pode adicionar aqui -->
</div>
@endsection
