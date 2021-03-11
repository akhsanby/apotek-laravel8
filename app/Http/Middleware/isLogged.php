<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session('username')) {
            return redirect('/login')->with('error', 'You must logged in!');
        }
        return $next($request);
    }
}
