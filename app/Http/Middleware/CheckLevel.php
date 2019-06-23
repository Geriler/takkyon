<?php

namespace App\Http\Middleware;

use App\Progress;
use Closure;

class CheckLevel
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
    	$user_id = $request->user()->id;
    	$progress = Progress::all()->where('user_id', $user_id)[$user_id - 1];
    	switch ($request->getRequestUri()) {
			case '/map/1':
				return $next($request);
			case '/map/2':
				if ($progress->progress1 >= 7) {
					return $next($request);
				}
				return redirect('/map');
			case '/map/3':
				if ($progress->progress2 >= 7) {
					return $next($request);
				}
				return redirect('/map');
			case '/map/4':
				if ($progress->progress4 >= 7) {
					return $next($request);
				}
				return redirect('/map');
			case '/map/5':
				if ($progress->progress5 >= 7) {
					return $next($request);
				}
				return redirect('/map');
		}
		return redirect('/');
    }
}
