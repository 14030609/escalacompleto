<?php

namespace App\Http\Controllers;

use App\Models\CatalogoHistorialPreciosModel;
use Illuminate\Http\Request;

class CatalogoHistorialPreciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoHistorialPreciosModel::all();
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
        $historial                  = new CatalogoHistorialPreciosModel;
        $current_timestamp          = date ('Y-m-d H:i:s'); 
        $historial->locacion        = $request['locacion'];
        $historial->producto        = $request['producto'];
        $historial->proveedor       = $request['proveedor'];
        $historial->precio_compra   = $request['precio_compra'];
        $historial->precio_venta    = $request['precio_venta'];
        $historial->fecha_alta      = $current_timestamp;
        $historial->fuc             = $current_timestamp;
        
        $historial->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoHistorialPreciosModel  $catalogoHistorialPreciosModel
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id2,$id3)
    {
        return CatalogoHistorialPreciosModel::where('clave_locacion', '=', $id)
        ->where('clave_proveedor', '=', $id2)
        ->where('clave_producto', '=', $id3)
        ->first();    
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoHistorialPreciosModel  $catalogoHistorialPreciosModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoHistorialPreciosModel $catalogoHistorialPreciosModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoHistorialPreciosModel  $catalogoHistorialPreciosModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,$id2,$id3,Request $request)
    {
        $current_timestamp  = date ('Y-m-d H:i:s'); 
        return CatalogoHistorialPreciosModel::where('clave_locacion', '=', $id)
        ->where('clave_proveedor', '=', $id2)
        ->where('clave_producto', '=', $id3)
        ->first();    

        $historial->clave_locacion     = $request['clave_locacion'];
        $historial->clave_proveedor    = $request['clave_proveedor'];     
        $historial->clave_producto     = $request['clave_producto'];     
        $historial->precio_compra      = $request['precio_venta'];     
        $historial->precio_venta       = $request['precio_compra'];     
        $historial->fecha_alta         = $current_timestamp;     
        $historial->fuc                = $current_timestamp;
        $historial->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoHistorialPreciosModel  $catalogoHistorialPreciosModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id2,$id3)
    {
        return CatalogoHistorialPreciosModel::where('clave_locacion', '=', $id)
        ->where('clave_proveedor', '=', $id2)
        ->where('clave_producto', '=', $id3)
        ->first()->delete();    
    }
}
