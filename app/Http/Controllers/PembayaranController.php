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
        // Ambil data booking berdasarkan ID
        $booking = Booking::findOrFail($bookingId);

        // Kirim data booking ke view konfirmasi pembayaran
        return view('pages.pembayaran.konfirmasi', compact('booking'));
    }

    // Simpan bukti transfer
    public function storeKonfirmasi(Request $request, $bookingId)
    {
        // Validasi input: file harus gambar (jpg/jpeg/png) max 2MB
        $request->validate([
            'bukti_transfer' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Ambil data booking
        $booking = Booking::findOrFail($bookingId);

        // Cari data pembayaran berdasarkan booking_id
        // Jika belum ada, buat baru dengan status "menunggu_konfirmasi"
        $pembayaran = $booking->pembayaran()->firstOrCreate([], [
            'status' => 'menunggu_konfirmasi',
        ]);

        // simpan file bukti transfer ke storage/app/public/bukti_transfer
        $path = $request->file('bukti_transfer')->store('bukti_transfer', 'public');

        // Update data pembayaran: tambahkan path bukti transfer + status
        $pembayaran->update([
            'bukti_transfer' => $path,
            'status' => 'menunggu_konfirmasi',
        ]);

        // Redirect ke halaman detail booking dengan pesan sukses
        return redirect()
            ->route('booking.show', $booking->id)
            ->with('success', 'Bukti transfer berhasil diupload!');

    }

    // Halaman instruksi transfer
    public function transfer($id)
    {
        // Ambil data booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Jika belum ada pembayaran, buat baru dengan status "belum_bayar"
        $booking->pembayaran()->firstOrCreate([], [
            'status' => 'belum_bayar',
        ]);

        // Tampilkan halaman instruksi transfer
        return view('pages.pembayaran.transfer', compact('booking'));
    }

    // Halaman instruksi COD
    // Halaman instruksi COD
    public function cod($id)
    {
        // Ambil data booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Ambil pembayaran yang sudah ada, kalau belum ada buat baru
        $pembayaran = $booking->pembayaran()->firstOrCreate([], [
            'status' => 'menunggu_konfirmasi',
        ]);

        // Jika status masih "belum_bayar", ubah jadi "menunggu_konfirmasi"
        if ($pembayaran->status === 'belum_bayar') {
            $pembayaran->update(['status' => 'menunggu_konfirmasi']);
        }

        // Tampilkan halaman instruksi pembayaran COD
        return view('pages.pembayaran.cod', compact('booking'));
    }

    // Admin update status pembayaran
    public function updateStatus(Request $request, Pembayaran $pembayaran)
    {
        // Validasi input status (hanya boleh 3 pilihan)
        $request->validate([
            'status' => 'required|in:belum_bayar,menunggu_konfirmasi,lunas',
        ]);

        // Update status pembayaran sesuai input
        $pembayaran->update([
            'status' => $request->status,
        ]);

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Status pembayaran berhasil diperbarui.');
    }

    // Set Lunas
    public function setLunas($id)
    {
        // Cari pembayaran berdasarkan booking_id
        $pembayaran = Pembayaran::where('booking_id', $id)->first();

        // Jika pembayaran ditemukan, ubah status jadi "lunas"
        if ($pembayaran) {
            $pembayaran->update(['status' => 'lunas']);
        }

        return back()->with('success', 'Status pembayaran berhasil diubah menjadi Lunas.');
    }

    // Set Belum Lunas
    public function setBelumLunas($id)
    {
        // Cari pembayaran berdasarkan booking_id
        $pembayaran = Pembayaran::where('booking_id', $id)->first();

        // Jika pembayaran ditemukan, ubah status jadi "belum_bayar"
        if ($pembayaran) {
            $pembayaran->update(['status' => 'belum_bayar']);
        }

        return back()->with('success', 'Status pembayaran berhasil diubah menjadi Belum Lunas.');
    }
}
