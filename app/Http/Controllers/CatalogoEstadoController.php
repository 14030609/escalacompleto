<?php

namespace App\Http\Controllers;

use App\Models\CatalogoEstadoModel;
use Illuminate\Http\Request;

class CatalogoEstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoEstadoModel::orderBy('clave_estado','ASC')->get();
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
    public function store(Request $request)
    {
        $estado               = new CatalogoEstadoModel;
        $current_timestamp    = date ('Y-m-d H:i:s'); 
        $estado->estado       = $request['estado'];
        $estado->clave_pais   = $request['clave_pais'];
        $estado->activo_sn    = 'S';
        $estado->fecha_alta   = $current_timestamp;
        $estado->fuc          = $current_timestamp;
        
        $estado->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoEstadoModel  $catalogoEstadoModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estado=CatalogoEstadoModel::findOrFail($id);
        return $estado;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoEstadoModel  $catalogoEstadoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoEstadoModel $catalogoEstadoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoEstadoModel  $catalogoEstadoModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp  = date ('Y-m-d H:i:s'); 
        $estado               =CatalogoEstadoModel::findOrFail($id);
        $estado->clave_pais   = $request['clave_pais'];
        $estado->estado         = $request['estado'];
        $estado->activo_sn    = $request['activo_sn'];
        $estado->fuc          = $current_timestamp;
        $estado->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoEstadoModel  $catalogoEstadoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado=CatalogoEstadoModel::findOrFail($id);
        $estado->delete();
    }
}
