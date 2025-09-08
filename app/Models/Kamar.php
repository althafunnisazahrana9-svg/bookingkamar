<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{

    protected $table = 'kamar';

    protected $fillable = [
        'nama',
        'harga',
        'fasilitas',
        'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}