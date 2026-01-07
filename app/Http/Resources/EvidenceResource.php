<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class EvidenceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'               => $this->id,
            'linea_telefono'   => $this->linea_telefono,
            'correo'           => $this->correo,
            'celular_contacto_1' => $this->celular_1,
            'celular_contacto_2' => $this->celular_2,
            
            // Transformamos la ruta interna en una URL pública
            'evidencias' => [
                'visita'   => $this->img_visita ? asset('storage/' . $this->img_visita) : null,
                'correo'   => $this->img_correo ? asset('storage/' . $this->img_correo) : null,
                'whatsapp' => $this->img_whatsapp ? asset('storage/' . $this->img_whatsapp) : null,
                'sms'      => $this->img_sms ? asset('storage/' . $this->img_sms) : null,
            ],
            
            'registrado_por'   => $this->user->name,
            'fecha_creacion'   => $this->created_at->format('d-m-Y H:i:s'),
        ];
    }
}