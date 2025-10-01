<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $booking = Booking::with('kamar')->orderBy('created_at', 'desc')->get();

        // Ambil semua booking terbaru untuk notifikasi
        $booking = Booking::with('kamar')
            ->when(request('tanggal'), function ($query, $tanggal) {
                $query->whereDate('tanggal_checkin', $tanggal);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        // ambil data notifikasi
        $notifikasi = Booking::with('kamar')->latest()->get();

        // kirim data notifikasi ke view
        return view('pages.booking.index', compact('booking', 'notifikasi'));
    }

    public function confirm($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'confirmed';
        $booking->save();

        // update status kamar jadi terisi
        $kamar = Kamar::find($booking->kamar_id);
        if ($kamar) {
            $kamar->status = 'terisi';
            $kamar->save();
        }

        return redirect()->route('booking.show', $id)->with('success', 'Booking berhasil dikonfirmasi!');
    }

    public function reject($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'rejected';
        $booking->save();

        // kembalikan status kamar ke kosong
        $kamar = Kamar::find($booking->kamar_id);
        if ($kamar) {
            $kamar->status = 'kosong';
            $kamar->save();
        }

        return redirect()->route('booking.show', $id)->with('info', 'Booking ditolak!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $kamar = Kamar::all(); // ambil semua data kamar
        $notifikasi = Booking::with('kamar')->latest()->get();

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
            'status' => 'nullable',
        ]);

        // Simpan booking ke database
        $booking = \App\Models\Booking::create($request->all());

        // Simpan data pengunjung ke session
        session([
            'role' => 'pengunjung',
            'nama_pemesan' => $request->nama_pemesan,
            'email_pemesan' => $request->email,
        ]);

        // Arahkan sesuai metode pembayaran
        if ($request->metode_pembayaran === 'transfer') {
            return redirect()->route('pembayaran.transfer', $booking->id);
        }

        if ($request->metode_pembayaran === 'cod') {
            return redirect()->route('pembayaran.cod', $booking->id);
        }

        // Default redirect kalau tidak ada metode cocok
        return redirect()->route('booking.success', ['id' => $booking->id])
            ->with('success', 'Booking berhasil dibuat');
    }

    public function struk($id)
    {
        $booking = Booking::with('pembayaran')->findOrFail($id);

        return view('pages.booking.struk', compact('booking'));
    }

    public function setLunas($id)
    {
        $pembayaran = Pembayaran::where('booking_id', $id)->first();
        if ($pembayaran) {
            $pembayaran->status = 'lunas';
            $pembayaran->save();
        }

        return back()->with('success', 'Status pembayaran berhasil diubah menjadi Lunas.');
    }

    // lunas dan belum lunas
    public function setBelumLunas($id)
    {
        $pembayaran = Pembayaran::where('booking_id', $id)->first();
        if ($pembayaran) {
            $pembayaran->status = 'belum_bayar'; // sesuaikan dengan status yang kamu pakai
            $pembayaran->save();
        }

        return back()->with('success', 'Status pembayaran berhasil diubah menjadi Belum Lunas.');
    }

    public function success($id)
    {
        $booking = \App\Models\Booking::findOrFail($id);

        return view('pages.booking.success', compact('booking'));
    }

    // about
    public function about()
    {
        return view('pages.booking.about');
    }

    // services
    public function services()
    {
        return view('pages.booking.services');
    }

    // rooms
    public function rooms()
    {
        return view('pages.booking.rooms');
    }

    // news
    public function news()
    {
        return view('pages.booking.news');
    }

    // contact
    public function contact()
    {
        return view('pages.booking.contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking = Booking::with('kamar')->findOrfail($id);

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
