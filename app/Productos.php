<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    // solo esta linea ocupa para hacerla manual
    protected $table = 'productos';

    protected $fillable = [
        'id_categoria',
        'id_stock',
        'nombre',
        'descripcion',
        'estado',
        'id_marca'
    ];

    // escribimos los campos que queremos ocultar
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function categoria(){
        return $this->belongsTo(categoria::class, 'id_categoria');
    }
}
