<?php

namespace App\Http\Controllers;

use App\Models\CatalogoProveedorRelProductoModel;
use Illuminate\Http\Request;

class CatalogoProveedorRelProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoProveedorRelProductoModel::all();
  
   
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
        $current_timestamp                          = date ('Y-m-d H:i:s'); 
        $proveedor_rel_producto                     = new CatalogoPaisModel;
        $proveedor_rel_producto->clave_proveedor    = $request['clave_proveedor'];
        $proveedor_rel_producto->clave_producto     = $request['clave_producto'];
        $proveedor_rel_producto->tiempo_entrega     = $request['tiempo_entrega'];     
        $proveedor_rel_producto->fuc                = $current_timestamp;
        $proveedor_rel_producto->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoProveedorRelProductoModel  $catalogoProveedorRelProductoModel
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id2)
    {
       return CatalogoProveedorRelProductoModel::where('clave_proveedor', '=', $id)
        ->where('clave_producto', '=', $id2)
        ->first();    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoProveedorRelProductoModel  $catalogoProveedorRelProductoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoProveedorRelProductoModel $catalogoProveedorRelProductoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoProveedorRelProductoModel  $catalogoProveedorRelProductoModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,$id2,Request $request)
    {
        $current_timestamp  = date ('Y-m-d H:i:s'); 
        CatalogoProveedorRelProductoModel::where('clave_proveedor', '=', $id)
        ->where('clave_producto', '=', $id2)
        ->first();  

        $proveedor_rel_producto->tiempo_entrega     = $request['tiempo_entrega'];     
        $proveedor_rel_producto->fuc                = $current_timestamp;
        $proveedor_rel_producto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoProveedorRelProductoModel  $catalogoProveedorRelProductoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id2)
    {
        CatalogoProveedorRelProductoModel::where('clave_proveedor', '=', $id)
        ->where('clave_producto', '=', $id2)
        ->first()->delete();  
    }
}
