<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('/') }}" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Form Booking</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{ asset('/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />

    <link rel="stylesheet" href="{{ asset('/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/vendor/js/template-customizer.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="row justify-content-center py-5">
            <div class="col-md-7">
                <div class="card card-body">
                    <h5 class="mb-0 fw-bold text-center">
                        HALAMAN FORM BOOKING
                    </h5>

                    <hr />

                    <form action="{{ route('pages.form.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="nama_pemesan" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror"
                                id="nama_pemesan" name="nama_pemesan" value="{{ old('nama_pemesan') }}" />
                            @error('nama_pemesan')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" mb-3>
                                    <label for="kamar_id" class="form-label">Pilih Kamar</label>
                                    <select name="kamar_id" id="kamar_id"
                                        class="form-select @error('kamar_id') is-invalid @enderror">
                                        <option value="">-- Pilih Kamar --</option>
                                        @foreach ($kamar as $item)
                                            <option value="{{ $item->id }}" data-harga="{{ $item->harga }}">
                                                {{ $item->nama }} - {{ $item->fasilitas }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('kamar_id')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="jumlah_tamu" class="form-label">Jumlah Tamu</label>
                                    <input type="number"
                                        class="form-control @error('jumlah_tamu') is-invalid @enderror" id="jumlah_tamu"
                                        name="jumlah_tamu" value="{{ old('jumlah_tamu') }}" />
                                    @error('jumlah_tamu')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" />
                                    @error('email')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="telp" class="form-label">No Telp</label>
                                    <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                        id="telp" name="telp" value="{{ old('telp') }}" />
                                    @error('telp')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" value="{{ old('nik') }}" />
                                    @error('nik')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="2" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group mb-3">
                                    <label for="tanggal_checkin" class="form-label">Tanggal Check-in</label>
                                    <input type="date"
                                        class="form-control @error('tanggal_checkin') is-invalid @enderror"
                                        id="tanggal_checkin" name="tanggal_checkin"
                                        value="{{ old('tanggal_checkin') }}" />
                                    @error('tanggal_checkin')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="tanggal_checkout" class="form-label">Tanggal Check-out</label>
                                    <input type="date"
                                        class="form-control @error('tanggal_checkout') is-invalid @enderror"
                                        id="tanggal_checkout" name="tanggal_checkout"
                                        value="{{ old('tanggal_checkout') }}" />
                                    @error('tanggal_checkout')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                        {{-- supaya harga yang otomatis muncul itu ada titiknya contoh 8.000.000, tetapi di database tidak ada titiknya contoh 8000000 --}} oninput="formatHarga(this)" placeholder="8.000.000"
                                        {{-- end --}} id="harga" name="harga"
                                        value="{{ old('harga') }}" readonly />
                                    @error('harga')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                                    <select name="metode_pembayaran" id="metode_pembayaran" class="form-control"
                                        required>
                                        <option value="">-- Pilih Metode Pembayaran --</option>
                                        <option value="transfer">Transfer Bank</option>
                                        <option value="cod">Bayar di Tempat (COD)</option>
                                        <option value="ewallet">E-Wallet (OVO, GoPay, DANA)</option>
                                    </select>
                                    @error('metode_pembayaran')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="flex text-center">
                            <button type="submit" class="btn btn-primary">
                                <span class="ti ti-save me-1"></span>
                                Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- menggabungkan harga dan kamar_id --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const kamarSelect = document.getElementById('kamar_id');
            const checkin = document.getElementById('tanggal_checkin');
            const checkout = document.getElementById('tanggal_checkout');
            const hargaInput = document.getElementById('harga');

            function hitungTotalHarga() {
                const hargaPerMalam = parseFloat(kamarSelect.options[kamarSelect.selectedIndex].dataset.harga);
                const tgl1 = checkin.valueAsDate;
                const tgl2 = checkout.valueAsDate;

                if (tgl1 && tgl2 && hargaPerMalam) {
                    const selisih = (tgl2 - tgl1) / (1000 * 60 * 60 * 24); // jumlah malam
                    if (selisih > 0) {
                        const total = selisih * hargaPerMalam;
                        hargaInput.value = total.toLocaleString();
                    } else {
                        hargaInput.value = "";
                    }
                } else {
                    hargaInput.value = "";
                }
            }

            kamarSelect.addEventListener('change', hitungTotalHarga); // 🔥
            checkin.addEventListener('change', hitungTotalHarga); // 🔥
            checkout.addEventListener('change', hitungTotalHarga); // 🔥
        });
    </script>

    <script>
        function formatHarga(input) {
            // Hapus semua karakter non-digit
            // replace(/\D/g, '')→ menghapus semua karakter yang bukan angka.
            // \ D artinya non - digit(bukan 0– 9).
            // g artinya global, yaitu semua non - digit di seluruh string akan dihapus.
            // Input user: "8.000.000" → ., bukan angka, jadi dihapus → "8000000".
            // ketika masih di form itu tampilannya ada titiknya tapi waktu sudah di "pesan" tidak ada titiknya
            let value = input.value.replace(/\D/g, '');

            // Tampilkan dengan titik ribuan
            //input.value = new Intl.NumberFormat('id-ID').format(value);
            // Intl.NumberFormat('id-ID')→ format angka sesuai lokal Indonesia, artinya ribuan dipisah dengan titik(.), desimal dengan koma(, ).
            // .format(value)→ mengubah angka menjadi string yang mudah dibaca.
            // contoh : value = "8000000"→.format(value)→
            // "8.000.000"
            input.value = new Intl.NumberFormat('id-ID').format(value);
        }

        // Saat form submit, kita ubah kembali ke angka bersih
        document.querySelector('form').addEventListener('submit', function(e) {
            let hargaInput = document.getElementById('harga');
            hargaInput.value = hargaInput.value.replace(/\./g, ''); // hapus titik ribuan
        });
    </script>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('/vendor/libs/@form-validation/auto-focus.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/js/pages-auth.js') }}"></script>
</body>

</html>
