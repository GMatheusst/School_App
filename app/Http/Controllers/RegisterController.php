<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Exibe o formulário de registro
    public function showRegistrationForm()
    {
        return view('auth.register'); // View de registro
    }

    // Lida com o registro de um novo usuário
    public function register(Request $request)
    {
        // Validação dos dados de registro
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:aluno,professor', // Escolha do papel (aluno ou professor)
        ]);

        // Criação do novo usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Define o papel do usuário
        ]);

        // Autentica o usuário automaticamente
        Auth::login($user);

        // Redireciona para o dashboard apropriado
        if ($user->role === 'aluno') {
            return redirect()->route('dashboard.aluno');
        } elseif ($user->role === 'professor') {
            return redirect()->route('dashboard.professor');
        }
    }
}
