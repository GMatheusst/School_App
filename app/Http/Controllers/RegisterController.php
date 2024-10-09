<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisterRequest;
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
    public function register(StoreRegisterRequest $request)
    {

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
