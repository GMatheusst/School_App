@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gerenciar Cursos</h1>
    <a href="{{ route('cursos.create') }}" class="btn btn-success">Adicionar Novo Curso</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Itens em Estoque</th>   
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->name }}</td>
                    <td>{{ $curso->description }}</td>
                    <td>{{ $curso->price }}</td>
                    <td>{{ $curso->in_stock }}</td>
                    <td>
                        <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" class="d-inline">
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