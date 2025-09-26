<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengunjung extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengunjung';

    protected $fillable = [
        'name',
        'email',
        'no_hp',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
