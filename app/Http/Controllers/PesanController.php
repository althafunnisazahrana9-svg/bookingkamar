<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::orderBy('nama_pemesan', 'asc')->get();
        $kamar = Kamar::orderBy('nama', 'asc')->get();
        return view('pages.pesan.create', compact('booking', 'kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $booking = Booking::orderBy('nama_pemesan', 'asc')->get();
        $kamar = Kamar::orderBy('nama', 'asc')->get();
        return view('pages.pesan.create', compact('kamar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $validate = $request->validate([
        'nama_pemesan' => 'required',
        'tanggal_checkin' => 'required|date',
        'tanggal_checkout' => 'required|date|after_or_equal:tanggal_checkin',
        'kamar_id' => 'required|exists:kamar,id',
        'email' => 'required|email',
        'telp' => 'required',
        'alamat' => 'required|string',
        'harga' => 'required|numeric',
        'metode_pembayaran' => 'required|string',
    ]);
    // Tambahkan status default = pending
    $validate['status'] = 'pending';

    // Simpan ke database
    Booking::create($request->all());

    // Redirect ke halaman daftar booking
    return redirect()->route('booking.index')
        ->with('success', 'Pesanan berhasil dibuat dengan status pending.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking = Booking::findOrFail($id);
        return view('pages.booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesan = Pesan::findOrFail($id);
        $pesan->delete();
        return redirect()->route('pesan.index')
            ->with('success', 'Data pesan berhasil dihapus');
    }
}