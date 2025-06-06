<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'categoria_id';
    protected $fillable = [
        'categoria',
        'rama',
        'club_id'
    ];
}
