<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory; protected $table = 'produks'; // pastikan ini sesuai dengan nama tabel Anda
    protected $primaryKey = 'id_produk';

    // Menambahkan kolom-kolom yang boleh diisi secara massal
    protected $fillable = [
        'kategori',
        'id_penjual',
        'id_ulasan',
        'nama_produk',
        'harga_produk',
        'desc_produk',
        'gambar_produk_1',
        'gambar_produk_2',
        'gambar_produk_3',
        'stok_produk',
        'rate',
    ];
}
