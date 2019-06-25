<?php

namespace App\Http\Middleware;

use Closure;

class CheckEarlierLogin
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
    	if ($request->user()->earlier_login)
        	return $next($request);
    	return redirect('/change');
    }
}
