<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Exibe o formulário de login
    public function showLoginForm()
    {
        return view('auth.login'); // View de login
    }

    // Lida com a tentativa de login
    public function login(StoreLoginRequest $request)
    {
        // Validação dos dados de login
       
        // Tenta autenticar o usuário
        if (Auth::attempt($request->only(   'email', 'password'))) {
            // Redireciona o usuário para a rota correta de acordo com o seu papel
            $role = Auth::user()->role;

            switch ($role) {
                case 'aluno':
                    return redirect()->route('dashboard.aluno');
                case 'professor':
                    return redirect()->route('dashboard.professor');
                case 'admin':
                    return redirect()->route('dashboard.admin');
                case 'admin-master':
                    return redirect()->route('dashboard.admin-master');
                default:
                    return redirect('/');
            }
        }

        // Se a autenticação falhar, lança um erro
        throw ValidationException::withMessages([
            'email' => ['As credenciais fornecidas estão incorretas.'],
        ]);
    }

    // Lida com o logout
    public function logout()
    {
        Auth::logout(); // Desloga o usuário
        return redirect('/'); // Redireciona para a página inicial
    }
}
