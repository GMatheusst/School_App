<!DOCTYPE html>
<html>
<head>
    <title>Editar Nível de Acesso</title>
</head>
<body>
    <h1>Editar Nível de Acesso para {{ $user->name }}</h1>
    <form method="POST" action="{{ route('users.updateAccess', $user) }}">
        @csrf
        <div>
            <label for="access_level">Nível de Acesso:</label>
            <select id="access_level" name="access_level">
                <option value="0" {{ $user->access_level == 0 ? 'selected' : '' }}>Usuário</option>
                <option value="1" {{ $user->access_level == 1 ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        <div>
            <button type="submit">Atualizar</button>
        </div>
    </form>
    <a href="{{ route('dashboard') }}">Voltar ao Dashboard</a>
</body>
</html>
