@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Curso</h1>

    <form action="{{ route('cursos.update', $curso->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome do Curso</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $curso->name) }}"
                required>
            @error('nome')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao"
                required>{{ old('descricao', $curso->description) }}</textarea>
            @error('descricao')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="duracao">Duração (em horas)</label>
            <input type="number" class="form-control" id="duracao" name="duracao"
                value="{{ old('duracao', $curso->workload) }}" required>
            @error('duracao')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" value="{{ old('preco', $curso->price) }}"
                required>
            @error('preco')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="in_stock" class="form-label">Itens em Estoque</label>
            <input type="number" class="form-control" id="in_stock" name="in_stock"
                value="{{ old('in_stock', $curso->in_stock) }}" min="0" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
@endsection