<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Booking;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = Kamar::orderBy('nama','ASC')->get();
        $booking = Booking::all();
        return view('pages.form.index', compact('kamar', 'booking'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'kamar_id' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'nik' => 'required',
            'tanggal_checkin' => 'required',
            'tanggal_checkout' => 'required',
            'harga' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        Booking::create($request->all());
        return redirect()->route('booking.index')
        ->with('success', 'Data berhasil disimpan');
    }
}
