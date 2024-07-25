<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// classe AuthController responsável por gerenciar o login e registro
class AuthController extends Controller
{   // metodo showLoginForm retorna a página de login
    public function showLoginForm()
    {
        return view('auth.login');
    }
    // metodo login verifica se o usuário está logado
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
    ])->withInput($request->only('email'));
}

    // metodo logout faz logout do usuário
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    // metodo showRegisterForm retorna a página de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    // metodo register cria um novo usuário
  public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->intended('dashboard');
}

}
