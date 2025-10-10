<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    // Nama tabel di database yang dipakai model ini
    protected $table = 'kamar';

    protected $fillable = [
        'nama',
        'harga',
        'fasilitas',
        'status',
    ];

    // Relasi: 1 kamar bisa punya banyak booking
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
