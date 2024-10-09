<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsProfessor
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->access_level == 2) {
            return $next($request);
        }

        abort(403, 'Acesso negado. Apenas professores têm acesso a esta área.');
    }
}
