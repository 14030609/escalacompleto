<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_pais
 * @property string $pais
 * @property string $activo_sn
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoEstado[] $catalogoEstados
 */
class CatalogoPaisModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_pais';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_pais';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['pais', 'activo_sn', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoEstados()
    {
        return $this->hasMany('App\Models\CatalogoEstado', 'clave_pais', 'clave_pais');
    }

    public $timestamps = false;
}
