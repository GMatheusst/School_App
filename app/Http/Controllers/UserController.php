<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// classe UserController reponsavel por apagar e editar usuários na página de dashboard
class UserController extends Controller
{   // metodo index retorna a página de dashboard
    public function index()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }
    // metodo edit retorna a página de edição de um usuário
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }
    // metodo update atualiza os dados de um usuário
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect('dashboard')->with('success', 'Usuário atualizado com sucesso.');
    }
    // metodo destroy apaga um usuário
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('dashboard')->with('success', 'Usuário deletado com sucesso.');
    }
}
