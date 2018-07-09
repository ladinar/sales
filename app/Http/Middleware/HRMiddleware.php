<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HRMiddleware
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
        if ( Auth::check() && Auth::User()->id_position == 'HR' )
        {
            return $next($request);
        } 
        elseif ( Auth::User()->id_position == 'DIRECTOR' ) 
        {
            return $next($request);  
        }

        return redirect('/');

    }
}
