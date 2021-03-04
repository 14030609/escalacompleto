<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_proveedor
 * @property int $clave_producto
 * @property string $fecha_alta
 * @property string $fuc
 * @property int $tiempo_entrega
 * @property CatalogoProveedor $catalogoProveedor
 * @property CatalogoProducto $catalogoProducto
 */
class CatalogoProveedorRelProductoModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_proveedor_rel_producto';

    /**
     * @var array
     */
    protected $fillable = ['fecha_alta', 'fuc', 'tiempo_entrega'];

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
}
