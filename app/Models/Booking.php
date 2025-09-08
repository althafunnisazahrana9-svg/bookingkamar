<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = [
        'kamar_id',
        'nama_pemesan',
        'email',
        'telp',
        'alamat',
        'ktp',
        'jumlah_tamu',
        'check_in',
        'harga',
        'status'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}