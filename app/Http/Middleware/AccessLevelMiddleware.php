<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccessLevelMiddleware
{
    public function handle($request, Closure $next, $access_level)
    {
        if (! Auth::check() || Auth::user()->access_level !== $access_level) {
            return redirect('/'); // Redireciona para a página inicial se o usuário não tiver a função adequada
        }

        return $next($request);
    }
}
