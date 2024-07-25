<!DOCTYPE html>
<html>
  <!--Página de dashboard-->
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Dashboard</title>

</head>
<body>
    <h1 class="bg-secondary text-white mb-5 h2 shadow">
      <button class="btn btn-primary my-1 " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
  <i class="bi bi-list"></i>
</button>
<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">MENU </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      <ul class="nav nav-pills flex-column">
    
        <li class="nav-item">
          <a class="nav-link link-dark" href="#">Tabela a</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link link-dark" href="#">Tabela b</a>
        </li> 
          <li class="nav-item">
          <a class="nav-link link-dark" href="#">Tabela c</a>
        </li>
     
    </div>
  </div>
</div>Dashboard</h1>
   
   
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
                    <?php if ($user->access_level === 1){
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
        <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
        @if (session('success'))

        <div class="alert alert-success text-center" role="alert">
            {{ session('success') }}
        </div>
    @endif
    </div>   
</div>
    </div>
      </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>
