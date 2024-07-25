<!DOCTYPE html>
<html>
  <!--Página de dashboard-->
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Dashboard</title>

</head>
<body>
    <h1>Bem-vindo ao Dashboard!</h1>
   
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
    <table class="table border-dark table-hover" > 
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Perfil</th>
                <th></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <?php if ($currentUser->access_level === 1){
                      echo "<td>Adiministrador<td>";
                    }
                    else {
                      echo "<td>Usuário <td>";
                    }
                        ?>
                    <td>
                        @if ($currentUser->access_level === 1)
                            <a href="{{ url('users/' . $user->id . '/edit')}}" class="btn btn-success me-4">Editar</a>
                            <form action="{{  url('users/' . $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Apagar</button>
                            </form>
                        @else
                            <span>Sem permissão</span>
                        @endif
                        </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-2">
   
     <form method="POST" action="{{ url('logout') }}">
        @csrf
        <button type="submit" class="btn btn-primary my-2 ms-2">Logout</button>
    </form>
    </div>   
</div>
    </div>
    </div>
      </div>  
        </div>    
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>
