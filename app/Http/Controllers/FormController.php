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
        // yang masuk ke form booking cuma yang kosong kamarnya
        $kamar = Kamar::where('status', 'kosong')->orderBy('nama','ASC')->get();
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
            'jumlah_tamu' => 'required',
            'nik' => 'required',
            'tanggal_checkin' => 'required',
            'tanggal_checkout' => 'required',
            'harga' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        $data = $request->all();
        $data['harga'] = str_replace(',', '', $request->harga);

        Booking::create($data);  
        return redirect()->route('booking.index')
        ->with('success', 'Data berhasil disimpan');

        // ubah status kamar jadi terisi
        $kamar = Kamar::find($request->kamar_id);
        if ($kamar) {
            $kamar->status = 'terisi';
            $kamar->save();
        }
    }
}