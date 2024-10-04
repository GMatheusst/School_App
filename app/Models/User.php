<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// classe User representa um usuário
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // propriedades do usuário
    protected $guarded = [];
}
