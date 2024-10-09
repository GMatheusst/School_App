<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// classe AuthController responsável por gerenciar o login e registro
class AuthController extends Controller
{
    // metodo showLoginForm retorna a página de login
    public function showLoginForm()
    {
        return view('auth.login'); // Retorna a página de login
    }

    // metodo login verifica se o usuário está logado
    public function login(Request $request)
    {
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Se a autenticação for bem-sucedida
            $user = Auth::user();

            // Redirecionar para a página inicial, mas com base no nível de acesso
            return redirect('/')->with('access_level', $user->access_level);
            
        }

        return back()->withErrors([ // Retorna erros se as credenciais não forem válidas
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.', // Mensagem de erro
        ])->withInput($request->only('email')); // Retorna as credenciais enviadas
    }

    // metodo logout faz logout do usuário
    public function logout()
    {
        Auth::logout(); // Faz logout do usuário

        return redirect('/'); // Redireciona para a página inicial
    }

    // metodo showRegisterForm retorna a página de registro
    public function showRegisterForm()
    {
        return view('auth.register'); // Retorna a página de registro
    }

    // metodo register cria um novo usuário
    public function register(StoreUserRequest $request)
    {

        User::create([  // Cria um novo usuário
            'name' => $request->name, // Nome do usuário
            'email' => $request->email, // Email do usuário
            'password' => Hash::make($request->password), // Senha do usuário
            'access_level' => 1, // Nível de acesso do usuário
        ]);

        return redirect()->intended('dashboard'); // Redireciona para a página de dashboard
    }
}
