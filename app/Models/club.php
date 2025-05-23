<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $primaryKey = 'club_id';
    protected $fillable = [
        'nombre_prop',
        'apellido_prop',
        'ci_prop',
        'fecha_nac',
        'foto',
        'nombre_club',
        'tel_cel',
        'gmail',
        'abreviatura'
    ];
}
