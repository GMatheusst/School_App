<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
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
        .error {
            color: red;
        }
    </style>
</head>
<body>
    @if ($errors->any())
        <div class="error">
                @foreach ($errors->all() as $error)
                <div class="container mt-5">
                  <div class="row justify-content-center">
                    <div class="col-8">
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                </div>
              </div> 
            </div>
                @endforeach
        </div>
    @endif
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
    <form method="POST" action="{{ url('login') }}" class="form-control my-5">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="row justify-content-center">
          <div class="col-3">
            <button type="submit" class="btn btn-primary mt-2 ms-1">Login</button>
        
          </div>
        </div>
    </form>
        </div>
    </div>  
        </div>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-2">
    <a href="{{ url('/') }}" class="btn btn-primary mt-2 ms-1">Voltar ao Inicio</a>
      </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
