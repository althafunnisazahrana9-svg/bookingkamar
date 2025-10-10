<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Konstruktor controller
     *
     * Saat class HomeController dipanggil,
     * middleware 'auth' dijalankan dulu.
     * Artinya semua method di controller ini hanya bisa diakses
     * oleh admin yang sudah login (authenticated).
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Menampilkan halaman dashboard aplikasi
     *
     * Fungsi index() akan mengembalikan view 'home',
     * yaitu tampilan utama setelah admin berhasil login.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
