@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
<div class="container mt-4">
    <!-- Banner de Cursos em Destaque -->
    <div class="banner mb-5">
        <img src="{{ asset('images/banner-cursos.jpg') }}" class="img-fluid" alt="Cursos em Destaque">
    </div>

    <!-- Título para Cursos em Destaque -->
    <h2 class="text-center mb-4">Cursos em Destaque</h2>

    <!-- Grid de Cursos em Destaque -->
    <div class="row">
        @foreach($cursos as $curso)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $curso->imagem) }}" class="card-img-top" alt="{{ $curso->nome }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $curso->nome }}</h5>
                        <p class="card-text">{{ Str::limit($curso->descricao, 100) }}</p>
                        <p><strong>Tipo:</strong> {{ $curso->tipo }}</p>
                        <p><strong>Carga Horária:</strong> {{ $curso->carga_horaria }} horas</p>
                        <p><strong>Tempo de Conclusão:</strong> {{ $curso->tempo_conclusao }} dias</p>
                        <p><strong>Preço:</strong> R$ {{ number_format($curso->preco, 2, ',', '.') }}</p>
                        
                        @if(Auth::check() && Auth::user()->access_level === 1)
                            <a href="{{ route('carrinho.adicionar', $curso->id) }}" class="btn btn-primary mt-auto">Adicionar ao Carrinho</a>
                        @else
                            <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-outline-secondary mt-auto">Ver Detalhes</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
