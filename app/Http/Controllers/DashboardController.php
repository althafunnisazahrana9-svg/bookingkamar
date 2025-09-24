<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use App\Models\Pembayaran;

class DashboardController extends Controller
{
    public function index()
    {
        // total booking (angka)
        $totalBooking = Booking::count();

        // booking per metode pembayaran (array -> bisa foreach atau chart)
        $bookingPerMetode = Booking::select('metode_pembayaran', \DB::raw('count(*) as total'))
            ->groupBy('metode_pembayaran')
            ->pluck('total', 'metode_pembayaran');

        // booking per kamar (array -> bisa foreach)
        $bookingPerKamar = Booking::select('kamar_id', \DB::raw('count(*) as total'))
            ->groupBy('kamar_id')
            ->pluck('total', 'kamar_id');

        $pendapatanPerHari = Pembayaran::where('pembayaran.status', 'lunas') // kasih prefix
            ->join('booking', 'pembayaran.booking_id', '=', 'booking.id')
            ->selectRaw('DATE(pembayaran.created_at) as tanggal, SUM(booking.harga) as total')
            ->where('pembayaran.status', 'lunas')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'asc')
            ->pluck('total', 'tanggal');

        // hitung status pembayaran
        $belum = Pembayaran::where('status', 'belum_bayar')->count();
        $pending = Pembayaran::where('status', 'menunggu_konfirmasi')->count();
        $lunas = Pembayaran::where('status', 'lunas')->count();

        // total pendapatan
        $totalPendapatan = Pembayaran::where('pembayaran.status', 'lunas')
            ->join('booking', 'pembayaran.booking_id', '=', 'booking.id')
            ->sum('booking.harga');

        return view('pages.dashboard.index', compact(
            'totalBooking',
            'bookingPerMetode',
            'bookingPerKamar',
            'totalPendapatan',
            'belum',
            'pending',
            'lunas',
            'pendapatanPerHari'
        ));
    }
}
