<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Menampilkan daftar semua kamar
     *
     * Fungsi index() mengambil semua data kamar dari database,
     * diurutkan berdasarkan nama, lalu dikirim ke view
     * "pages.kamar.index".
     */
    public function index()
    {
        $kamar = Kamar::orderBy('nama')->get();

        return view('pages.kamar.index', compact('kamar'));
    }

    /**
     * * Menampilkan form untuk menambahkan kamar baru
     *
     * Fungsi create() hanya mengarahkan ke view
     * "pages.kamar.create" yang berisi form input.
     */
    public function create()
    {
        return view('pages.kamar.create');
    }

    /**
     *  * Menyimpan data kamar baru ke database
     *
     * Fungsi store() akan:
     * 1. Memvalidasi input dari form (nama, harga, fasilitas wajib diisi).
     * 2. Menyimpan data kamar ke tabel "kamar".
     * 3. Redirect kembali ke halaman daftar kamar dengan pesan sukses.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
        ]);

        Kamar::create($request->all());

        return redirect()->route('kamar.index')
            ->with('success', 'Data kamar berhasil ditambahkan');
    }

    /**
     * * Menampilkan detail dari kamar tertentu
     *
     * Fungsi show() akan mencari kamar berdasarkan id,
     * jika ada maka ditampilkan di view "pages.kamar.show".
     */
    public function show(string $id)
    {
        $kamar = Kamar::findOrFail($id);

        return view('pages.kamar.show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
