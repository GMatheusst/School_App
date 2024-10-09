<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAluno
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->access_level == 1) {
            return $next($request);
        }

        abort(403, 'Acesso negado. Apenas alunos têm acesso a esta área.');
    }
}
