<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'document_id',
        'is_active'
    ];

    /**
     * Obtener todas las órdenes asociadas con el cliente.
     */
    public function orders(): HasMany
    {
        // Apunta al modelo Order usando la llave foránea 'client_id'
        return $this->hasMany(Order::class, 'client_id');
    }
}