<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'id_penjual', 
        'id_pembeli', 
        'id_produk', 
        'review', 
        'review_rating', 
        'review_response', 
        'status'
    ];

    // Relationship to User model for seller
    public function penjual()
    {
        return $this->belongsTo(Store::class, 'id_penjual');
    }

    // Relationship to User model for buyer
    public function pembeli()
    {
        return $this->belongsTo(User::class, 'id_pembeli');
    }

    // Relationship to Product model
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
