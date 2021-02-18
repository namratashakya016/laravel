<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeRestrictedMiddleware
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
        // print_r($request);
    	if ($request->age && $request->age < 18) {
    		return redirect('noaccess');
    		
    	}
        return $next($request);
    }
}
