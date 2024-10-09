<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function isAdmin()
    {
        return $this->access_level === 3; // 3 é o nível de acesso para administradores
    }

    // Método para verificar se o usuário é um professor
    public function isTeacher()
    {
        return $this->access_level === 2; // 2 é o nível de acesso para professores
    }

    // Método para verificar se o usuário é um aluno
    public function isAluno()
    {
        return $this->access_level === 1; // 1 é o nível de acesso para alunos
    }
}
