@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Usuário</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $usuario->name) }}"
                required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $usuario->email) }}"
                required>
        </div>

        <div class="mb-3">
            <label for="access_level" class="form-label">Nível de Acesso</label>
            <select class="form-control" id="access_level" name="access_level" required>
                <option value="1" {{ $usuario->access_level == 1 ? 'selected' : '' }}>Aluno</option>
                <option value="2" {{ $usuario->access_level == 2 ? 'selected' : '' }}>Professor</option>
                <option value="3" {{ $usuario->access_level == 3 ? 'selected' : '' }}>Administrador</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha (Deixe em branco se não deseja alterar)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection