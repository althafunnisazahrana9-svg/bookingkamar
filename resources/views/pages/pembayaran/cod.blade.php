@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow p-4">
            <h4 class="mb-3">Instruksi Pembayaran di Tempat</h4>

            <p>Halo,</p>
            <p>Terima kasih telah memilih Hotel Aetheria<strong>{{ $booking->nama }}</strong>.</p>
            <p>Pesananmu sudah kami terima dengan detail berikut:</p>

            <ul class="list-group mb-3">
                <li class="list-group-item"><strong>Kamar:</strong> {{ $booking->kamar->nama }}</li>
                <li class="list-group-item"><strong>Tanggal Check-in:</strong> {{ $booking->tanggal_checkin }}</li>
                <li class="list-group-item"><strong>Tanggal Check-out:</strong> {{ $booking->tanggal_checkout }}</li>
                <li class="list-group-item"><strong>Total:</strong> Rp{{ number_format($booking->harga, 0, ',', '.') }}</li>
                <li class="list-group-item"><strong>Metode Pembayaran:</strong> Bayar di Tempat</li>
            </ul>

            <div class="alert alert-info">
                <i class="ti ti-info-circle"></i>
                Silakan lakukan pembayaran secara langsung saat check-in di Hotel Aetheria.
            </div>

            <a href="{{ route('booking.index') }}" class="btn btn-primary mt-3">
                <i class="ti ti-home"></i> Kembali ke Daftar Booking
            </a>
        </div>
    </div>
@endsection
