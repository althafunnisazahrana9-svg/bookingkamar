<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *    * Middleware ini dipakai untuk memeriksa role user.
     * Jadi hanya user dengan role tertentu yang boleh mengakses halaman.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // Cek apakah user sudah login
        if (! Auth::check()) {
            // Kalau belum login → arahkan ke halaman login
            return redirect()->route('login');
        }

        // Ambil data user yang sedang login
        $user = Auth::user();

        // Cek apakah user punya role dan role-nya sesuai dengan parameter yang diberikan
        if (! $user->role || // kalau user tidak punya role sama sekali
        (count($roles) > 0 && ! in_array($user->role, $roles))) { // atau role user tidak ada di daftar role yang diizinkan

            // Kalau role tidak sesuai → redirect ke halaman booking.index
            return redirect()->route('booking.index');
        }

        // Kalau role sesuai → lanjutkan ke request berikutnya (akses halaman tujuan)
        return $next($request);
    }
}
