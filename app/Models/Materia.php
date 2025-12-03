<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['numero', 'nombre', 'logo', 'anio', 'division'];
}
