<?php

use Illuminate\Support\Facades\Route;


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false
]);



Route::group([
    'middleware' => ['auth']
], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
    Route::resource('/booking', App\Http\Controllers\BookingController::class);

    Route::resource('/kamar', App\Http\Controllers\KamarController::class);

});
