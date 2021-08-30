<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class roleTabAccess
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
        $user = User::where('username', $request->username)->first();

        foreach($roles as $role)
        {
            if($user->hasRole($role)) return $next($request);
        }

        abort(404);
    }
}
