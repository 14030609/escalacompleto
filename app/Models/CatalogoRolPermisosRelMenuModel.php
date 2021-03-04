<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_menu
 * @property int $clave_permiso
 * @property int $clave_rol
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoMenu $catalogoMenu
 */
class CatalogoRolPermisosRelMenuModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_rol_permisos_rel_menu';

    /**
     * @var array
     */
    protected $fillable = ['fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoMenu()
    {
        return $this->belongsTo('App\Models\CatalogoMenu', 'clave_menu', 'clave_menu');
    }
}
