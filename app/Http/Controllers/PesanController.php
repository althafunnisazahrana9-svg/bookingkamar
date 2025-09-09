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
        $kamar = Kamar::orderBy('nama', 'asc')->get();
        return view('pages.pesan.create', compact('kamar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required|string',
        'tanggal_checkin' => 'required|date',
        'tanggal_checkout' => 'required|date',
        'kamar_id' => 'required|exists:kamar,id',
        // Jangan validasi status dari input user
    ]);

    $validate['status'] = 'pending'; // Paksa status pending

    Booking::create($validate);

    //Redirect ke halaman booking.index
    return redirect()->route('booking.index')->with('success', 'Pesanan berhasil dibuat dan status pending.');
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