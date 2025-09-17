<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
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
    public function transfer($id)
{
    $booking = Booking::findOrFail($id);

    // kalau belum ada pembayaran, buat record
    $booking->pembayaran()->firstOrCreate([], [
        'status' => 'menunggu_konfirmasi',
    ]);

    return view('pages.pembayaran.transfer', compact('booking'));
}

public function uploadBuktiTransfer(Request $request, $id)
{
    $request->validate([
        'bukti_transfer' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $pembayaran = Pembayaran::where('booking_id', $id)->firstOrFail();

    // Simpan file ke storage/app/public/bukti_transfer
    $filePath = $request->file('bukti_transfer')->store('bukti_transfer', 'public');

    $pembayaran->bukti_transfer = $filePath;
    $pembayaran->save();

    return redirect()->route('booking.show', $id)
                     ->with('success', 'Bukti transfer berhasil diupload.');
}


}
