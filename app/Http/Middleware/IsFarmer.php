<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsFarmer
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
        if (auth()->check() && auth()->user()->is_farmer) {
            return $next($request);
        } else {
            abort(403);
        }

        // Redirect jika user bukan petani
        // return redirect('/')->with('error', 'You are not allowed to perform this action.');
    }
}
