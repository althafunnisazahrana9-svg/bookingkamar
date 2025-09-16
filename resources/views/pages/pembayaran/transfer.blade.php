@extends('layouts.app')

@section('title', 'Transfer Bank')

@section('content')
    <div class="container">
        <h3>Instruksi Pembayaran via Transfer Bank</h3>
        <p>Booking untuk kamar: <strong>{{ $booking->kamar->nama }}</strong></p>
        <p>Total yang harus dibayar: <strong>Rp {{ number_format($booking->harga, 0, ',', '.') }}</strong></p>

        <hr>

        <h5>Silakan transfer ke salah satu rekening berikut:</h5>
        <ul>
            <li>BCA: 1234567890 a.n. Hotel Aetheria</li>
            <li>BNI: 9876543210 a.n. Hotel Aetheria</li>
        </ul>

        <p>Setelah transfer, jangan lupa untuk <a href="{{ route('pembayaran.konfirmasi', $booking->id) }}">
                upload bukti transfer</a>.
        </p>

        <!-- lihat struk -->
        <a href="{{ route('booking.struk', $booking->id) }}" class="btn btn-success mt-3">
            Lihat Struk Pembayaran
        </a>
    </div>
@endsection
