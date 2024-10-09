<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->access_level == 3) {
            return $next($request);
        }

        abort(403, 'Acesso negado. Apenas administradores têm acesso a esta área.');
    }
}
