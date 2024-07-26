<?php
namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    // método update retorna true se o usuário atual é um admin e false caso contrário
    public function update(User $currentUser, User $user)
    {
        return $currentUser->access_level === 1; 
    }
}
