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
                        <th width="25%">Kamar_ID</th>
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
                        <td>{{ $booking->status }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Booking pada</th>
                        <th width="10px">:</th>
                        <td>{{ $booking->created_at->isoFormat('DD MMM Y HH:mm') }}</td>
                    </tr>
                </table>
            </div>

            <a href="{{ route('booking.index') }}" class="btn btn-sm btn-primary">
                <span class="ti ti-arrow-left"></span>
                Kembali
            </a>
        </div>
    </div>
@endsection
