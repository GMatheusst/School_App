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
        <?php
        ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $curso->imagem) }}" class="card-img-top" alt="{{ $curso->nome }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $curso->name }}</h5>
                        <p class="card-text">{{ Str::limit($curso->description, 100) }}</p>
                        <p><strong>Carga Horária:</strong> {{ $curso->workload }} horas</p>
                        <p><strong>Preço:</strong> R$ {{ number_format($curso->price, 2, ',', '.') }}</p>
                        
                        @if(Auth::check() && Auth::user()->access_level > 0 )
                     
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
