<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 

// classe UserController reponsavel por apagar e editar usuários na página de dashboard
class UserController extends Controller
{   // metodo index retorna a página de dashboard
  use AuthorizesRequests; 
    public function index()
    {
      $users = User::all();
      $currentUser = Auth::user();
    return view('dashboard', compact('users', 'currentUser'));
    }
    // metodo edit retorna a página de edição de um usuário
    
    public function edit(User $user)
    {
        $this->authorize('update', $user); // Certifique-se de que apenas admins possam acessar isso
        return view('edit', compact('user'));
    }

    // metodo update atualiza os dados de um usuário
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'access_level' => 'required|integer|in:0,1',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->access_level = $request->access_level;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Usuário atualizado com sucesso!');
    }

    // metodo destroy apaga um usuário
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('dashboard')->with('success', 'Usuário deletado com sucesso.');
    }
    
    



}
