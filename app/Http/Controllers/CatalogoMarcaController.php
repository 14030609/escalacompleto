<?php

namespace App\Http\Controllers;

use App\Models\CatalogoMarcaModel;
use Illuminate\Http\Request;

class CatalogoMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoMarcaModel::orderBy('clave_marca','ASC')->get();
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
        $marca               = new CatalogoMarcaModel;
        $current_timestamp   = date ('Y-m-d H:i:s'); 
        $marca->nombre_marca = $request['nombre_marca'];
        $marca->fecha_alta   = $current_timestamp;
        $marca->fuc          = $current_timestamp;
        
        $marca->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoMarcaModel  $catalogoMarcaModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca=CatalogoMarcaModel::findOrFail($id);
        return $marca;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoMarcaModel  $catalogoMarcaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoMarcaModel $catalogoMarcaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoMarcaModel  $catalogoMarcaModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp   = date ('Y-m-d H:i:s'); 
        $marca               = CatalogoMarcaModel::findOrFail($id);
        $marca->nombre_marca = $request['nombre_marca'];
        $marca->fuc          = $current_timestamp;
        $marca->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoMarcaModel  $catalogoMarcaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca=CatalogoMarcaModel::findOrFail($id);
        $marca->delete();
    }
}
