@extends('layouts.auth')

@section('title', 'Coffee Shop Baru | Hotel Aetheria')

@section('content')
    <div class="container my-5">

        <!-- Judul -->
        <h1 class="text-center mb-5">AETHERIA Kini Memiliki Coffee Shop Baru</h1>

        <!-- Section 1: Gambar di kiri, teks di kanan -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('images/coffeeshop1.jpg') }}" class="img-fluid rounded" alt="Coffee Shop HOTEL">
            </div>
            <div class="col-md-6">
                <h3>Suasana Hangat dan Nyaman</h3>
                <p>
                    Coffee Shop baru di HOTEL menghadirkan tempat yang nyaman untuk bersantai sambil menikmati kopi premium.
                    Desain modern dipadukan dengan nuansa hangat akan membuat pengalaman Anda semakin menyenangkan.
                </p>
            </div>
        </div>

        <!-- Section 2: Gambar di kanan, teks di kiri -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/coffeeshop2.jpg') }}" class="img-fluid rounded" alt="Interior Coffee Shop">
            </div>
            <div class="col-md-6 order-md-1">
                <h3>Menu Kopi Berkualitas</h3>
                <p>
                    Menyajikan berbagai pilihan kopi, mulai dari cappuccino, latte, hingga single origin specialty.
                    Lengkap dengan pastry dan camilan lezat, cocok untuk menemani waktu santai Anda.
                </p>
            </div>
        </div>

        <!-- Section 3: Gambar di kiri, teks di kanan -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('images/coffeeshop3.jpg') }}" class="img-fluid rounded" alt="Menu Coffee Shop">
            </div>
            <div class="col-md-6">
                <h3>Tempat Ideal untuk Berbagai Kesempatan</h3>
                <p>
                    Cocok untuk pertemuan bisnis, berkumpul bersama teman, atau sekadar menikmati waktu sendiri.
                    Pelayanan ramah dan suasana nyaman menjadikan Coffee Shop HOTEL pilihan terbaik bagi pengunjung.
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
