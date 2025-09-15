@extends('layouts.app')

@section('title', '| Konfirmasi Pembayaran')

@section('content')
    <div class="container">
        <h3>Konfirmasi Pembayaran</h3>
        <p>Booking untuk kamar: <strong>{{ $booking->kamar->nama }}</strong></p>
        <p>Total bayar: <strong>Rp {{ number_format($booking->harga, 0, ',', '.') }}</strong></p>

        <form action="{{ route('pembayaran.konfirmasi.store', $booking->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="bukti_transfer" class="form-label">Upload Bukti Transfer</label>
                <input type="file" name="bukti_transfer" id="bukti_transfer" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Konfirmasi</button>
        </form>
    </div>
@endsection
