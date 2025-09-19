<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    // Halaman konfirmasi upload bukti transfer
    public function konfirmasi($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);

        return view('pages.pembayaran.konfirmasi', compact('booking'));
    }

    // Simpan bukti transfer
    public function storeKonfirmasi(Request $request, $bookingId)
    {
        $request->validate([
            'bukti_transfer' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $booking = Booking::findOrFail($bookingId);

        // cari pembayaran, kalau belum ada buat baru
        $pembayaran = $booking->pembayaran()->firstOrCreate([], [
            'status' => 'menunggu_konfirmasi',
        ]);

        // simpan file bukti transfer
        $path = $request->file('bukti_transfer')->store('bukti_transfer', 'public');

        // update pembayaran
        $pembayaran->update([
            'bukti_transfer' => $path,
            'status' => 'menunggu_konfirmasi',
        ]);

        return redirect()
            ->route('booking.show', $booking->id)
            ->with('success', 'Bukti transfer berhasil diupload!');

    }

    // Halaman instruksi transfer
    public function transfer($id)
    {
        $booking = Booking::findOrFail($id);

        // kalau belum ada pembayaran, buat record
        $booking->pembayaran()->firstOrCreate([], [
            'status' => 'belum_bayar',
        ]);

        return view('pages.pembayaran.transfer', compact('booking'));
    }

    // Halaman instruksi COD
    public function cod($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->pembayaran()->firstOrCreate([], [
            'status' => 'belum_bayar',
        ]);

        return view('pages.pembayaran.cod', compact('booking'));
    }

    // Admin update status pembayaran
    public function updateStatus(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'status' => 'required|in:belum_bayar,menunggu_konfirmasi,lunas',
        ]);

        $pembayaran->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Status pembayaran berhasil diperbarui.');
    }

    // Set Lunas
    public function setLunas($id)
    {
        $pembayaran = Pembayaran::where('booking_id', $id)->first();
        if ($pembayaran) {
            $pembayaran->update(['status' => 'lunas']);
        }

        return back()->with('success', 'Status pembayaran berhasil diubah menjadi Lunas.');
    }

    // Set Belum Lunas
    public function setBelumLunas($id)
    {
        $pembayaran = Pembayaran::where('booking_id', $id)->first();
        if ($pembayaran) {
            $pembayaran->update(['status' => 'belum_bayar']);
        }

        return back()->with('success', 'Status pembayaran berhasil diubah menjadi Belum Lunas.');
    }
}