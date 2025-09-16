@extends('layouts.app')

@section('title', 'Transfer Bank')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <!-- Instruksi Pembayaran -->
            <div class="col-md-6">
                <h3>Instruksi Pembayaran via Transfer Bank</h3>
                <p>Booking untuk kamar: <strong>{{ $booking->kamar->nama }}</strong></p>
                <p>Total yang harus dibayar: <strong>Rp {{ number_format($booking->harga, 0, ',', '.') }}</strong></p>

                <hr>

                <h5>Silakan transfer ke salah satu rekening berikut:</h5>
                <ul>
                    <li>BCA: 1234567890 a.n. Hotel Aetheria</li>
                    <li>BNI: 9876543210 a.n. Hotel Aetheria</li>
                </ul>

                <h3>Konfirmasi Pembayaran</h3>
                <p>Booking untuk kamar: <strong>{{ $booking->kamar->nama }}</strong></p>
                <p>Total bayar: <strong>Rp {{ number_format($booking->harga + 6500, 0, ',', '.') }}</strong></p>

                <form action="{{ route('pembayaran.konfirmasi.store', $booking->id) }}" method="POST"
                    enctype="multipart/form-data">
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

            <!-- Transaksi Berhasil -->
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card shadow-lg w-100" style="max-width: 420px; border-radius: 15px;">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
