@extends('layouts.auth')

@section('title', 'Romantisme di Setiap Detil')

@section('content')

    <div class="container my-5">

        <!-- Judul Postingan -->
        <div class="text-center mb-5">
            <h1 class="fw-bold">Romantisme di Setiap Detil</h1>
            <p class="text-muted">Rasakan pengalaman penuh romantisme di setiap sudut dan detil yang kami hadirkan untuk
                Anda.</p>
        </div>

        <!-- Section Teks di Kiri, Gambar di Kanan -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h3>Setiap Detil Membawa Romantisme</h3>
                <p>
                    Hotel dan restoran kami menghadirkan suasana yang elegan dan romantis di setiap sudut, mulai dari
                    dekorasi,
                    pencahayaan, hingga pelayanan personal yang membuat momen Anda bersama pasangan menjadi tak terlupakan.
                </p>
                <p>
                    Cocok untuk dinner spesial, anniversary, atau sekadar menikmati waktu berkualitas bersama orang
                    tersayang.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/romantisme1.jpeg') }}" class="img-fluid rounded shadow" alt="Romantisme">
            </div>
        </div>

        <!-- Section Gambar Tambahan (size sama) -->
        <div class="row g-3 mb-5">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/romantisme2.jpg') }}" class="card-img-top img-fluid"
                        style="height:250px; object-fit:cover;" alt="Dekorasi Romantis">
                    <div class="card-body text-center">
                        <p class="card-text">Dekorasi romantis yang menawan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/romantisme3.jpeg') }}" class="card-img-top img-fluid"
                        style="height:250px; object-fit:cover;" alt="Makan Malam Romantis">
                    <div class="card-body text-center">
                        <p class="card-text">Makan malam eksklusif untuk pasangan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/romantisme4.jpg') }}" class="card-img-top img-fluid"
                        style="height:250px; object-fit:cover;" alt="Suasana Romantis">
                    <div class="card-body text-center">
                        <p class="card-text">Suasana yang membawa romantisme di setiap detil</p>
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
