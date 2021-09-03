<?php

namespace App\Http\Middleware;

use App\Models\AgencyCelebrity;
use App\Models\ServicePurchase;
use Closure;
use Illuminate\Http\Request;

class hasService
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

        $service = ServicePurchase::find($request->id)->with('service')->first();

        if(empty($service))
        {
            abort(404);
        }

        if($service->service->user_id == $request->user()->id || AgencyCelebrity::where(["agency_id"=> $request->user()->id, 'celebrity_id'=>$service->service->user_id]))
        {
            return $next($request);
        }

        abort(403);

    }
}
