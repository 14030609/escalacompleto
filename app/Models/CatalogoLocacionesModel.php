<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_locacion
 * @property int $clave_domicilio
 * @property string $nombre_locacion
 * @property string $fecha_alta
 * @property string $fuc
 * @property string $sucursalSN
 * @property CatalogoDomicilio $catalogoDomicilio
 * @property CatalogoProducto[] $catalogoProductos
 * @property CatalogoInventario[] $catalogoInventarios
 */
class CatalogoLocacionesModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_locacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_locacion';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_domicilio', 'nombre_locacion', 'fecha_alta', 'fuc', 'sucursalSN','clave_empresa'];

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
    public function catalogoProductos()
    {
        return $this->hasMany('App\Models\CatalogoProducto', 'clave_locacion', 'clave_locacion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoInventarios()
    {
        return $this->hasMany('App\Models\CatalogoInventario', 'clave_locacion', 'clave_locacion');
    }
}
