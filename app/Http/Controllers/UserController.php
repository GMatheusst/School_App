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
        
        $currentUser = Auth::user(); // Obtém o usuário atual
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios', 'currentUser')); // Retorna a página de dashboard
    }

    // metodo edit retorna a página de edição de um usuário
    public function indexHome()
    {
        $users = User::all(); // Obtém todos os usuários
        $currentUser = Auth::user(); // Obtém o usuário atual

        return view('home', compact('users', 'currentUser')); // Retorna a página de dashboard
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'access_level' => 'required|integer',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']); // Criptografa a senha

        User::create($validatedData);

        return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso!');
    }
    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }
    // metodo update atualiza os dados de um usuário
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $this->authorize('update', $user); // Certifique-se de que apenas admins possam acessar isso


        $user->update($request->validated());

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    // metodo destroy apaga um usuário
    public function destroy(User $id)
    {
        $user = User::findOrFail($id);
        
        $user->delete(); // Apaga o usuário

        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso!');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
