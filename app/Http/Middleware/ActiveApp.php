<?php

namespace App\Http\Middleware;

use Closure;

class ActiveApp
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $app = explode('.', \request()->route()->getName())[0];
        if (active_apps($app)) {

            return $next($request);
        }
        abort(404);

    }
}
