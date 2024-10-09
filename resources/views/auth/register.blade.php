<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 400px;
            margin-top: 50px;
        }
        header h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        footer p {
            text-align: center;
            margin-top: 30px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Cadastre-se</h1>
        </header>

        <!-- Tratamento de erro -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('register') }}" method="POST" class="p-4 bg-white rounded shadow">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirme a Senha:</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrar</button>
        </form>

        <p class="mt-3 text-center">Já possui uma conta? <a href="{{ route('login') }}">Faça login</a></p>
    </div>

    <footer>
        <p>&copy; 2024 Sua Escola</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
