<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = Kamar::orderBy('nama')->get();
        return view('pages.kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kamar.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'status' => 'required'
        ]);

        Kamar::create($request->all());
        return redirect()->route('kamar.index')
            ->with('success', 'Data kamar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kamar = Kamar::findOrfail($id);
        return view('pages.kamar.show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kamar = Kamar::findOrfail($id);
        return view('pages.kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'status' => 'required',
        ]);

        $kamar = Kamar::findOrfail($id);
        $kamar->update($request->all());
        return redirect()->route('kamar.index')
            ->with('success', 'Data kamar berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kamar = Kamar::findOrfail($id);
        $kamar->delete();
        return redirect()->route('kamar.index')
            ->with('success', 'Data kamar berhasil dihapus');
    }
}