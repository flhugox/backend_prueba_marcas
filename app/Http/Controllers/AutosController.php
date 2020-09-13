<?php

namespace App\Http\Controllers;

use App\Auto;
use App\Autos;
use App\Http\Requests\CreateAutoRequest;
use App\Http\Requests\UpdateAutoRequest;
use App\Marca;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::all();

        foreach ($autos as $comment) {
            //
            $comment->marca =  Auto::find($comment->id_marca)->marca->marca;
        }
        return $autos;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAutoRequest $request)
    {
        //
        $input = $request->all();
        Auto::create($input);
        return response()->json([
            'res' => true,
            'mensaje' => 'Creado Correctamente'
        ], 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        //
        return $auto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutoRequest $request, Auto $auto)
    {
        //
        $input = $request->all();
        $auto->update($input);
        return response()->json([
            'res' => true,
            'mensaje' => 'Actualizado Correctamente'
        ], 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autos $autos)
    {

        //Auto::destroy($autos);


        Auto::destroy($autos);
        return response()->json([
            'res' => true,
            'mensaje' => 'Eliminado Correctamente'
        ], 200);
    }
}
