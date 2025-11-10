@extends('layouts.app')

@section('title', 'Daftar Booking')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Daftar Booking</h3>


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

                <table class="table table-sm dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kamar</th>
                            <th>Nama Pemesan</th>
                            <th>Tanggal Check-in</th>
                            <th>Harga</th>
                            <th>Status Pembayaran</th>
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

                                {{-- status pembayaran --}}
                                <td>
                                    @if ($item->pembayaran && $item->pembayaran->status == 'belum_bayar')
                                        <span class="badge bg-warning">Belum Bayar</span>
                                    @elseif ($item->pembayaran && $item->pembayaran->status == 'lunas')
                                        <span class="badge bg-success">Lunas</span>
                                    @else
                                        <span class="badge bg-secondary">-</span> {{-- kalau belum ada data pembayaran --}}
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('booking.show', $item->id) }}" class="btn btn-sm btn-info me-2">
                                            <span class="ti ti-eye"></span>
                                        </a>
                                        <a href="javascript:;"
                                            onclick="actionDelete('{{ route('booking.destroy', $item->id) }}')"
                                            class="btn btn-sm btn-danger">
                                            <span class="ti ti-trash"></span>
                                        </a>
                                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });

        function actionDelete(url) {
            swalWithBootstrapButtons.fire({
                title: "Yakin anda ingin menghapus?",
                text: "Data yang dihapus tidak akan kembali!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    let form = document.getElementById('formDelete');
                    form.action = url;
                    form.submit();
                }
            });
        }
    </script>


    {{-- untuk menampilkan notifikasi sukses setelah redirect --}}
    @if (Session::has('success'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ Session::get('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
@endpush
