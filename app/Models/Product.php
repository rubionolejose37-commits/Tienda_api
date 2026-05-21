<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'Categories_id');
    }

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'Categories_id',
        'Orders_Id'
    ];
}