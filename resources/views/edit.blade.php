<!DOCTYPE html>
<html>
  <!--Página de edição de usuário-->
<head>
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('users/' . $user->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
            <div>
            <label for="access_level">Nível de Acesso:</label>
            <select id="access_level" name="access_level">
                <option value="0" {{ $user->access_level == 0 ? 'selected' : '' }}>Usuário</option>
                <option value="1" {{ $user->access_level == 1 ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>
</body>
</html>
