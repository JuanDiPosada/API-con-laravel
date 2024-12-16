<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;
    protected $table='mensajes';
    protected $fillable=[
        'contenido',
        'fecha_envio',
        'hora_envio',
        'id_remitente',
        'id_destinatario',
        'estado',
    ];
}
