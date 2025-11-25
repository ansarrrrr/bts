<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLogin
{
    public function handle(Request $request, Closure $next)
    {
        // route yang boleh dibuka tanpa login
        $bebas = [
            'login',
            'login/proses-data',
        ];

        // jika sedang mengakses route bebas → lanjutkan
        if (in_array($request->path(), $bebas)) {
            return $next($request);
        }

        // jika belum login → redirect ke login
        if (!$request->session()->has('login')) {
            return redirect('/login');
        }

        // selain itu → boleh dibuka
        return $next($request);
    }
}