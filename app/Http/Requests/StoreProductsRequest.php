<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required|string|max:225',
            'description' =>'nullable|string',
            'price' =>'nullable|numeric|min:0',
            'stock' =>'nullable|numeric',
            'Categories_id' => 'required|exists:categories,id',
            'Orders_Id' => 'required|exists:Orders,id',

        ];
    }
}
