<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    // Campos que pueden ser llenados masivamente
    protected $fillable = [
        'mesa_id',
        'cliente_id',
        'fecha_reserva',
        'hora_reserva',
        'numero_personas',
    ];

    // Relación con Mesa (muchas reservas pertenecen a una mesa)
    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    // Relación con Cliente (muchas reservas pertenecen a un cliente)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
