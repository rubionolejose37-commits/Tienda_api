<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'sometimes|string|max:100',
            'last_name' => 'sometimes|string|max:100',
            'email' => 'sometimes|email|unique:clients,email,' . $this->id,
            'phone' => 'sometimes|string|unique:clients,phone,' . $this->id,
            'address' => 'sometimes|string|max:255',
            'city' => 'sometimes|string|max:100',
            'document_id' => 'sometimes|string|unique:clients,document_id,' . $this->id,
            'is_active' => 'boolean'
        ];
    }
}
