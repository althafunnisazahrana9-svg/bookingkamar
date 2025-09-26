@extends('layouts.auth')

@section('title', 'Aetheria: Kemewahan dan Kedamaian dalam Satu Tempat')

@section('content')
    <div class="container mt-5">

        <head>
            <!-- Judul Utama -->
            <div class="text-center mb-5">
                <h1 class="fw-bold" style="color:#000; z-index:10; position:relative;">
                    Aetheria: Kemewahan dan Kedamaian dalam Satu Tempat
                </h1>
                <p class="text-muted" style="z-index:10; position:relative;">
                    Nikmati pengalaman menginap yang tak terlupakan dengan fasilitas terbaik dan suasana nyaman.
                </p>
            </div>

            <!-- Favicon -->
            <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />
        </head>

        <!-- Section Teks di Kiri, Gambar di Kanan -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h3 class="mb-3">Kenikmatan dan Kedamaian</h3>
                <p>
                    Hotel Aetheria menghadirkan kemewahan dan kenyamanan dalam satu tempat. Setiap kamar dirancang dengan
                    detail elegan, dilengkapi fasilitas modern, dan menawarkan suasana tenang untuk pengalaman menginap yang
                    tak terlupakan.
                </p>
                <p>
                    Nikmati layanan spa, restoran premium, kolam renang, dan berbagai fasilitas rekreasi yang cocok untuk
                    seluruh keluarga.
                </p>
                <a href="{{ route('pages.form.index') }}" class="btn btn-primary mt-3">
                    <i class="bi bi-bag me-2"></i> Pesan Sekarang
                </a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/loby.jpg') }}" alt="Lobby Aetheria" class="img-fluid rounded shadow">
            </div>
        </div>

        <!-- Section Gambar Tambahan -->
        <div class="row g-3 mb-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/kamar.jpeg') }}" class="card-img-top" alt="Kamar Aetheria">
                    <div class="card-body text-center">
                        <p class="card-text">Kamar dengan pemandangan menakjubkan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/kolamrenang.jpg') }}" class="card-img-top" alt="Kolam Renang Aetheria">
                    <div class="card-body text-center">
                        <p class="card-text">Kolam renang yang mewah dan luas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/resto.jpeg') }}" class="card-img-top" alt="Restoran Aetheria">
                    <div class="card-body text-center">
                        <p class="card-text">Restoran premium dengan menu eksklusif</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Deskripsi Tambahan -->
        <div class="row mb-5">
            <div class="col-md-12">
                <p>
                    Setiap sudut Hotel Aetheria dirancang untuk menghadirkan kedamaian dan kepuasan bagi setiap pengunjung.
                    Dari layanan personal hingga fasilitas modern, semuanya disiapkan untuk membuat pengalaman menginap Anda
                    nyaman, menyenangkan, dan tak terlupakan.
                </p>
                <p>
                    Rasakan perpaduan sempurna antara kemewahan, kenyamanan, dan ketenangan hanya di Hotel Aetheria.
                </p>
            </div>
        </div>
        <!-- Tombol Kembali -->
        <div class="text-center mb-5">
            <a href="{{ route('booking.news') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle me-2"></i> Kembali
            </a>
        </div>
    </div>
@endsection
