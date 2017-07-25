<?php

namespace App\Http\Middleware;

use Closure;

class homeloginMiddleware
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
        if(!session('master'))
        {
            return redirect('/home/index');
        }
        return $next($request);
    }
}
