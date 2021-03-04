<?php

namespace App\Http\Controllers;

use App\Models\CatalogoEmpresaModel;
use Illuminate\Http\Request;

class CatalogoEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return  CatalogoEmpresaModel::orderBy('clave_empresa','ASC')->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoEmpresaModel  $catalogoEmpresaModel
     * @return \Illuminate\Http\Response
     */
    public function show(CatalogoEmpresaModel $catalogoEmpresaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoEmpresaModel  $catalogoEmpresaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoEmpresaModel $catalogoEmpresaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoEmpresaModel  $catalogoEmpresaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatalogoEmpresaModel $catalogoEmpresaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoEmpresaModel  $catalogoEmpresaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatalogoEmpresaModel $catalogoEmpresaModel)
    {
        //
    }
}
