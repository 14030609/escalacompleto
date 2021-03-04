<?php

namespace App\Http\Controllers;

use App\Models\CatalogoDomicilioModel;
use Illuminate\Http\Request;

class CatalogoDomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoDomicilioModel::orderBy('clave_domicilio','ASC')->get();
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
        $domicilio                  = new CatalogoDomicilioModel;
        $current_timestamp          = date ('Y-m-d H:i:s'); 
        $domicilio->domicilio       = $request['domicilio'];
        $domicilio->calle           = $request['calle'];
        $domicilio->no_exterior     = $request['no_exterior'];
        $domicilio->no_interior     = $request['no_interior'];
        $domicilio->calonia         = $request['colonia'];
        $domicilio->referencia      = $request['referencia'];
        $domicilio->codigo_postal   = $request['codigo_postal'];
        $domicilio->clave_localidad = $request['clave_localidad'];
        $domicilio->clave_municipio = $request['clave_municipio'];
        $domicilio->latitud         = $request['latitud'];
        $domicilio->longitud        = $request['longitud'];
        $domicilio->clave_pais      = $request['clave_pais'];
        $domicilio->clave_estado    = $request['clave_estado'];
        $domicilio->observaciones   = $request['observaciones'];
        $domicilio->fecha_alta      = $current_timestamp;
        $domicilio->fuc             = $current_timestamp;
        
        $domicilio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoDomicilioModel  $catalogoDomicilioModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $domicilio=CatalogoDomicilioModel::findOrFail($id);
        return $domicilio;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoDomicilioModel  $catalogoDomicilioModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoDomicilioModel $catalogoDomicilioModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoDomicilioModel  $catalogoDomicilioModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp  = date ('Y-m-d H:i:s'); 
        $domicilio               =CatalogoDomicilioModel::findOrFail($id);
        $domicilio->domicilio       = $request['domicilio'];
        $domicilio->calle           = $request['calle'];
        $domicilio->no_exterior     = $request['no_exterior'];
        $domicilio->no_interior     = $request['no_interior'];
        $domicilio->calonia         = $request['colonia'];
        $domicilio->referencia      = $request['referencia'];
        $domicilio->codigo_postal   = $request['codigo_postal'];
        $domicilio->clave_localidad = $request['clave_localidad'];
        $domicilio->clave_municipio = $request['clave_municipio'];
        $domicilio->latitud         = $request['latitud'];
        $domicilio->longitud        = $request['longitud'];
        $domicilio->clave_pais      = $request['clave_pais'];
        $domicilio->clave_estado    = $request['clave_estado'];
        $domicilio->observaciones   = $request['observaciones'];
        $domicilio->fuc             = $current_timestamp;
        $domicilio->save();

    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoDomicilioModel  $catalogoDomicilioModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $domicilio=CatalogoDomicilioModel::findOrFail($id);
        $domicilio->delete();
    }
}
