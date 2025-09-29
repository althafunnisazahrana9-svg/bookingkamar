@extends('layouts.auth')

@section('title', 'Yang Perlu Kamu Tahu Sebelum Berlibur')

@section('content')

    <div class="container my-5">

        <!-- Judul Postingan -->
        <div class="text-center mb-5">
            <h1 class="fw-bold">Yang Perlu Kamu Tahu Sebelum Berlibur</h1>
            <p class="text-muted">Tips dan panduan agar liburanmu menjadi lebih nyaman, aman, dan penuh kenangan indah.</p>
        </div>

        <!-- Section Teks di Kiri, Gambar di Kanan -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h3>Persiapan Sebelum Liburan</h3>
                <p>
                    Liburan adalah momen yang ditunggu-tunggu banyak orang. Namun, agar liburan berjalan lancar, ada
                    beberapa
                    hal yang perlu diperhatikan sebelum berangkat. Mulai dari memastikan dokumen perjalanan, melakukan
                    reservasi
                    akomodasi, hingga menyiapkan perlengkapan pribadi sesuai destinasi tujuan.
                </p>
                <p>
                    Jangan lupa juga untuk memperhatikan kesehatan dan kondisi tubuh sebelum bepergian, serta menyesuaikan
                    jadwal agar liburanmu lebih nyaman tanpa terburu-buru.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/holidays1.jpeg') }}" class="img-fluid rounded shadow" alt="Tips Liburan">
            </div>
        </div>

        <!-- Section Tambahan (gambar kiri teks kanan) -->
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6">
                <h3>Selama Liburan</h3>
                <p>
                    Saat liburan, penting untuk menjaga keamanan diri dan barang bawaan. Nikmati setiap momen dengan tenang,
                    tetapi tetap waspada pada lingkungan sekitar. Manfaatkan fasilitas yang tersedia di hotel atau destinasi
                    wisata untuk pengalaman yang lebih berkesan.
                </p>
                <p>
                    Cobalah kuliner khas daerah, kunjungi tempat populer, dan jangan lupa untuk mengabadikan momen
                    spesialmu.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/holidays2.jpg') }}" class="img-fluid rounded shadow" alt="Liburan Nyaman">
            </div>
        </div>

        <!-- Section Gambar Tambahan (aesthetic grid) -->
        <div class="row g-3 mb-5">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/holidays3.jpg') }}" class="card-img-top img-fluid"
                        style="height:250px; object-fit:cover;" alt="Pemandangan Indah">
                    <div class="card-body text-center">
                        <p class="card-text">Nikmati pemandangan indah yang menenangkan hati</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/holidays4.jpg') }}" class="card-img-top img-fluid"
                        style="height:250px; object-fit:cover;" alt="Wisata Kuliner">
                    <div class="card-body text-center">
                        <p class="card-text">Jelajahi wisata kuliner khas destinasi pilihanmu</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/holidays5.jpg') }}" class="card-img-top img-fluid"
                        style="height:250px; object-fit:cover;" alt="Aktivitas Liburan">
                    <div class="card-body text-center">
                        <p class="card-text">Berbagai aktivitas seru untuk mengisi waktu liburan</p>
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
