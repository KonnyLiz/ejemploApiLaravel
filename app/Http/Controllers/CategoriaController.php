<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        //$cat = new categoria();

        // igualamos los campos que traen
        //$cat->nombre = $request->nombre;
        //$cat->estado = $request->estado;

        // guardamos los datos
        //$cat->save();

        categoria::create($request->all());

        return response()->json([
            'res' => true,
            'mensaje' => 'datos guardados'
        ], 200);
    }

    public function index(){
        // usando la relacion uno a muchos en la tabla categoria y productos
        $cat = categoria::find(1);
        return $cat->productos;
    }
}
