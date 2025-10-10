<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengunjungController extends Controller
{
    // Tampilkan form login
    public function index()
    {
        // Menampilkan halaman form login khusus pengunjung
        return view('auth.loginpengunjung');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input login (email wajib valid, password min 6 karakter)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Login pakai guard 'pengunjung'
        if (Auth::guard('pengunjung')->attempt($request->only('email', 'password'))) {
            // Regenerasi session agar lebih aman
            $request->session()->regenerate();

            // Arahkan ke halaman about booking dengan pesan sukses
            return redirect()->route('booking.about')->with('success', 'Login berhasil!');
        }

        // Jika gagal login, kembalikan ke form dengan error message
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    // ubah profil pengunjung
    // Ubah profil pengunjung
    public function edit()
    {
        // Ambil data user yang sedang login lewat guard pengunjung
        $user = Auth::guard('pengunjung')->user();

        // Tampilkan form edit profil pengunjung
        return view('pages.pengunjung.edit', compact('user'));
    }

    public function update(Request $request)
    {
        // Ambil user yang sedang login lewat guard pengunjung
        $pengunjung = Auth::guard('pengunjung')->user();

        // Validasi data profil baru
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Update data user (nama & email)
        $pengunjung->update($request->only('name', 'email'));

        // Redirect ke halaman ubah profil dengan pesan sukses
        return redirect()->route('pengunjung.ubah-profil')->with('success', 'Profil berhasil diperbarui.');
    }
}
