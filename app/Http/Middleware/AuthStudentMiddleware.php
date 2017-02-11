<?php

namespace App\Http\Middleware;

use Closure;

class AuthStudentMiddleware
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
        // print "this is the url " . PRINT url('home/index.php');
        if(empty(session('authStudent'))) {

            return redirect( url('home/index.php') );
        } 
        return $next($request);  
    }
}
