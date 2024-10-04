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
      <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                 <form method="POST" action="{{ url('logout') }}">
        @csrf
        <button type="submit" class="btn btn-primary my-1">Logout</button>
    </form>
            </ul>
          </div>
        </div>
      </nav>
      </header>
     <main>
      <section class="py-5 bg-light">
          <div class="container">
            <div class="row">
                  <div class="col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, odit. Enim quam consequatur obcaecati a dolor voluptas, suscipit eum, excepturi blanditiis esse, quidem magnam. Modi incidunt ea pariatur omnis exercitationem!</div>
                  <div class="col-md-6">
                    <div class="jumbotron bg-white p-5 rounded shadow">
                        <h1 class="display-4 text-primary">Educação de Qualidade</h1>
                        <p class="lead text-secondary">Proporcionando o melhor aprendizado para nossos alunos.</p>
                        <hr class="my-4">
                    
                    </div>
                  </div>
            </div>
          </div>
      </section>
     </main>
    <footer class="bg-dark text-white text-center py-4">
            <p>&copy; 2024 Escola. Todos os direitos reservados.</p>
    </footer>
    <!-- Adicione links para JS aqui, por exemplo jQuery e Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>
