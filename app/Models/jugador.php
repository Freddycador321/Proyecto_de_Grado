<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $primaryKey = 'jugador_id';
    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'fecha_naci',
        'foto',
        'rama',
        'equipo_id'
    ];
}
