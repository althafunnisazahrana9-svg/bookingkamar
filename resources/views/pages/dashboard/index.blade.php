@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>📊 Statistik Booking</h3>

        <div class="row mt-4">
            <!-- Card Booking -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Total Booking</h5>
                        <h3>{{ $totalBooking }}</h3>
                    </div>
                </div>
            </div>

            <!-- Card Metode Pembayaran -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Booking per Metode Pembayaran</h5>
                        <ul class="list-unstyled">
                            @foreach ($bookingPerMetode as $method => $total)
                                <li>{{ ucfirst($method) }}: {{ $total }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card Booking per Kamar -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Booking per Kamar</h5>
                        <ul class="list-unstyled">
                            @foreach ($bookingPerKamar as $kamar => $total)
                                <li>Kamar {{ $kamar }}: {{ $total }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <!-- Grafik Booking Harian -->
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">📊 Grafik Booking Harian</h6>
                    <canvas id="booking-chart"></canvas>
                </div>
            </div>

            <!-- Status Pembayaran (Pie) -->
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">💰 Proporsi Status Pembayaran</h6>
                    <canvas id="payment-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart End -->

    <!-- Statistik Garis -->
    <div class="col-sm-12 col-xl-12 mt-4">
        <div class="bg-light rounded h-100 p-4 shadow-sm">
            <h6 class="mb-4">📈 Statistik Garis (Trend Aktivitas Booking)</h6>
            <canvas id="statistik-chart"></canvas>
        </div>
    </div>
    <!-- Chart End -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Chart Booking Harian
        const ctxBooking = document.getElementById('booking-chart').getContext('2d');
        new Chart(ctxBooking, {
            type: 'bar',
            data: {
                labels: {!! json_encode($bookingPerMetode->keys()) !!},
                datasets: [{
                    label: 'Jumlah Booking',
                    data: {!! json_encode($bookingPerMetode->values()) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.6)'
                }]
            }
        });

        // Chart Status Pembayaran (Pie)
        const ctxPayment = document.getElementById('payment-chart').getContext('2d');
        new Chart(ctxPayment, {
            type: 'pie',
            data: {
                labels: {!! json_encode(
                    $statusPembayaran->keys()->map(function ($key) {
                        return ucwords(str_replace('_', ' ', $key));
                    }),
                ) !!}, // label otomatis dari DB

                datasets: [{
                    data: {!! json_encode($statusPembayaran->values()) !!}, // jumlah otomatis
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)'
                    ]
                }]
            }
        });


        // === Statistik Garis (Line Chart) ===
        const ctxStatistik = document.getElementById('statistik-chart').getContext('2d');

        // Buat gradient lembut
        const gradient = ctxStatistik.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(54, 162, 235, 0.4)');
        gradient.addColorStop(1, 'rgba(54, 162, 235, 0)');

        new Chart(ctxStatistik, {
            type: 'line',
            data: {
                labels: {!! json_encode($pendapatanPerHari->keys()->map(fn($t) => Carbon\Carbon::parse($t)->format('d'))) !!},
                datasets: [{
                    label: 'Total Aktivitas Booking (per Hari)',
                    data: {!! json_encode($pendapatanPerHari->values()) !!},
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointBackgroundColor: 'rgba(54, 162, 235, 1)'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Statistik Aktivitas Booking Bulan Ini'
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Tanggal (1–31)'
                        },
                        ticks: {
                            stepSize: 1
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Aktivitas'
                        }
                    }
                }
            }
        });
    </script>
@endsection
