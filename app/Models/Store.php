<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Store extends Authenticatable
{
    use Notifiable;

    protected $table = 'stores';

    // Daftar atribut yang bisa diisi
    protected $fillable = [
        'name', 'about', 'logo', 'street', 'owner', 'email', 'phone', 'password',
    ];

    // Atribut yang harus disembunyikan
    protected $hidden = [
        'password', 'remember_token',
    ];
}
