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

    // ubah profil pengunjung
    // Ubah profil pengunjung
    public function edit()
    {
        $user = Auth::guard('pengunjung')->user();

        return view('pages.pengunjung.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $pengunjung = Auth::guard('pengunjung')->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $pengunjung->update($request->only('name', 'email'));

        return redirect()->route('pengunjung.ubah-profil')->with('success', 'Profil berhasil diperbarui.');
    }
}
