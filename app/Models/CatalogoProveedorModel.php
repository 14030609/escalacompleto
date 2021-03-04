<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_proveedor
 * @property int $clave_domicilio
 * @property string $razon_social
 * @property string $nombre_proveedor
 * @property string $fecha_alta
 * @property string $fuc
 * @property string $observaciones
 * @property CatalogoDomicilio $catalogoDomicilio
 * @property CatalogoProveedorRelProducto[] $catalogoProveedorRelProductos
 * @property CatalogoInvetario[] $catalogoInvetarios
 */
class CatalogoProveedorModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_proveedor';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_proveedor';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['razon_social', 'fecha_alta', 'fuc', 'observaciones','clave_persona'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoDomicilio()
    {
        return $this->belongsTo('App\Models\CatalogoDomicilio', 'clave_domicilio', 'clave_domicilio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoProveedorRelProductos()
    {
        return $this->hasMany('App\Models\CatalogoProveedorRelProducto', 'clave_proveedor', 'clave_proveedor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoInvetarios()
    {
        return $this->hasMany('App\Models\CatalogoInvetario', 'clave_proveedor', 'clave_proveedor');
    }
}
