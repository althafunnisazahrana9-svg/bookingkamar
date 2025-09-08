@extends('layouts.app')

@section('title', 'Detail Kamar')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-title">Detail Kamar</h3>

            <div class="card card-body p-0">
                <table class="table table-striped">
                    <tr>
                        <th width="25%">ID</th>
                        <th width="10px">:</th>
                        <td>{{ $kamar->id }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Nama</th>
                        <th width="10px">:</th>
                        <td>{{ $kamar->nama }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Harga</th>
                        <th width="10px">:</th>
                        <td>{{ $kamar->harga }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Fasilitas</th>
                        <th width="10px">:</th>
                        <td>{{ $kamar->fasilitas }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Status</th>
                        <th width="10px">:</th>
                        <td>{{ $kamar->status }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Terdaftar pada</th>
                        <th width="10px">:</th>
                        <td>{{ $kamar->created_at->isoFormat('DD MMM Y HH:mm') }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Diperbarui pada</th>
                        <th width="10px">:</th>
                        <td>{{ $kamar->updated_at->isoFormat('DD MMM Y HH:mm') }}</td>
                    </tr>
                </table>
            </div>

            <div class="d-flex gap-2 mt-3">
                <a href="{{ route('kamar.index') }}" class="btn btn-secondary">
                    <span class="ti ti-arrow-left me-1"></span>
                    Kembali
                </a>

                <a href="{{ route('kamar.edit', $kamar->id) }}" class="btn btn-primary">
                    <span class="ti ti-pencil me-1"></span>
                    Edit
                </a>
            </div>
        </div>
    </div>
@endsection
