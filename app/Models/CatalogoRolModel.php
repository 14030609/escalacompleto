<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_rol
 * @property string $descripcion
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoRolRelPermiso[] $catalogoRolRelPermisos
 * @property CatalogoUsuarioRelRol[] $catalogoUsuarioRelRols
 */
class CatalogoRolModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_rol';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_rol';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['descripcion', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoRolRelPermisos()
    {
        return $this->hasMany('App\Models\CatalogoRolRelPermiso', 'clave_rol', 'clave_rol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoUsuarioRelRols()
    {
        return $this->hasMany('App\Models\CatalogoUsuarioRelRol', 'clave_rol', 'clave_rol');
    }
}
