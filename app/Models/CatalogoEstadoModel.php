<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_estado
 * @property int $clave_pais
 * @property string $estado
 * @property string $activo_sn
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoPai $catalogoPai
 * @property CatalogoMunicipio[] $catalogoMunicipios
 */
class CatalogoEstadoModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_estado';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_estado';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_pais', 'estado', 'activo_sn', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoPai()
    {
        return $this->belongsTo('App\Models\CatalogoPai', 'clave_pais', 'clave_pais');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoMunicipios()
    {
        return $this->hasMany('App\Models\CatalogoMunicipio', 'clave_estado', 'clave_estado');
    }
}
