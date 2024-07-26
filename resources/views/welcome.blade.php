<!DOCTYPE html>
<html>
  <!--Pagina inicial-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 40px;
            margin: 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .button {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .header {
            position: absolute;
            top: 0;
            right: 0;
            padding: 20px;
        }
        .header a {
            margin: 0 10px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .header a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="header">
        <a href="{{ url('login') }}">Login</a>
        <a href="{{ url('register') }}">Registrar</a>
    </div>
    <div class="container">
     <h1>Site para demonstração de autenticação com laravel</h1>
     <p>
     <h5> Implementado até então</h5>
      <ul class="list-group">
      <li class="list-group-item">Route</li>
      <li class="list-group-item">Controller</li>
      <li class="list-group-item">Authentication</li>
      <li class="list-group-item">Policies</li>
      <li class="list-group-item">Migrations</li>
      <li class="list-group-item">Gates</li>
      <li class="list-group-item">Middleware</li>
      <li class="list-group-item">Blade</li>
      <li class="list-group-item">Artisan</li>
      <li class="list-group-item">Database</li>
       </ul> 
    </P>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
