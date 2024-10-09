@extends('layouts.app')

@section('content')
    <div class="dashboard-admin">
        <h2>Painel do Administrador</h2>

        <div class="management">
            <h3>Gerenciar Cursos</h3>
            <a href="/dashboard/cursos/criar" class="btn btn-primary">Adicionar Novo Curso</a>
            <ul>
                @foreach($cursos as $curso)
                    <li>{{ $curso->nome }} - <a href="/dashboard/cursos/{{ $curso->id }}/editar">Editar</a></li>
                @endforeach
            </ul>
        </div>

        <div class="user-management">
            <h3>Gerenciar Usuários</h3>
            <a href="/dashboard/usuarios" class="btn btn-primary">Ver Todos os Usuários</a>
        </div>

        <div class="reports">
            <h3>Relatórios</h3>
            <a href="/dashboard/relatorios" class="btn btn-primary">Ver Relatórios Gerais</a>
        </div>
    </div>
@endsection
