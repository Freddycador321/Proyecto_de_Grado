<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
    use HasFactory;
    protected $primaryKey = 'arbitro_id';
    protected $fillable = [
        'nombre_arb',
        'apellido_arb',
        'ci_arb',
        'fecha_nac_arb',
        'foto',
        'nivel',
        'cel_arb',
        'gmail_arb',
        'estado',
        'nota'
    ];
}
