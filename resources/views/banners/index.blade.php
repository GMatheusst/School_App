@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gerenciar Banners</h1>
    <a href="{{ route('banners.create') }}" class="btn btn-success">Adicionar Novo Banner</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Título</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td><img src="{{ asset('storage/' . $banner->image) }}" alt="banner" width="100"></td>
                    <td>{{ $banner->title }}</td>
                    <td>
                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection