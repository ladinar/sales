<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ManagerStaffMiddleware
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
        if ( Auth::check() && Auth::User()->id_position == 'MANAGER' )
        {
            return $next($request);
        }
        else if ( Auth::check() && Auth::User()->id_position == 'STAFF' )
        {
            return $next($request);
        }
        else if ( Auth::check() && Auth::User()->id_position == 'DIRECTOR' )
        {
            return $next($request);
        }

        return redirect('/');
    }
}
