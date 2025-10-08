<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // import Auth

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data admin dari tabel users urutkan berdasarkan nama (ASC)
        $admin = User::orderBy('name', 'ASC')->get();

        // Kirim data ke view pages/admin/index.blade.php
        return view('pages.admin.index', compact('admin'));
    }

    public function bookingIndex()
    {
        // Ambil semua data booking beserta relasi kamar, urut terbaru
        $booking = Booking::with('kamar')->latest()->get();

        // Kirim data ke view booking/index.blade.php
        return view('pages.booking.index', compact('booking'));
    }

    public function logout(Request $request)
    {
        // Logout semua guard
        Auth::guard('web')->logout();          // logout admin
        Auth::guard('pengunjung')->logout();   // logout pengunjung

        // Hapus session & token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Kembali ke halaman utama dengan pesan sukses
        return redirect('/')->with('success', 'Anda berhasil logout!');
    }

    public function updateStatus(Request $request)
    {
        // Validasi input status booking
        $request->validate([
            'booking_id' => 'required|exists:booking,id',
            'status' => 'required|in:pending,confirmed,canceled',
        ]);

        // Cari booking sesuai ID dan ubah statusnya
        $booking = Booking::findOrFail($request->booking_id);
        $booking->status = $request->status;
        $booking->save();

        return redirect()->back()->with('success', 'Status booking berhasil diperbarui.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Arahkan ke halaman create admin
        return view('pages.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed', // password minimal 8 karakter dan konfirmasi sama
        ]);

        // Simpan admin baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Tampilkan detail admin berdasarkan ID.
     */
    public function show(string $id)
    {
        $admin = User::find($id);

        return view('pages.admin.show', compact('admin'));
    }

    /**
     * Form edit admin berdasarkan ID.
     */
    public function edit(string $id)
    {
        $admin = User::find($id);

        return view('pages.admin.edit', compact('admin'));
    }

    /**
     * Update data admin yang sudah ada.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Cari admin yang mau diupdate
        $admin = User::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;

        // Jika password diisi, update password juga
        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }

        $admin->save();

        return redirect()->route('admin.index');
    }

    /**
     * Hapus admin berdasarkan ID.
     */
    public function destroy(string $id)
    {
        // Cari admin lalu hapus
        $admin = User::find($id);
        $admin->delete();

        return redirect()->route('admin.index');
    }
}
