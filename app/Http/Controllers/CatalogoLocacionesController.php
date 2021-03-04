<?php

namespace App\Http\Controllers;

use App\Models\CatalogoLocacionesModel;
use Illuminate\Http\Request;

class CatalogoLocacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoLocacionesModel::orderBy('clave_locacion','ASC')->get();
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
        $locacion                   = new CatalogoLocacionesModel;
        $current_timestamp          = date ('Y-m-d H:i:s'); 
        $locacion->nombre_locacion  = $request['nombre_locacion'];
        $locacion->clave_domicilio  = $request['clave_domicilio'];
        $locacion->observaciones    = $request['observaciones'];
        $locacion->sucursalSN       = $request['secursalSN'];
        $locacion->fecha_alta       = $current_timestamp;
        $locacion->fuc              = $current_timestamp;
        
        $locacion->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoLocacionesModel  $catalogoLocacionesModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $locacion=CatalogoLocacionesModel::findOrFail($id);
        return $locacion;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoLocacionesModel  $catalogoLocacionesModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoLocacionesModel $catalogoLocacionesModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoLocacionesModel  $catalogoLocacionesModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp          = date ('Y-m-d H:i:s'); 
        $locacion                   = CatalogoLocacionesModel::findOrFail($id);
        $locacion->nombre_locacion  = $request['nombre_locacion'];
        $locacion->clave_domicilio  = $request['clave_domicilio'];
        $locacion->observaciones    = $request['observaciones'];
        $locacion->sucursalSN       = $request['secursalSN'];
        $locacion->fuc              = $current_timestamp;
        $locacion->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoLocacionesModel  $catalogoLocacionesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locacion=CatalogoLocacionesModel::findOrFail($id);
        $locacion->delete();
    }
}
