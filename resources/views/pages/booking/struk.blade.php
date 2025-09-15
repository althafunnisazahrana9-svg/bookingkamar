@extends('layouts.app')

@section('title', '| Transaksi Berhasil')

@section('content')
    <div class="d-flex justify-content-center mt-4">
        <div class="card shadow-lg" style="max-width: 420px; width: 100%; border-radius: 15px;">
            <div class="card-body text-center">

                {{-- Icon centang --}}
                <div class="mb-3">
                    <div class="rounded-circle bg-primary text-white d-inline-flex justify-content-center align-items-center"
                        style="width:70px; height:70px; font-size:30px;">
                        ✓
                    </div>
                </div>

                <h5 class="fw-bold">Transaksi Berhasil</h5>

                <hr>

                {{-- Detail transaksi --}}
                <div class="text-start small">
                    <p><strong>Tanggal</strong><br>{{ now()->format('d M Y | H:i:s') }} WIB</p>
                    <p><strong>Nomor Referensi</strong><br>#{{ strtoupper(Str::random(12)) }}</p>
                    <p><strong>Nama Pemesan</strong><br>{{ $booking->nama_pemesan }}</p>
                    <p><strong>Jenis Transaksi</strong><br>Transfer Bank</p>
                    <p><strong>Bank Tujuan</strong><br>BCA / BNI</p>
                    <p><strong>Nomor Tujuan</strong><br>1234567890</p>
                    <p><strong>Nama Tujuan</strong><br>Hotel Aetheria</p>
                    <p><strong>Nominal</strong><br>Rp{{ number_format($booking->harga, 0, ',', '.') }}</p>
                    <p><strong>Biaya Admin</strong><br>Rp6.500</p>
                    <hr>
                    <p class="fw-bold fs-5 text-primary">
                        Total Rp{{ number_format($booking->harga + 6500, 0, ',', '.') }}
                    </p>
                </div>

                {{-- Tombol --}}
                <div class="mt-3">
                    <a href="{{ route('booking.index') }}" class="btn btn-primary w-100">OK</a>
                </div>

            </div>
        </div>
    </div>
@endsection
