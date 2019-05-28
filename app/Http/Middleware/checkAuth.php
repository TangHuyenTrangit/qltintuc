<?php

namespace App\Http\Middleware;

use Closure;

class checkAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id_admin)
    {
         if (! $request->user()->is_admin == 1) {
            return redirect()->route('home_index');
        }

        return $next($request);
    }
}