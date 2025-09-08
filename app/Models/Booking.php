<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = [
        'kamar_id',
        'nama_pemesan',
        'email',
        'telp',
        'alamat',
        'nik',
        'jumlah_tamu',
        'tanggal_checkin',
        'harga',
        'status',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}