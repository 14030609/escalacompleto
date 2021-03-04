<?php

namespace App\Http\Controllers;

use App\Models\CatalogoPaisModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogoPaisController extends Controller
{

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
       return CatalogoPaisModel::orderBy('clave_pais','ASC')->get();
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
        $pais               = new CatalogoPaisModel;
        $current_timestamp  = date ('Y-m-d H:i:s'); 
        $pais->pais         = $request['pais'];
        $pais->activo_sn    = 'S';
        $pais->fecha_alta   = $current_timestamp;
        $pais->fuc          = $current_timestamp;
        
        $pais->save();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoPaisModel  $catalogoPaisModel 
     * @return \Illuminate\Http\Response
     */
   
    public function show($id)
    {
       $pais=CatalogoPaisModel::findOrFail($id);
       return $pais;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoPaisModel  $catalogoPaisModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoPaisModel $catalogoPaisModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoPaisModel  $catalogoPaisModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $current_timestamp  = date ('Y-m-d H:i:s'); 
        $pais               = CatalogoPaisModel::findOrFail($id);
        $pais->pais         = $request['pais'];
        $pais->activo_sn    = $request['activo_sn'];
        $pais->fuc          = $current_timestamp;
        $pais->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoPaisModel  $catalogoPaisModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $pais=CatalogoPaisModel::findOrFail($id);
        $pais->delete();
    }
}
