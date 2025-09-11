<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Kamar;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah total booking
        $booking = Booking::count();

        // Hitung jumlah booking berdasarkan metode pembayaran
        $booking = Booking::selectRaw('metode_pembayaran, COUNT(*) as total')
            ->groupBy('metode_pembayaran')
            ->pluck('total','metode_pembayaran');

        // Hitung jumlah booking per kamar
        $kamar = Booking::selectRaw('kamar_id, COUNT(*) as total')
            ->groupBy('kamar_id')
            ->pluck('total','kamar_id');

        return view('pages.dashboard.index', compact('booking', 'booking', 'kamar'));
    }
}

