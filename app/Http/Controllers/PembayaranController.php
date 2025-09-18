<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Pembayaran;
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
    // Halaman instruksi transfer bank
    public function transfer($id)
    {
        $booking = Booking::findOrFail($id);

        // kalau belum ada pembayaran, buat record
        $booking->pembayaran()->firstOrCreate([], [
            'status' => 'menunggu_konfirmasi',
        ]);
<<<<<<< HEAD

        return view('pages.pembayaran.transfer', compact('booking'));
=======
    }

    public function cod($id)
    {
        $booking = Booking::findOrFail($id);

        // Bisa update status booking kalau mau
        $booking->update([
            'status_booking' => 'menunggu pembayaran di tempat',
        ]);

        return view('pages.pembayaran.cod', compact('booking'));
>>>>>>> d10eae5a807bd0a71ba22ef1fbd5a3cb9885b587
    }

    public function cod($id)
    {
        $booking = Booking::findOrFail($id);

        // Bisa update status booking kalau mau
        $booking->update([
            'status_booking' => 'menunggu pembayaran di tempat',
        ]);

        return view('pages.pembayaran.cod', compact('booking'));
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

    // status pembayaran
    public function updateStatus(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'status' => 'required|in:belum_bayar,menunggu_konfirmasi,lunas',
        ]);

        $pembayaran->status = $request->status;
        $pembayaran->save();

        return back()->with('success', 'Status pembayaran berhasil diperbarui.');
    }

    // store
    public function store(Request $request, $bookingId)
    {
        $request->validate([
            'bukti_transfer' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('bukti_transfer')->store('bukti_transfer', 'public');

        // simpan pembayaran
        Pembayaran::create([
            'booking_id' => $bookingId,
            'bukti_transfer' => $path,
            'status' => 'menunggu_konfirmasi', // <-- langsung set
        ]);

        return redirect()->route('booking.show', $bookingId)
            ->with('success', 'Bukti transfer berhasil diunggah, menunggu konfirmasi admin.');
    }

    // lunas dan belum lunas
    public function setLunas($id)
    {
        $pembayaran = Pembayaran::where('booking_id', $id)->first();
        if ($pembayaran) {
            $pembayaran->status = 'lunas';
            $pembayaran->save();
        }

        return back()->with('success', 'Status pembayaran berhasil diubah menjadi Lunas.');
    }

    public function setBelumLunas($id)
    {
        $pembayaran = Pembayaran::where('booking_id', $id)->first();
        if ($pembayaran) {
            $pembayaran->status = 'belum_bayar';
            $pembayaran->save();
        }

        return back()->with('success', 'Status pembayaran berhasil diubah menjadi Belum Lunas.');
    }
}
