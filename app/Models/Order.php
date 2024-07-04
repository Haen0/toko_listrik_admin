<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number', 'order_date', 'status', 'customer_name', 'total', 'product_name', 'product_price', 'quantity', 'payment_method', 'product_image'
    ];

    public function getStatusColorAttribute()
    {
        switch ($this->status) {
            case 'New':
                return 'text-blue-500';
            case 'Ready':
                return 'text-yellow-500';
            case 'Completed':
                return 'text-green-500';
            case 'Canceled':
                return 'text-red-500';
            default:
                return 'text-gray-500';
        }
    }

    public function getStatusTextAttribute()
    {
        switch ($this->status) {
            case 'New':
                return 'New Order';
            case 'Ready':
                return 'Ready For Pickup';
            case 'Completed':
                return 'Completed';
            case 'Canceled':
                return 'Canceled';
            default:
                return 'Unknown Status';
        }
    }
}
