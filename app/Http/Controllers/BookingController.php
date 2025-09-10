<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$booking = Booking::with('kamar')->orderBy('created_at', 'desc')->get();

        $booking = Booking::with('kamar')
            ->when(request('tanggal'), function($query, $tanggal) {
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.booking.index', compact('booking'));
    }

    public function confirm($id)
{
    $booking = Booking::findOrFail($id);
    $booking->status = 'confirmed';
    $booking->save();

    // Kirim notif (opsional)
    session()->flash('success', 'Booking berhasil dikonfirmasi!');
    return redirect()->back();
}

public function reject($id)
{
    $booking = Booking::findOrFail($id);
    $booking->status = 'rejected';
    $booking->save();

    session()->flash('error', 'Booking ditolak!');
    return redirect()->back();
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $kamar = Kamar::all(); // ambil semua data kamar
    return view('pages.booking.create', compact('kamar'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
         $request->validate([
            'kamar_id' => 'required',
            'nama_pemesan' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'jumlah_tamu' => 'required',
            'tanggal_checkin' => 'required',
            'tanggal_checkout' => 'required',
            'harga' => 'required',
            'metode_pembayaran' => 'required',
            'status' 

        ]);

        Booking::create($request->all());
        return redirect()->route('booking.index')
            ->with('success', 'Data booking berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $boooking = Booking::with('kamar')->findOrfail($id);
        return view('pages.booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('booking.index');
    }
}