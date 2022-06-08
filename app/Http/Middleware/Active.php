<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Active
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
        if (auth()->user()->company->status == 'active') {
            return $next($request);
        } else {
            Auth::logout();
            return redirect()->back()->with('error', 'برجاء التواصل مع الإداره لتفعيل الحساب ');
        }
    }
}
