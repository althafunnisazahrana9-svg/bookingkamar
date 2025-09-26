@extends('layouts.auth')

@section('title', 'Kuliner Istimewa untuk Setiap Momen')

@section('content')

    <div class="container my-5">

        <head>
            <!-- Favicon -->
            <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />
            <!-- Judul Postingan -->
            <div class="text-center mb-5">
                <h1 class="fw-bold">Kuliner Istimewa untuk Setiap Momen</h1>
                <p class="text-muted">Nikmati sajian lezat dan eksklusif yang membuat setiap momen lebih berkesan.</p>
            </div>
        </head>

        <!-- Section Teks di Kiri, Gambar di Kanan -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h3>Rasakan Keistimewaannya</h3>
                <p>
                    Setiap hidangan di restoran kami dibuat dari bahan-bahan pilihan dengan resep eksklusif, menciptakan
                    cita rasa
                    yang memanjakan lidah dan membuat setiap acara menjadi momen tak terlupakan.
                </p>
                <p>
                    Dari brunch santai hingga makan malam formal, kami hadirkan menu yang sempurna untuk setiap kesempatan.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/kuliner1.jpg') }}" class="img-fluid rounded shadow" alt="Kuliner Istimewa">
            </div>
        </div>

        <!-- Section Gambar Tambahan (opsional) -->
        {{-- style="height:250px; object-fit:cover;" (supaya ukuran images nya sama) --}}
        <div class="row g-3 mb-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/kuliner2.jpg') }}" class="card-img-top"
                        style="height:250px; object-fit:cover;" alt="Hidangan Penutup">
                    <div class="card-body text-center">
                        <p class="card-text">Hidangan penutup yang menggoda selera</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/kuliner3.jpg') }}" class="card-img-top"
                        style="height:250px; object-fit:cover;" alt="Makanan Utama">
                    <div class="card-body text-center">
                        <p class="card-text">Menu utama eksklusif untuk momen spesial</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/kuliner4.jpg') }}" class="card-img-top"
                        style="height:250px; object-fit:cover;" alt="Minuman Istimewa">
                    <div class="card-body text-center">
                        <p class="card-text">Minuman istimewa untuk menemani hidangan</p>
                    </div>
                </div>
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
