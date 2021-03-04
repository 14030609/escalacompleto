<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_producto
 * @property int $clave_marca
 * @property int $clave_presentacion
 * @property int $clave_categoria
 * @property int $clave_producto_suplente
 * @property string $codigo
 * @property string $descripcion
 * @property float $impuesto
 * @property float $peso
 * @property string $fecha_alta
 * @property string $fuc
 * @property string $observaciones
 * @property CatalogoMarca $catalogoMarca
 * @property CatalogoPresentacion $catalogoPresentacion
 * @property CatalogoCategorium $catalogoCategorium
 * @property CatalogoProducto $catalogoProducto
 * @property CatalogoProveedorRelProducto[] $catalogoProveedorRelProductos
 * @property CatalogoHistorialPrecio[] $catalogoHistorialPrecios
 * @property CatalogoInventario[] $catalogoInventarios
 */
class CatalogoProductoModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_producto';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_producto';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_marca','nombre_producto','clave_presentacion', 'clave_categoria', 'clave_producto_suplente', 'codigo', 'descripcion', 'impuesto', 'peso', 'fecha_alta', 'fuc', 'observaciones'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoMarca()
    {
        return $this->belongsTo('App\Models\CatalogoMarca', 'clave_marca', 'clave_marca');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoPresentacion()
    {
        return $this->belongsTo('App\Models\CatalogoPresentacion', 'clave_presentacion', 'clave_presentacion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoCategorium()
    {
        return $this->belongsTo('App\Models\CatalogoCategorium', 'clave_categoria', 'clave_categoria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoProducto()
    {
        return $this->belongsTo('App\Models\CatalogoProducto', 'clave_producto_suplente', 'clave_producto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoProveedorRelProductos()
    {
        return $this->hasMany('App\Models\CatalogoProveedorRelProducto', 'clave_producto', 'clave_producto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoHistorialPrecios()
    {
        return $this->hasMany('App\Models\CatalogoHistorialPrecio', 'clave_producto', 'clave_producto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoInventarios()
    {
        return $this->hasMany('App\Models\CatalogoInventario', 'clave_producto', 'clave_producto');
    }
}
