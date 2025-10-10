<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Ambil data user yang sedang login
        return view('pages.profil.index', compact('user'));
    }

    public function update(Request $request)
    {
        // Validasi input yang dikirim dari form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id, // email wajib valid & unik, kecuali email user yang sedang login
            'password' => 'confirmed|min:8|nullable',
            // password boleh kosong (nullable)
        ]);

        // Ambil data user yang sedang login
        $user = Auth::user();

        // Update nama dan email sesuai input
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika password diisi, update password dengan enkripsi bcrypt
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        // Simpan perubahan data user
        $user->save();

        // Kembali ke halaman profil dengan pesan sukses
        return redirect()->route('ubah-profil')
            ->with('success', 'Profil berhasil diubah');
    }
}
