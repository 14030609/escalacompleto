<?php

namespace App\Http\Controllers;

use App\Models\CatalogoTipoMonedaModel;
use Illuminate\Http\Request;

class CatalogoTipoMonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoTipoMonedaModel::orderBy('clave_tipo_moneda','ASC')->get();
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
        $tipo_moneda               = new CatalogoTipoMonedaModel;
        $current_timestamp         = date ('Y-m-d H:i:s'); 
        $tipo_moneda->tipo_moneda  = $request['tipo_moneda'];
        $tipo_moneda->fecha_alta   = $current_timestamp;
        $tipo_moneda->fuc          = $current_timestamp;
        
        $tipo_moneda->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoTipoMonedaModel  $catalogoTipoMonedaModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_moneda=CatalogoTipoMonedaModel::findOrFail($id);
        return $tipo_moneda;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoTipoMonedaModel  $catalogoTipoMonedaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoTipoMonedaModel $catalogoTipoMonedaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoTipoMonedaModel  $catalogoTipoMonedaModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp           = date ('Y-m-d H:i:s'); 
        $tipo_moneda                 = CatalogoTipoMonedaModel::findOrFail($id);
        $tipo_moneda->tipo_moneda    = $request['tipo_moneda'];
        $tipo_moneda->fuc            = $current_timestamp;
        $tipo_moneda->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoTipoMonedaModel  $catalogoTipoMonedaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($idC)
    {
        $tipo_moneda=CatalogoTipoMonedaModel::findOrFail($id);
        $tipo_moneda->delete();
    }
}
