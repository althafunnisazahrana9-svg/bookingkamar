<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = Kamar::where('status', 'kosong')->orderBy('nama', 'ASC')->get();

        $booking = Booking::all();

        return view('pages.form.index', compact('kamar', 'booking'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_pemesan' => 'required|string|max:255', // nama wajib diisi
            'kamar_id' => 'required|exists:kamar,id',  // kamar harus ada di tabel kamar
            'jumlah_tamu' => 'required|integer', // jumlah tamu harus angka
            'email' => 'required|email', // email harus valid
            'telp' => 'required|string|max:20', // nomor telepon wajib
            'nik' => 'required|string|max:20', // NIK wajib
            'alamat' => 'required|string', // alamat wajib
            'tanggal_checkin' => 'required|date', // tanggal check-in wajib
            'tanggal_checkout' => 'required|date|after_or_equal:tanggal_checkin', // checkout minimal lebih besar dari check-in
            'harga' => 'required', // harga wajib
            'metode_pembayaran' => 'required|in:transfer,cash', // harga wajib
        ]);

        // Simpan data booking baru ke database
        $booking = Booking::create([
            'nama_pemesan' => $request->nama_pemesan,
            'kamar_id' => $request->kamar_id,
            'jumlah_tamu' => $request->jumlah_tamu,
            'email' => $request->email,
            'telp' => $request->telp,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'tanggal_checkin' => $request->tanggal_checkin,
            'tanggal_checkout' => $request->tanggal_checkout,
            'harga' => str_replace(',', '', $request->harga),  // hilangkan koma pada harga
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_booking' => 'pending',  // hilangkan koma pada harga
        ]);

        $kamar = Kamar::find($request->kamar_id);
        if ($kamar) {
            $kamar->status = 'terisi'; // 🔹 tandai kamar sudah terisi
            $kamar->save();
        }

        return redirect()->route('booking.index')
            ->with('success', 'Booking berhasil dibuat dan kamar otomatis terisi.');
    }
}
