<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAccessLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $level
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            return redirect()->route('login'); // Redireciona para login se não autenticado
        }

        // Verifica se o access_level do usuário é menor que o exigido
        if (Auth::user()->access_level < $level) {
            abort(403, 'Você não tem permissão para acessar esta página.');
        }

        return $next($request);
    }
}
