<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Marca::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMarcaRequest $request)
    {
        //
        $input = $request->all();
        Marca::create($input);
        return response()->json([
            'res' => true,
            'mensaje' => 'Creado Correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
        return $marca;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarcaRequest $request, Marca $marca)
    {
        //
        $input = $request->all();
        $marca->update($input);
        return response()->json([
            'res' => true,
            'mensaje' => 'Actualizado Correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        Marca::destroy($marca);
        return response()->json([
            'res' => true,
            'mensaje' => 'Eliminado Correctamente'
        ], 200);
    }
}
