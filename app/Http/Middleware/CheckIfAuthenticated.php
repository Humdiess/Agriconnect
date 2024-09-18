<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAuthenticated
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
        // Cek apakah user sudah login
        if (!Auth::check()) {
            // Jika belum login, arahkan ke halaman auth.blade.php
            return redirect()->route('auth.reqAuth');
        }

        // Jika sudah login, lanjutkan request
        return $next($request);
    }
}
