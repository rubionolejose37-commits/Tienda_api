<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'clients_id',
        'order_date',
        'total_amount',
        'status',
        'payment_method',
        'shipping_address'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'clients_id');
    }
}