<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;

Route::get('/form', [App\Http\Controllers\FormController::class, 'index'])->name('pages.form.index');
Route::post('/form', [App\Http\Controllers\FormController::class, 'store'])->name('pages.form.store');



Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false
]);



Route::group([
 'middleware' => ['auth']
], function () {
    route::get('/home', function(){
        return redirect()->route('dashboard'); // mengarahkan ke dashboard
    })->name('home');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    
    Route::resource('/pesan', App\Http\Controllers\PesanController::class);
    Route::resource('/booking', App\Http\Controllers\BookingController::class);

    Route::resource('/admin', App\Http\Controllers\AdminController::class);
    Route::resource('/kamar', App\Http\Controllers\KamarController::class);





    Route::get('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('ubah-profil');
    Route::post('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'update'])->name('ubah-profil.update');

});
