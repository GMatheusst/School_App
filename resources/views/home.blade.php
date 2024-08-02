<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola - Página Inicial</title>
    <!-- Adicione links para CSS aqui, por exemplo Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <style>
    .log{
        position: absolute;
            top: 0;
            right: 0;
            padding: 20px;
    }
   </style>
</head>
<body>
    <header class="bg-dark text-white text-center py-2">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand text-primary fs-2" href="{{ url('home') }}">Escola</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="{{ url('home') }}">Home</a>
                        </li>
                           <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="{{ url('paginas/alunos') }}">Alunos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="{{ url('paginas/cursos') }}">Cursos</a>
                        </li>
                           <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="{{ url('paginas/projetos') }}">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="{{ url('paginas/contato') }}">Contato</a>
                        </li>
                         <li class="nav-item ms-5">
                           
                            <form method="POST" action="{{ url('logout') }}">
        @csrf
    
        <button type="submit" class="btn btn-dark nav-link text-light  ms-2 log"><span class="fs-4">Logout</span></button>
    </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="py-5 bg-light">
        <div class="container">
            <div class="jumbotron bg-white p-5 rounded shadow">
                <h1 class="display-4 text-primary">Educação de Qualidade</h1>
                <p class="lead text-secondary">Proporcionando o melhor aprendizado para nossos alunos.</p>
                <hr class="my-4">
             <!-- <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="#" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="#" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="#" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-4">
            <p>&copy; 2024 Escola. Todos os direitos reservados.</p>
    </footer>
    <!-- Adicione links para JS aqui, por exemplo jQuery e Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>
