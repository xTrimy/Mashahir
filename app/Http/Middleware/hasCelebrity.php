<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class hasCelebrity
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

        $username = User::where('username', $request->username)->get()->first()->id;

        /**
         * Refactor to ORM later
         * @author Mohammad Salah
         */
        if(DB::select('SELECT id FROM agency_celebrity WHERE agency_id = ? AND celebrity_id = ?', [Auth::user()->id, $username])){
            return $next($request);
        }

        dd("not have");

        abort(403);

    }
}
