<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $fillable = [
        'name',
        'harga',
        'fasilitas',
        'status'
    ];

    public function booking ()
    {
        return $this->hasMany(Booking::class);
    }
}