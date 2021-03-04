<?php

namespace App\Http\Controllers;

use App\Models\CatalogoMunicipioModel;
use Illuminate\Http\Request;

class CatalogoMunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoMunicipioModel::orderBy('clave_municipio','ASC')->get();
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
        $municipio               = new CatalogoMunicipioModel;
        $current_timestamp       = date ('Y-m-d H:i:s'); 
        $municipio->municipio    = $request['municipio'];
        $municipio->clave_estado = $request['clave_estado'];
        $municipio->fecha_alta   = $current_timestamp;
        $municipio->fuc          = $current_timestamp;
        
        $municipio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoMunicipioModel  $catalogoMunicipioModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio=CatalogoMunicipioModel::findOrFail($id);
        return $municipio;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoMunicipioModel  $catalogoMunicipioModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoMunicipioModel $catalogoMunicipioModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoMunicipioModel  $catalogoMunicipioModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp       = date ('Y-m-d H:i:s'); 
        $municipio               = CatalogoMunicipioModel::findOrFail($id);
        $municipio->municipio    = $request['municipio'];
        $municipio->clave_estado = $request['clave_estado'];
        $municipio->fuc          = $current_timestamp;
        $municipio->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoMunicipioModel  $catalogoMunicipioModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $municipio=CatalogoMunicipioModel::findOrFail($id);
        $municipio->delete();
    }
}
