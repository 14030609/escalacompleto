<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_permiso
 * @property string $descripcion_permiso
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoRolRelPermiso[] $catalogoRolRelPermisos
 */
class CatalogoPermisosModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_permiso';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_permiso';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['descripcion_permiso', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoRolRelPermisos()
    {
        return $this->hasMany('App\Models\CatalogoRolRelPermiso', 'clave_permiso', 'clave_permiso');
    }
}
