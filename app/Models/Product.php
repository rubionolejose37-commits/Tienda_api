<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function Category(){
        return $this-> belongsTo(Category::class, 'categories_id');
    }

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];
}