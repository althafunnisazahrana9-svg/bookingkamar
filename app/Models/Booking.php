<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Nama tabel di database yang dipakai model ini
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
        'tanggal_checkout',
        'harga',
        'metode_pembayaran',
        'status',
        'bukti_transfer',
    ];

    // Relasi ke tabel Kamar (1 booking milik 1 kamar)
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }

    // Relasi ke tabel Pembayaran (1 booking punya 1 data pembayaran)
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'booking_id');
    }

    // bookingan dihapus, data kamar kembali kosong
    // Event model: ketika booking dihapus → otomatis ubah status kamar jadi "kosong"
    protected static function booted()
    {
        static::deleted(function ($booking) {
            if ($booking->kamar) {
                // Update status kamar supaya tersedia lagi
                $booking->kamar->update(['status' => 'kosong']);
            }
        });
    }
}
