<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_municipio
 * @property int $clave_estado
 * @property string $municipio
 * @property string $activo_sn
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoEstado $catalogoEstado
 * @property CatalogoDomicilio[] $catalogoDomicilios
 */
class CatalogoMunicipioModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_municipio';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_municipio';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_estado', 'municipio', 'activo_sn', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoEstado()
    {
        return $this->belongsTo('App\Models\CatalogoEstado', 'clave_estado', 'clave_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoDomicilios()
    {
        return $this->hasMany('App\Models\CatalogoDomicilio', 'clave_municipio', 'clave_municipio');
    }
}
