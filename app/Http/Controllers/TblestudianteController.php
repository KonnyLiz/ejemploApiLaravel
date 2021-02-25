<?php

namespace App\Http\Controllers;

use App\estudiante;
use App\Http\Requests\UpdateEstudianteRequest;
use App\tblestudiante;
use Illuminate\Http\Request;
use TblestudianteSeeder;

class TblestudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $estudiantes = tblestudiante::where('nombre', 'like', '%' . $request->txtBuscar . '%')->get();
        } else {
            $estudiantes = tblestudiante::all();
        }

        return $estudiantes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // destinado para guardar nuevos datos

        tblestudiante::create($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'datos guardados'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tblestudiante  $tblestudiante
     * @return \Illuminate\Http\Response
     */
    public function show(tblestudiante $estudiante)
    {
        // para mostrar un solo registro
        return $estudiante;
    }

    public function update(UpdateEstudianteRequest $request, tblestudiante $estudiante)
    {
        $datos = $request->all();
        $estudiante->update($datos);

        return response()->json([
            'res' => true,
            'mensaje' => 'datos actualizados'
        ], 200);
    }

    // para borrar el registro
    // aunque no se borra, solo pasa a inactivo
    public function destroy(tblestudiante $estudiante)
    {
        if (tblestudiante::destroy($estudiante->id)){
            return response()->json([
                'res' => true,
                'mensaje' => 'borrado'
            ], 200);
        } else {
            return response()->json([
                'res' => false,
                'mensaje' => 'error'
            ], 200);
        }
        
    }
}
