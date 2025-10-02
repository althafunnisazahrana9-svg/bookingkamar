@extends('layouts.app')

@section('title', 'Detail Booking')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-title">Detail Booking</h3>

            <div class="card card-body p-0">
                <table class="table table-striped">
                    <tr>
                        <th width="25%">ID</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->id }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Kamar ID</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->kamar->nama }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Nama Pemesan</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->nama_pemesan }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Email</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->email }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Telephone</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->telp }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Alamat</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->alamat }}</td>
                    </tr>
                    <tr>
                        <th width="25%">NIK</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->nik }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Jumlah Tamu</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->jumlah_tamu }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Tanggal Checkin</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->tanggal_checkin }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Tanggal Checkout</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->tanggal_checkout }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Harga</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->harga }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Status</th>
                        <th width="10px">:</th>
                        <td>
                            @if ($booking->status == 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @elseif ($booking->status == 'confirmed')
                                <span class="badge bg-success">Confirmed</span>
                            @elseif ($booking->status == 'rejected')
                                <span class="badge bg-danger">Rejected</span>
                            @else
                                <span class="badge bg-secondary">{{ ucfirst($booking->status) }}</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th width="25%">Status Pembayaran</th>
                        <th width="10px">:</th>
                        <td>
                            @if ($booking->pembayaran)
                                @if ($booking->pembayaran->status == 'belum_bayar')
                                    <span class="badge bg-secondary">Belum Bayar</span>
                                @elseif ($booking->pembayaran->status == 'menunggu_konfirmasi')
                                    <span class="badge bg-warning text-dark">Menunggu Konfirmasi</span>
                                @elseif ($booking->pembayaran->status == 'lunas')
                                    <span class="badge bg-success">Lunas</span>
                                @else
                                    <span class="badge bg-dark">{{ ucfirst($booking->pembayaran->status) }}</span>
                                @endif
                            @else
                                <span class="badge bg-secondary">Belum Ada Pembayaran</span>
                            @endif


                        </td>
                    </tr>
                    <tr>
                        <th width="25%">Booking pada</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->created_at->isoFormat('DD MMM Y HH:mm') }}</td>
                    </tr>
                </table>
            </div>


            <div class="d-flex justify-content-between mt-3">
                <!-- Tombol kiri: Kembali, Lihat Bukti Transfer, Pembayaran -->
                <div class="d-flex gap-2">
                    <a href="{{ route('booking.index') }}" class="btn btn-sm btn-primary">
                        <span class="ti ti-arrow-left"></span>
                        Kembali
                    </a>

                    {{-- Hanya tampilkan tombol pembayaran jika status bukan rejected --}}
                    @if ($booking->status != 'rejected')
                        @if ($booking->pembayaran && $booking->pembayaran->bukti_transfer)
                            <a href="{{ asset('storage/' . $booking->pembayaran->bukti_transfer) }}" target="_blank"
                                class="btn btn-sm btn-info">
                                <span class="ti ti-file"></span> Lihat Bukti Transfer
                            </a>
                        @else
                            {{-- Kalau transfer tanpa bukti ATAU COD --}}
                            <a href="{{ $booking->metode_pembayaran === 'transfer'
                                ? route('pembayaran.transfer', $booking->id)
                                : route('pembayaran.cod', $booking->id) }}"
                                class="btn btn-sm btn-success">
                                <span class="ti ti-receipt-2"></span> Pembayaran
                            </a>
                        @endif
                    @endif
                </div>
                {{-- hanya admin yang bisa merubah --}}
                @auth('web')

                    <!-- Tombol kanan: Konfirmasi, Tolak, Lunas, Belum Lunas -->
                    <div class="d-flex gap-2">
                        @if ($booking->status == 'pending')
                            <a href="{{ route('booking.confirm', $booking->id) }}" class="btn btn-sm btn-success">
                                <span class="ti ti-check"></span>
                                Konfirmasi
                            </a>

                            <form action="{{ route('booking.reject', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span class="ti ti-x"></span>
                                    Tolak
                                </button>
                            </form>
                        @endif

                        {{-- Tombol Lunas / Belum Lunas (Berlaku untuk COD & Transfer) --}}
                        @if ($booking->pembayaran)
                            @if ($booking->pembayaran->status !== 'lunas')
                                <div class="text-end">
                                    {{-- Tombol Lunas --}}
                                    <form action="{{ route('booking.setLunas', $booking->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-success">
                                            <i class="ti ti-cash"></i> Lunas
                                        </button>
                                    </form>

                                    {{-- Tombol Belum Lunas --}}
                                    <form action="{{ route('booking.setBelumLunas', $booking->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">
                                            <i class="ti ti-clock"></i> Belum Lunas
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            @endauth
        </div>
    </div>
@endsection
