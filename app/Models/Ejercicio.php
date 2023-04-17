<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombreEjercicio',
        'infoEjercicio',
        'categoriaEjercicio',
    ];

    public $timestamps = false;

    // Funciones a partir de aqui
}
