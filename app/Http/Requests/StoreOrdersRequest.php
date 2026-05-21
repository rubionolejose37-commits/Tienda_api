<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // IMPORTANTE: si está en false, NO deja crear nada
    }

    public function rules(): array
    {
        return [
              'clients_id' => 'required|exists:clients,id',
        'order_date' => 'required|date',
        'total_amount' => 'required|numeric',
        'status' => 'required|string',
        'payment_method' => 'required|string',
        'shipping_address' => 'required|string',
        ];
    }
}