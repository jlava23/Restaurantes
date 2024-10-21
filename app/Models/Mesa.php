<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    // Campos que pueden ser llenados masivamente
    protected $fillable = [
        'numero',
        'capacidad',
        'ubicacion',
    ];

    // Relación uno a muchos con Reservas
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
