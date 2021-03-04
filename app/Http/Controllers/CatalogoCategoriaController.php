<?php

namespace App\Http\Controllers;

use App\Models\CatalogoCategoriaModel;
use Illuminate\Http\Request;

class CatalogoCategoriaController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoCategoriaModel::orderBy('clave_categoria','ASC')->get();
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
        $categoria                      = new CatalogoCategoriaModel;
        $current_timestamp              = date ('Y-m-d H:i:s'); 
        $categoria->categoria           = $request['categoria'];
        $categoria->clave_subcategoria  = $request['clave_subcategoria'];
        $categoria->fecha_alta          = $current_timestamp;
        $categoria->fuc                 = $current_timestamp;
        
        $categoria->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoCategoriaModel  $catalogoCategoriaModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria=CatalogoCategoriaModel::findOrFail($id);
        return $categoria;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoCategoriaModel  $catalogoCategoriaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoCategoriaModel $catalogoCategoriaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoCategoriaModel  $catalogoCategoriaModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp              = date ('Y-m-d H:i:s'); 
        $categoria                      =CatalogoCategoriaModel::findOrFail($id);
        $categoria->categoria           = $request['categoria'];
        $categoria->clave_subcategoria  = $request['clave_subcategoria']; 
        $categoria->fuc                 = $current_timestamp;

        $categoria->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoCategoriaModel  $catalogoCategoriaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=CatalogoCategoriaModel::findOrFail($id);
        $categoria->delete();
    }
}
