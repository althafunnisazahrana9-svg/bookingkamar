@extends('layouts.app')

@section('title', 'Booking Berhasil')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center shadow-lg">
                    <div class="card-header bg-success text-white">
                        <h3>Booking Berhasil!</h3>
                    </div>
                    <div class="card-body">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 80px;"></i>
                        <h4 class="mt-3">Terima kasih, {{ $booking->nama_pemesan }}!</h4>
                        <p class="mt-2">Booking kamar Anda telah berhasil diproses.</p>

                        <div class="mt-4 text-start">
                            <h5>Detail Booking:</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Kamar:</strong> {{ $booking->kamar->kamar_id }}</li>
                                <li class="list-group-item"><strong>Jumlah Tamu:</strong> {{ $booking->jumlah_tamu }}</li>
                                <li class="list-group-item"><strong>Check-in:</strong> {{ $booking->tanggal_checkin }}</li>
                                <li class="list-group-item"><strong>Check-out:</strong> {{ $booking->tanggal_checkout }}
                                </li>
                                <li class="list-group-item"><strong>Total Pembayaran:</strong> Rp
                                    {{ number_format($booking->total_harga, 0, ',', '.') }}</li>
                            </ul>
                        </div>

                        <a href="{{ route('home') }}" class="btn btn-primary mt-4">Kembali ke Beranda</a>
                    </div>
                    <div class="card-footer text-muted">
                        Jika ada pertanyaan, silakan hubungi kami.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
