<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrdersRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           
            'clients_id'        => 'required|exists:clients,id',
            'order_date'       => 'required|date',
            'total_amount'     => 'required|numeric',
            'status'           => 'required|string',
            'payment_method'   => 'required|string',
            'shipping_address' => 'required|string',
        ];
    }
}