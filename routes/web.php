<?php

use Illuminate\Support\Facades\Route;

Route::get('/form', [App\Http\Controllers\FormController::class, 'index'])->name('form.index');
Route::post('/form', [App\Http\Controllers\FormController::class, 'store'])->name('form.store');



Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false
]);



Route::group([
 'middleware' => ['auth']
], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
    Route::resource('/pesan', App\Http\Controllers\PesanController::class);
    Route::resource('/booking', App\Http\Controllers\BookingController::class);

    Route::resource('/admin', App\Http\Controllers\AdminController::class);
    Route::resource('/kamar', App\Http\Controllers\KamarController::class);





    Route::get('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('ubah-profil');
    Route::post('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'update'])->name('ubah-profil.update');

});
