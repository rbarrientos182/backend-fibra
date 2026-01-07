<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $fillable = [
        'linea_telefono',
        'correo',
        'celular_1',
        'celular_2',
        'img_visita',
        'img_correo',
        'img_whatsapp',
        'img_sms',
        'user_id'
    ];

    // Relación con el usuario que captura
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
