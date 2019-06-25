<?php

namespace App\Http\Middleware;

use Closure;

class userAuth
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
        if ($request->something >= 'something'){
            return redirect('home');
        }
        return $next($request);
    }
}
