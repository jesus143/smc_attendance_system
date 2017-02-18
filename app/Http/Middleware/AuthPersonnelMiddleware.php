<?php

namespace App\Http\Middleware;

use Closure;

class AuthPersonnelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(empty(session('authPersonnel'))) {
            return redirect( url('home/index.php') );
        }
        return $next($request);
    }
}
