<?php

namespace App\Http\Controllers;

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

    public function edit(User $user)
    {
        $this->authorize('update', $user); // Certifique-se de que apenas admins possam acessar isso

        return view('edit', compact('user')); // Retorna a página de edição
    }

    // metodo update atualiza os dados de um usuário
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user); // Certifique-se de que apenas admins possam acessar isso

        $request->validate([ // Validação dos dados enviados
            'name' => 'required|string|max:255', // Nome obrigatório e com tamanho máximo de 255 caracteres
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id, // Email obrigatório, com tamanho máximo de 255 caracteres e deve ser único
            'access_level' => 'required|integer|in:0,1', // Nível de acesso obrigatório e deve ser 0 ou 1
        ]);

        $user->name = $request->name; // Atualiza o nome do usuário
        $user->email = $request->email; // Atualiza o email do usuário
        $user->access_level = $request->access_level; // Atualiza o nível de acesso do usuário
        $user->save(); // Salva os dados atualizados

        return redirect()->route('dashboard')->with('success', 'Usuário atualizado com sucesso!'); // Redireciona para a página de dashboard com sucesso
    }

    // metodo destroy apaga um usuário
    public function destroy(User $user)
    {
        $user->delete(); // Apaga o usuário

        return redirect('dashboard')->with('success', 'Usuário deletado com sucesso.'); // Redireciona para a página de dashboard com sucesso
    }
}
