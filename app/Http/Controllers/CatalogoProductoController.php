<?php

namespace App\Http\Controllers;

use App\Models\CatalogoProductoModel;
use Illuminate\Http\Request;

class CatalogoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenido = '';
        $arr = CatalogoProductoModel::orderBy('clave_producto','ASC')->get();
        foreach($arr as $a )
        {
            $contenido .= 
            " <tr> <td>".$a->codigo."</td>" .
            " <td>".$a->descripcion."</td>" .
            " <td class='hidden-350'>".$a->nombre_producto."</td>" .
            " <td class='hidden-1024'>".$a->fecha_alta."</td> " .
            "<td class='hidden-480'>" .
            "<button type='button' class='btn btn-sm btn-primary'><i class='glyphicon glyphicon-edit'></i></button>".
            "<button type='button' class='btn btn-sm btn-danger'><i class='glyphicon glyphicon-trash'></i></button>".
            "</td>".
            "</tr>";
        }
        return view('layout.body', compact('contenido'));
    
 //   return $arr;

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
        $producto                       = new CatalogoProductoModel;
        $current_timestamp              = date ('Y-m-d H:i:s'); 
        $producto->nombre_producto      = $request['nombre_producto'];
        $producto->categoria            = $request['categoria'];
        $producto->producto_suplente    = $request['producto_suplente'];
        $producto->presentacion         = $request['presentacion'];
        $producto->codigo               = $request['codigo'];
        $producto->descripcion          = $request['descripcion'];
        $producto->clave_tipo_moneda    = $request['clave_tipo_moneda'];
        $producto->impuesto             = $request['impuesto'];
        $producto->peso                 = $request['peso'];
        $producto->observaciones        = $request['observaciones'];
        $producto->fecha_alta           = $current_timestamp;
        $producto->fuc                  = $current_timestamp;
        
        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoProductoModel  $catalogoProductoModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=CatalogoProductoModel::findOrFail($id);
        return $producto;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoProductoModel  $catalogoProductoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoProductoModel $catalogoProductoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoProductoModel  $catalogoProductoModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp              = date ('Y-m-d H:i:s'); 
        $producto                       = CatalogoProductoModel::findOrFail($id);
        $producto->nombre_producto      = $request['nombre_producto'];
        $producto->categoria            = $request['categoria'];
        $producto->producto_suplente    = $request['producto_suplente'];
        $producto->presentacion         = $request['presentacion'];
        $producto->codigo               = $request['codigo'];
        $producto->descripcion          = $request['descripcion'];
        $producto->clave_tipo_moneda    = $request['clave_tipo_moneda'];
        $producto->impuesto             = $request['impuesto'];
        $producto->peso                 = $request['peso'];
        $producto->observaciones        = $request['observaciones'];
        $producto->fecha_alta           = $current_timestamp;
        $producto->fuc                  = $current_timestamp;
        $producto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoProductoModel  $catalogoProductoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=CatalogoProductoModel::findOrFail($id);
        $producto->delete();
    }
}
