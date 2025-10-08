<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use App\Models\Pembayaran;

class DashboardController extends Controller
{
    public function index()
    {
        // total booking (angka) -> exclude booking ditolak
        $totalBooking = Booking::whereNotIn('status', ['pending', 'rejected'])->count();

        // booking per metode pembayaran -> exclude booking ditolak
        $bookingPerMetode = Booking::whereNotIn('status', ['pending', 'rejected'])
            ->select('metode_pembayaran', \DB::raw('count(*) as total'))
            ->groupBy('metode_pembayaran')
            ->pluck('total', 'metode_pembayaran');

        // booking per kamar -> exclude booking ditolak
        $bookingPerKamar = Booking::whereNotIn('booking.status', ['pending', 'rejected'])
            ->join('kamar', 'booking.kamar_id', '=', 'kamar.id')
            ->select('kamar.nama as kamar_nama', \DB::raw('count(*) as total'))
            ->groupBy('kamar.nama')
            ->pluck('total', 'kamar_nama');
        // pendapatan per hari (hanya yang lunas)
        $pendapatanPerHari = Pembayaran::where('pembayaran.status', 'lunas')
            ->join('booking', 'pembayaran.booking_id', '=', 'booking.id')
            ->selectRaw('DATE(pembayaran.created_at) as tanggal, SUM(booking.harga) as total')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'asc')
            ->pluck('total', 'tanggal');

        // status pembayaran berdasarkan booking
        $statusPembayaran = Booking::join('pembayaran', 'booking.id', '=', 'pembayaran.booking_id')
            ->select('pembayaran.status', \DB::raw('count(*) as total'))
            ->groupBy('pembayaran.status')
            ->pluck('total', 'pembayaran.status');

        // total pendapatan (hanya yang lunas)
        $totalPendapatan = Pembayaran::where('pembayaran.status', 'lunas')
            ->join('booking', 'pembayaran.booking_id', '=', 'booking.id')
            ->sum('booking.harga');

        return view('pages.dashboard.index', compact(
            // total booking (hanya yang diterima & selesai, exclude pending/rejected)
            'totalBooking',
            // jumlah booking berdasarkan metode pembayaran (contoh: transfer, cash, e-wallet)
            'bookingPerMetode',
            // jumlah booking per kamar (untuk tahu kamar mana yang paling sering dipesan)
            'bookingPerKamar',
            // total pendapatan keseluruhan (hanya dari pembayaran yang statusnya lunas)
            'totalPendapatan',
            // status pembayaran berdasarkan booking (contoh: lunas, menunggu, gagal)
            'statusPembayaran',
            // pendapatan per hari (dijumlahkan hanya dari pembayaran lunas)
            'pendapatanPerHari'
        ));
    }
}
