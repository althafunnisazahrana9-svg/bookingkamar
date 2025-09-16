@extends('layouts.app')

@section('title', '| Konfirmasi Pembayaran')

@section('content')
    <div class="container">
        <h3>Konfirmasi Pembayaran</h3>
        <p>Booking untuk kamar: <strong>{{ $booking->kamar->nama }}</strong></p>
        <p>Total bayar: <strong>Rp {{ number_format($booking->harga + 6500, 0, ',', '.') }}</strong></p>

        <form action="{{ route('pembayaran.konfirmasi.store', $booking->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="bukti_transfer" class="form-label">Upload Bukti Transfer</label>
                <input type="file" name="bukti_transfer" id="bukti_transfer" class="form-control" required>
            </div>
            <div class="mt-3">
                <a href="{{ route('booking.show', $booking->id) }}" class="btn btn-primary">Kirim Konfirmasi</a>
            </div>
        </form>
    </div>
@endsection
