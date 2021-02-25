<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblestudiante extends Model
{
    // modelo de la tabla creada, esta se crea automaticamente
    // se escribe los campos que usaremos de nuestra tbl a la BD

    protected $fillable = ['nombre', 'activo'];
}
