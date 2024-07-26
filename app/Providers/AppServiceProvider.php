<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{   // propriedades do service provider
    protected $policies = [
        User::class => UserPolicy::class,
    ];
    // método boot registra o policie de acesso aos usuários
    public function boot()
    {
        $this->registerPolicies(); // Registra as policies
    }
}
