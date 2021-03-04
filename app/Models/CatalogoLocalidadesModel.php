<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_localidad
 * @property int $clave_municipio
 * @property string $nombre_localidad
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoMunicipio $catalogoMunicipio
 * @property CatalogoDomicilio[] $catalogoDomicilios
 * @property CatalogoProducto[] $catalogoProductos
 */
class CatalogoLocalidadesModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_localidades';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_localidad';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_municipio', 'nombre_localidad', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoMunicipio()
    {
        return $this->belongsTo('App\Models\CatalogoMunicipio', 'clave_municipio', 'clave_municipio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoDomicilios()
    {
        return $this->hasMany('App\Models\CatalogoDomicilio', 'clave_localidad', 'clave_localidad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoProductos()
    {
        return $this->hasMany('App\Models\CatalogoProducto', 'clave_localidad', 'clave_localidad');
    }
}
