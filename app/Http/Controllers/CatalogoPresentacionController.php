<?php

namespace App\Http\Controllers;

use App\Models\CatalogoPresentacionModel;
use Illuminate\Http\Request;

class CatalogoPresentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoPresentacionModel::orderBy('clave_presentacion','ASC')->get();
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
        $presentacion               = new CatalogoPresentacionModel;
        $current_timestamp          = date ('Y-m-d H:i:s'); 
        $presentacion->medida       = $request['medida'];
        $presentacion->descripcion  = $request['descripcion'];
        $presentacion->fecha_alta   = $current_timestamp;
        $presentacion->fuc          = $current_timestamp;
        
        $presentacion->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoPresentacionModel  $catalogoPresentacionModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presentacion=CatalogoPresentacionModel::findOrFail($id);
        return $presentacion;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoPresentacionModel  $catalogoPresentacionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoPresentacionModel $catalogoPresentacionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoPresentacionModel  $catalogoPresentacionModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp  = date ('Y-m-d H:i:s'); 
        $presentacion               = CatalogoPresentacionModel::findOrFail($id);
        $presentacion->medida       = $request['medida'];
        $presentacion->descripcion  = $request['descripcion'];
        $presentacion->fuc          = $current_timestamp;
        $presentacion->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoPresentacionModel  $catalogoPresentacionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presentacion=CatalogoPresentacionModel::findOrFail($id);
        $presentacion->delete();
    }
}
