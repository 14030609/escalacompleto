<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_rol
 * @property int $clave_permiso
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoRol $catalogoRol
 * @property CatalogoPermiso $catalogoPermiso
 */
class CatalogoRolRelPermisoModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_rol_rel_permiso';

    /**
     * @var array
     */
    protected $fillable = ['fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoRol()
    {
        return $this->belongsTo('App\Models\CatalogoRol', 'clave_rol', 'clave_rol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoPermiso()
    {
        return $this->belongsTo('App\Models\CatalogoPermiso', 'clave_permiso', 'clave_permiso');
    }
}
