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
            $notifikasi = Booking::with('kamar')->latest()->get();
            $view->with('notifikasi', $notifikasi);
        });
    }
}
