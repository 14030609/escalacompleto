<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_domicilio
 * @property int $clave_municipio
 * @property int $clave_pais
 * @property int $clave_estado
 * @property int $clave_localidad
 * @property string $calle
 * @property string $no_exterior
 * @property string $no_interior
 * @property string $colonia
 * @property string $referencia
 * @property int $codigo_postal
 * @property string $latitud
 * @property string $longitud
 * @property string $fecha_alta
 * @property string $fuc
 * @property string $observaciones
 * @property CatalogoMunicipio $catalogoMunicipio
 * @property CatalogoPai $catalogoPai
 * @property CatalogoEstado $catalogoEstado
 * @property CatalogoLocalidade $catalogoLocalidade
 * @property CatalogoLocacion[] $catalogoLocacions
 * @property CatalogoProveedor[] $catalogoProveedors
 */
class CatalogoDomicilioModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_domicilio';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_domicilio';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_municipio', 'clave_pais', 'clave_estado', 'clave_localidad', 'calle', 'no_exterior', 'no_interior', 'colonia', 'referencia', 'codigo_postal', 'latitud', 'longitud', 'fecha_alta', 'fuc', 'observaciones'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoMunicipio()
    {
        return $this->belongsTo('App\Models\CatalogoMunicipio', 'clave_municipio', 'clave_municipio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoPai()
    {
        return $this->belongsTo('App\Models\CatalogoPai', 'clave_pais', 'clave_pais');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoEstado()
    {
        return $this->belongsTo('App\Models\CatalogoEstado', 'clave_estado', 'clave_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoLocalidade()
    {
        return $this->belongsTo('App\Models\CatalogoLocalidade', 'clave_localidad', 'clave_localidad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoLocacions()
    {
        return $this->hasMany('App\Models\CatalogoLocacion', 'clave_domicilio', 'clave_domicilio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoProveedors()
    {
        return $this->hasMany('App\Models\CatalogoProveedor', 'clave_domicilio', 'clave_domicilio');
    }
}
