<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientsRequest extends FormRequest // Cambiado a plural para tu controlador
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Recupera de forma segura el ID del cliente desde la URL de la ruta
        $clientId = $this->route('client'); 

        return [
            'first_name'  => 'sometimes|string|max:100',
            'last_name'   => 'sometimes|string|max:100',
            // Ignora el ID del cliente actual para que te permita guardar sin cambiar el correo
            'email'       => 'sometimes|email|unique:clients,email,' . $clientId,
            'phone'       => 'sometimes|string|unique:clients,phone,' . $clientId,
            'address'     => 'sometimes|string|max:255',
            'city'        => 'sometimes|string|max:100',
            'document_id' => 'sometimes|string|unique:clients,document_id,' . $clientId,
            'is_active'   => 'boolean'
        ];
    }
}
