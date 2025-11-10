<?php

namespace App\Providers;

use App\Models\Booking;
use App\Models\Pembayaran;
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
            $notifikasi = Pembayaran::with('booking.kamar')
                ->whereIn('status', ['belum_bayar', 'lunas', 'menunggu_konfirmasi'])
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();

            $view->with('notifikasi', $notifikasi);
        });
    }
}
