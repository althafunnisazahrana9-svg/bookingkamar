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
                <div class="card shadow-sm border-0" style="max-width: 450px; margin:auto;">
                    <div class="card-body">

                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Tanggal</div>
                            <div class="col-7 text-end">{{ now()->format('d M Y | H:i:s') }} WIB</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Nomor Referensi</div>
                            <div class="col-7 text-end">{{ strtoupper(Str::random(12)) }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Nama Pemesan</div>
                            <div class="col-7 text-end">{{ $booking->nama_pemesan }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Jenis Transaksi</div>
                            <div class="col-7 text-end">Transfer Bank</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Bank Tujuan</div>
                            <div class="col-7 text-end">BCA / BNI</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Nomor Tujuan</div>
                            <div class="col-7 text-end">1234567890</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Nama Tujuan</div>
                            <div class="col-7 text-end">Hotel Aetheria</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Nominal</div>
                            <div class="col-7 text-end">Rp{{ number_format($booking->harga, 0, ',', '.') }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 fw-bold text-start">Biaya Admin</div>
                            <div class="col-7 text-end">Rp6.500</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-5 fw-bold text-start">Total</div>
                            <div class="col-7 fw-bold text-primary text-end">
                                Rp{{ number_format($booking->harga + 6500, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tombol --}}
                <div class="mt-3">
                    <a href="{{ route('booking.show', $booking->id) }}" class="btn btn-primary w-100">OK</a>
                </div>

            </div>
        </div>
    </div>
@endsection
