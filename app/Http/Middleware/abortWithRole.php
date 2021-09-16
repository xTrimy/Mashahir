<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class abortWithRole
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
        if($request->user()->hasRole('governmental organization') && !$request->user()->hasPermissionTo($roles[0])) return abort(403);

        return $next($request);
    }
}
