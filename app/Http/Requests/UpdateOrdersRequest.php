<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrdersRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'clients_id' => 'sometimes|exists:clients,id',
            'order_date' => 'sometimes|date',
            'total_amount' => 'sometimes|numeric',
            'status' => 'sometimes|string',
            'payment_method' => 'sometimes|string',
            'shipping_address' => 'sometimes|string',
        ];
    }
}
