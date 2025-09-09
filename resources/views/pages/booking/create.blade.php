@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Booking</h1>
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kamar_id" class="form-label">Pilih Kamar</label>
                <select name="kamar_id" class="form-control">
                    @foreach ($kamar as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kamar }} - Rp {{ number_format($k->harga) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Pemesan</label>
                <input type="text" name="nama_pemesan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Check-in</label>
                <input type="date" name="tanggal_checkin" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Check-out</label>
                <input type="date" name="tanggal_checkout" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
