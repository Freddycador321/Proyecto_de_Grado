<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $primaryKey = 'equipo_id';
    protected $fillable = [
        'nombre_eq',
        'estado',
        'nota',
        'categoria_id'
    ];
}
