<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class APIAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(is_null(auth()->user()))
            return response()->json(['erro' => 'Acesso não autorizado'], 401);
        
        return $next($request);
    }
}
