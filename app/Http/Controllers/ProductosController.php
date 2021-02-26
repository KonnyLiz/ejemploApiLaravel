<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{

    public function index(){
        $p = Productos::first();
        return response()->json([
            'res' => true,
            'mensaje' => [
                'producto' => $p,
                'categoriaInfo' => $p->categoria
            ]
        ], 200);
    }
}
