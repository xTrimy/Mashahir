<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class hasNotRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        foreach($roles as $role)
        {
            if($request->user()->hasRole($role)){
                return abort(403);
            }
        }

        return $next($request);
    }
}
