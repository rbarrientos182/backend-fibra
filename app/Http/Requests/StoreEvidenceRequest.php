<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvidenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // El middleware auth:sanctum ya se encarga de la seguridad
    }

    public function rules(): array
    {
        return [
            'linea_telefono' => ['required', 'string', 'regex:/^[0-9]{10}$/'], 
            'correo'         => ['required', 'email:rfc,dns'],
            'celular_1'      => ['required', 'string', 'regex:/^[0-9]{10}$/'],
            'celular_2'      => ['nullable', 'string', 'regex:/^[0-9]{10}$/'],
            
            // Validamos que sean imágenes, no pesen más de 4MB y sean formatos específicos
            'img_visita'     => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:4096'],
            'img_correo'     => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:4096'],
            'img_whatsapp'   => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:4096'],
            'img_sms'        => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:4096'],
        ];
    }

    public function messages(): array
    {
        return [
            'linea_telefono.regex' => 'La línea debe tener exactamente 10 dígitos numéricos.',
            'correo.email'         => 'El formato del correo electrónico no es válido.',
            'img_visita.image'     => 'El archivo de visita debe ser una imagen.',
            'img_visita.max'       => 'La imagen no debe pesar más de 4MB.',
        ];
    }
}