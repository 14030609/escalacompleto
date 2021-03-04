<?php

namespace App\Http\Controllers;

use App\Models\CatalogoProveedorModel;
use Illuminate\Http\Request;

class CatalogoProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatalogoProveedorModel::orderBy('clave_proveedor','ASC')->get();        
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
        $proveedor                      = new CatalogoProveedorModel;
        $current_timestamp              = date ('Y-m-d H:i:s'); 
        $proveedor->nombre_proveedor    = $request['nombre_proveedor'];
        $proveedor->razon_social        = $request['razon_social'];
        $proveedor->clave_domicilio     = $request['clave_domicilio'];
        $proveedor->observaciones       = $request['observaciones'];
        $proveedor->rfc                 = $request['rfc'];
        $proveedor->fecha_alta          = $current_timestamp;
        $proveedor->fuc                 = $current_timestamp;
        
        $proveedor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoProveedorModel  $catalogoProveedorModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor=CatalogoProveedorModel::findOrFail($id);
        return $proveedor;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoProveedorModel  $catalogoProveedorModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoProveedorModel $catalogoProveedorModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoProveedorModel  $catalogoProveedorModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp              = date ('Y-m-d H:i:s'); 
        $proveedor                      = CatalogoProveedorModel::findOrFail($id);
        $proveedor->nombre_proveedor    = $request['nombre_proveedor'];
        $proveedor->razon_social        = $request['razon_social'];
        $proveedor->clave_domicilio     = $request['clave_domicilio'];
        $proveedor->observaciones       = $request['observaciones'];
        $proveedor->rfc                 = $request['rfc'];
        $proveedor->fecha_alta          = $current_timestamp;
        $proveedor->fuc                 = $current_timestamp;
        $proveedor->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoProveedorModel  $catalogoProveedorModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor=CatalogoProveedorModel::findOrFail($id);
        $proveedor->delete();
    }
}
