<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_proveedor
 * @property int $clave_producto
 * @property int $clave_locacion
 * @property float $precio_compra
 * @property float $precio_venta
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoProveedor $catalogoProveedor
 * @property CatalogoProducto $catalogoProducto
 * @property CatalogoLocacion $catalogoLocacion
 */
class CatalogoHistorialPreciosModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'oper_historial_precios';

    /**
     * @var array
     */
    protected $fillable = ['precio_compra', 'precio_venta', 'fecha_alta', 'fuc'];

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
