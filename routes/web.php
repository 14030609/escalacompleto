<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\CatalogoProveedorRelProductoController;
use App\Http\Controllers\CatalogoInventarioController;

//use App\Http\Controllers\CatalogoProductoController;
Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/login', function ()
{
    return view('pages.login');
});

Route::get('/inventarios2', function ()
{
    return view('layout.body');
});

Route::get('/tabla/{id}', function ()
{
	return view('layout.table');
})->middleware('auth')->name('ruta-de-tablas');


Route:: apiResource('/paises',CatalogoPaisController::class );

//Route:: apiResource('/proveedor_rel_producto', CatalogoProveedorRelProductoController::class );


Route::get('/proveedor_rel_producto', [CatalogoProveedorRelProductoController::class, 'index']);
Route::get('/proveedor_rel_producto/{id}/{id2}', [CatalogoProveedorRelProductoController::class, 'show']);
Route::post('/proveedor_rel_producto', [CatalogoProveedorRelProductoController::class, 'store']);
Route::put('/proveedor_rel_producto/{id}/{id2}', [CatalogoProveedorRelProductoController::class, 'update']);
Route::delete('/proveedor_rel_producto/{id}/{id2}', [CatalogoProveedorRelProductoController::class, 'destroy']);

Route::get('/inventarios', [CatalogoInventarioController::class, 'index']);
Route::get('/inventarios/{id}/{id2}/{id3}', [CatalogoInventarioController::class, 'show']);
Route::post('/inventarios', [CatalogoInventarioController::class, 'store']);
Route::put('/inventarios/{id}/{id2}/{id3}', [CatalogoInventarioController::class, 'update']);
Route::delete('/inventarios/{id}/{id2}', [CatalogoInventarioController::class, 'destroy']);





Route:: apiResource('/usuarios',CatalogoUsuarioController::class );
Route:: apiResource('/locaciones',CatalogoLocacionesController::class );
Route:: apiResource('/proveedores',CatalogoProveedorController::class );
Route:: apiResource('/productos',CatalogoProductoController::class );

Route:: apiResource('/empresas',CatalogoEmpresaController::class );

//Route:: apiResource('/inventarios',CatalogoInventarioController::class );
