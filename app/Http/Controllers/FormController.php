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
        // Ambil hanya kamar yang statusnya masih "kosong"
        // supaya tidak bisa dibooking kalau sudah terisi
        $kamar = Kamar::where('status', 'kosong')->orderBy('nama', 'ASC')->get();
        // Ambil semua data booking untuk ditampilkan (opsional)
        $booking = Booking::all();

        return view('pages.form.index', compact('kamar', 'booking'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'kamar_id' => 'required|exists:kamar,id',
            'jumlah_tamu' => 'required|integer',
            'email' => 'required|email',
            'telp' => 'required|string|max:20',
            'nik' => 'required|string|max:20',
            'alamat' => 'required|string',
            'tanggal_checkin' => 'required|date',
            'tanggal_checkout' => 'required|date|after_or_equal:tanggal_checkin',
            'harga' => 'required',
            'metode_pembayaran' => 'required|in:transfer,cash',
        ]);

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
            'harga' => str_replace(',', '', $request->harga),
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_booking' => 'pending',
        ]);

        return redirect()->route('booking.index')
            ->with('success', 'Booking berhasil dibuat.');

        // ubah status kamar jadi terisi
        $kamar = Kamar::find($request->kamar_id);
        if ($kamar) {
            $kamar->status = 'terisi';
            $kamar->save();
        }
    }
}
