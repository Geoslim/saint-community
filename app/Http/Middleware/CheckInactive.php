<?php

namespace App\Http\Middleware;

use Closure;

class CheckInactive
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
        if(auth()->check() && auth()->user()->status == 'Inactive')
        {
            auth()->logout();
            return redirect()->route('login')->with('error', 'Your Account is INACTIVE!!! Please contact your Administrator');
        }
        return $next($request);
    }
}
