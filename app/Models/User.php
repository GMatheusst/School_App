<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// classe User representa um usuário
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    // propriedades do usuário
    protected $guarded = [];
}
