<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
        public function konfirmasi($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        return view('pages.pembayaran.konfirmasi', compact('booking'));
    }

    public function storeKonfirmasi(Request $request, $bookingId)
    {
        $request->validate([
            'bukti_transfer' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $booking = Booking::findOrFail($bookingId);

        // simpan file bukti transfer
        $path = $request->file('bukti_transfer')->store('bukti_transfer', 'public');

        // update booking
        $booking->update([
            'bukti_transfer' => $path,
            'status_booking' => 'menunggu_verifikasi',
        ]);

        return redirect()->route('booking.index')->with('success', 'Bukti transfer berhasil diupload!');
    }

    // Halaman instruksi transfer bank
    public function transfer($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);

        return view('pages.pembayaran.transfer', compact('booking'));
    }

}
