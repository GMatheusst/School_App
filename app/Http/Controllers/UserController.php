<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// classe UserController reponsavel por apagar e editar usuários na página de dashboard
class UserController extends Controller
{
    // metodo index retorna a página de dashboard
    use AuthorizesRequests;

    public function index()
    {
        $users = User::all(); // Obtém todos os usuários
        $currentUser = Auth::user(); // Obtém o usuário atual

        return view('dashboard', compact('users', 'currentUser')); // Retorna a página de dashboard
    }

    // metodo edit retorna a página de edição de um usuário
    public function indexHome()
    {
        $users = User::all(); // Obtém todos os usuários
        $currentUser = Auth::user(); // Obtém o usuário atual

        return view('home', compact('users', 'currentUser')); // Retorna a página de dashboard
    }


    // metodo update atualiza os dados de um usuário
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update', $user); // Certifique-se de que apenas admins possam acessar isso

        $user->update($request->validated());

        return redirect()->route('dashboard')->with('success', 'Usuário atualizado com sucesso!'); // Redireciona para a página de dashboard com sucesso
    }

    // metodo destroy apaga um usuário
    public function destroy(User $user)
    {
        $user->delete(); // Apaga o usuário

        return redirect('dashboard')->with('success', 'Usuário deletado com sucesso.'); // Redireciona para a página de dashboard com sucesso
    }
}
