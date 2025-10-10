<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengunjungAuth
{
    /**
     * Handle an incoming request.
     *
     * * Middleware ini digunakan untuk memastikan
     * hanya pengunjung yang sudah login yang bisa mengakses halaman tertentu.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user dengan guard "pengunjung" sudah login atau belum
        if (! Auth::guard('pengunjung')->check()) {
            // Jika belum login → arahkan ke halaman login pengunjung
            return redirect()->route('pengunjung.login');
        }

        // Jika sudah login → lanjutkan request ke halaman yang dituju
        return $next($request);
    }
}
