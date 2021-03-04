<?php

namespace App\Http\Controllers;

use App\Models\CatalogoUsuariosModel;
use App\Models\CatalogoUsuariosRelRol;
use Illuminate\Http\Request;

class CatalogoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return CatalogoUsuariosModel::orderBy('clave_usuario','ASC')->get();
    
        $data = CatalogoUsuariosModel::select('catalogo_usuario.clave_usuario', 'catalogo_usuario.correo','catalogo_usuario.contrasenia', 'catalogo_usuario_rel_rol.clave_rol','catalogo_rol.descripcion')
        ->join('catalogo_usuario_rel_rol', 'catalogo_usuario.clave_usuario', '=', 'catalogo_usuario_rel_rol.clave_usuario')
        ->join('catalogo_rol', 'catalogo_usuario_rel_rol.clave_rol', '=', 'catalogo_rol.clave_rol')
        ->get();

return $data;

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
        $arr = CatalogoProductoModel::orderBy('clave_usuario','ASC')->get();    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoUsuariosModel  $catalogoUsuariosModel
     * @return \Illuminate\Http\Response
     */
    public function show(CatalogoUsuariosModel $catalogoUsuariosModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoUsuariosModel  $catalogoUsuariosModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoUsuariosModel $catalogoUsuariosModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoUsuariosModel  $catalogoUsuariosModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatalogoUsuariosModel $catalogoUsuariosModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoUsuariosModel  $catalogoUsuariosModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatalogoUsuariosModel $catalogoUsuariosModel)
    {
        //
    }
}
