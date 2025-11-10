<?php

namespace App\Providers;

use App\Models\Booking;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // supaya notifikasinya tampilannya sesuai yang booking itu berapa
        View::composer('*', function ($view) {
            $notifikasi = \App\Models\Pembayaran::with('booking.kamar')
                ->whereHas('booking')
                ->where('status', 'menunggu_konfirmasi')
                ->latest()
                ->get();

            $view->with('notifikasi', $notifikasi);
        });
    }
}
