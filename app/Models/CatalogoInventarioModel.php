<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_proveedor
 * @property int $clave_producto
 * @property int $clave_locacion
 * @property float $stock
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoProveedor $catalogoProveedor
 * @property CatalogoProducto $catalogoProducto
 * @property CatalogoLocacion $catalogoLocacion
 */
class CatalogoInventarioModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'oper_inventario';

    /**
     * @var array
     */
    protected $fillable = ['stock', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoProveedor()
    {
        return $this->belongsTo('App\Models\CatalogoProveedor', 'clave_proveedor', 'clave_proveedor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoProducto()
    {
        return $this->belongsTo('App\Models\CatalogoProducto', 'clave_producto', 'clave_producto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoLocacion()
    {
        return $this->belongsTo('App\Models\CatalogoLocacion', 'clave_locacion', 'clave_locacion');
    }
}
