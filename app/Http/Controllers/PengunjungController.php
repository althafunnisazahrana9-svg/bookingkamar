<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengunjungController extends Controller
{
    // Tampilkan form login
    public function index()
    {
        return view('auth.loginpengunjung');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Login pakai guard 'pengunjung'
        if (Auth::guard('pengunjung')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->route('booking.about')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }
}
