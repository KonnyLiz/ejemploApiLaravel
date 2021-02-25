<?php

namespace App\Http\Controllers;

use App\estudiante;
use App\tblestudiante;
use Illuminate\Http\Request;

class TblestudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = tblestudiante::all();
        return $estudiantes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // asi como en symfony, este metodo la idea es devolver el formulario para
        // ingreso de datos a guardar
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

        $estudiante = tblestudiante::create($request->all());
        return $estudiante;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tblestudiante  $tblestudiante
     * @return \Illuminate\Http\Response
     */
    public function show(tblestudiante $tblestudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tblestudiante  $tblestudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(tblestudiante $tblestudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tblestudiante  $tblestudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tblestudiante $tblestudiante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tblestudiante  $tblestudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(tblestudiante $tblestudiante)
    {
        //
    }
}
