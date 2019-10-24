<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use App;
use Carbon\Carbon;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = App\Clientes::all();
        return $clientes;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now("America/El_Salvador");
        $cliente = new App\Clientes;
        $cliente->codigo = $request->codigo;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->estado = $request->estado;
        $cliente->creado = $date->toDateTimeString();  
        $cliente->save();
        return $cliente;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = App\Clientes::find($id);
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = App\Clientes::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->estado = $request->estado;
        $cliente->creado = $request->creado;
        $cliente->save();
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($codigo)
    {
        $cliente = App\Clientes::find($codigo);
        $cliente->delete();
        return new App\Clientes;
        
    }
}
