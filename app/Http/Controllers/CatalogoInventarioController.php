<?php

namespace App\Http\Controllers;

use App\Models\CatalogoInventarioModel;
use App\Models\CatalogoProveedorModel;
use App\Models\CatalogoProductoModel;
use Illuminate\Http\Request;

class CatalogoInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        return CatalogoInventarioModel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current_timestamp              = date ('Y-m-d H:i:s'); 
        $inventario                     = new CatalogoPaisModel;
        $inventario->clave_locacion     = $request['clave_locacion'];
        $inventario->clave_proveedor    = $request['clave_proveedor'];     
        $inventario->clave_proveedor    = $request['clave_proveedor'];     
        $inventario->clave_producto     = $request['clave_producto'];     
        $inventario->fecha_alta         = $current_timestamp;     
        $inventario->stock              = $request['stock'];     
        $inventario->reorder            = $request['reorder'];     
        $inventario->fuc                = $current_timestamp;
        $inventario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoInventarioModel  $CatalogoInventarioModel
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id2,$id3)
    {

//        return $id.' '.$id2.' '.$id3;
        /*return CatalogoInventarioModel::where('clave_proveedor', '=', $id)
        ->where('clave_producto','=', $id2)
        ->where('clave_locacion','=', $id3)
        ->get();    
*/

       /* return CatalogoInventarioModel::with(['CatalogoInventarioModel' => function ($query) {
            $query->with('catalogoProveedorModel');
        }])->get();
*/

       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoInventarioModel  $CatalogoInventarioModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoInventarioModel $CatalogoInventarioModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoInventarioModel  $CatalogoInventarioModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,$id2,$id3,Request $request)
    {
        $current_timestamp  = date ('Y-m-d H:i:s'); 
        return CatalogoInventarioModel::where('clave_locacion', '=', $id)
        ->where('clave_proveedor', '=', $id2)
        ->where('clave_producto', '=', $id3)
        ->first();    

        $inventario->clave_locacion     = $request['clave_locacion'];
        $inventario->clave_proveedor    = $request['clave_proveedor'];     
        $inventario->clave_producto     = $request['clave_producto'];     
        $inventario->fecha_alta         = $current_timestamp;     
        $inventario->stock              = $request['stock'];     
        $inventario->reorder            = $request['reorder'];     
        $inventario->fuc                = $current_timestamp;
        $inventario->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoInventarioModel  $CatalogoInventarioModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id2,$id3)
    {
        return CatalogoInventarioModel::where('clave_locacion', '=', $id)
        ->where('clave_proveedor', '=', $id2)
        ->where('clave_producto', '=', $id3)
        ->first()->delete();    
    }
}
