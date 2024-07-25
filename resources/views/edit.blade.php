<!DOCTYPE html>
<html>
  <!--Página de edição de usuário-->
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5">
    <form method="POST" action="{{ url('users/' . $user->id) }}" class="form-group">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required class="form-control">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required class="form-control">
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div>
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>
            <div>
            <label for="access_level" >Nível de Acesso:</label>
            <select id="access_level" name="access_level" class="form-control">
                <option value="0" {{ $user->access_level == 0 ? 'selected' : '' }}>Usuário</option>
                <option value="1" {{ $user->access_level == 1 ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-primary my-2">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
