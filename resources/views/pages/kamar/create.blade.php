@extends('layouts.app')

@section('title', 'Tambah Kamar')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-title">Tambah Kamar</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kamar.store') }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') }}" />
                            @error('nama')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                                name="harga" value="{{ old('harga') }}" />
                            @error('harga')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <input type="text" class="form-control @error('fasilitas') is-invalid @enderror"
                                id="fasilitas" name="fasilitas" value="{{ old('fasilitas') }}" />
                            @error('fasilitas')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="terisi">Terisi</option>
                                <option value="kosong">Kosong</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="flex">
                            <button type="submit" class="btn btn-primary">
                                <span class="ti ti-send me-1"></span>
                                Simpan
                            </button>

                            <a href="{{ route('kamar.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
