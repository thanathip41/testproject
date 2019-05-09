<?php

namespace App\Http\Middleware;

use Closure;

class IsMaintenance
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
       if(auth()->check()&& $request->user()->roleCheck==1 &&$request->user()->activated==1){
        return $next($request);
        }abort(403);  
    }
    
}
