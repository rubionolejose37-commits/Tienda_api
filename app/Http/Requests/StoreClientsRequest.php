<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|string|unique:clients,phone',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'document_id' => 'required|string|unique:clients,document_id',
            'is_active' => 'boolean'
        ];
    }
}