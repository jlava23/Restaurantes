<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Campos que pueden ser llenados masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
    ];

    // Relación uno a muchos con Reservas
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
