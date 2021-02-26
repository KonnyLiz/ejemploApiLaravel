<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    // solo esta linea ocupa para hacerla manual
    protected $table = 'categoria';

    protected $fillable = [
        'nombre',
        'estado'
    ];

    // escribimos los campos que queremos ocultar
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
