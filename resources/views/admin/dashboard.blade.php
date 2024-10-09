@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard Admin</h1>
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('usuarios.index') }}" class="btn btn-primary btn-block">Gerenciar Usuários</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('cursos.index') }}" class="btn btn-primary btn-block">Gerenciar Cursos</a>
        </div>
      
    </div>
</div>
@endsection