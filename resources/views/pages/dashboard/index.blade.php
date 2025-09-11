@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>📊 Statistik Booking</h3>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Total Booking</h5>
                        <h3>{{ $booking }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Booking per Metode Pembayaran</h5>
                        <ul class="list-unstyled">
                            @foreach ($booking as $method => $total)
                                <li>{{ ucfirst($method) }}: {{ $total }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Booking per Kamar</h5>
                        <ul class="list-unstyled">
                            @foreach ($kamar as $kamar => $total)
                                <li>Kamar ID {{ $kamar }}: {{ $total }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
