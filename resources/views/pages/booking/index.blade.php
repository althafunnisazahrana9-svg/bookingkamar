@extends('layouts.app')

@section('title', 'Daftar Booking')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Daftar Booking</h3>

            @if (session('success'))
                <p style="color: green">{{ session('success') }}</p>
            @endif

            <a href="{{ route('booking.create') }}" class="btn btn-primary mb-3">
                <span class="ti ti-plus me-1"></span>
                Tambah
            </a>

            <div class="card card-body">
                <div class="row mb-3">
                    <div class="col-md-5">
                        <form action="" method="GET" class="d-flex align-items-center gap-2">
                            <label for="filter">Filter:</label>
                            <input type="date" name="tanggal" value="{{ request('tanggal') }}" class="form-control" />
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <table class="table dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kamar</th>
                            <th>Nama Pemesan</th>
                            <th>Tanggal Check-in</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kamar->nama }}</td>
                                <td>{{ $item->nama_pemesan }}</td>
                                <td>{{ $item->tanggal_checkin }}</td>
                                <td>{{ number_format($item->harga, 0, ',', '.') }}</td>
                                <td>
                                    <span class="badge bg-{{ $item->status == 'pending' ? 'warning' : 'success' }}">
                                        {{ ucfirst($item->status) }}
                                    </span>
                                </td>
                                <td>{{ $item->created_at->isoFormat('DD MMM Y HH:mm') }}</td>
                                <td>
                                    <a href="{{ route('booking.show', $item->id) }}" class="btn btn-sm btn-info">
                                        <span class="ti ti-eye"></span>
                                    </a>
                                    <a href="javascript:;"
                                        onclick="actionDelete('{{ route('booking.destroy', $item->id) }}')"
                                        class="btn btn-sm btn-danger">
                                        <span class="ti ti-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="" id="formDelete" method="POST" class="d-none">
        @csrf
        @method('DELETE')
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/libs/sweetalert2/sweetalert2.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('.dataTable').DataTable();
        });

        function actionDelete(url) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formDelete').attr('action', url);
                    $('#formDelete').submit();
                }
            });
        }
    </script>
@endpush
