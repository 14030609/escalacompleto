<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_usuario
 * @property int $clave_rol
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoUsuario $catalogoUsuario
 * @property CatalogoRol $catalogoRol
 */
class CatalogoUsuarioRelRolModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_usuario_rel_rol';

    /**
     * @var array
     */
    protected $fillable = ['fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoUsuario()
    {
        return $this->belongsTo('App\Models\CatalogoUsuario', 'clave_usuario', 'clave_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoRol()
    {
        return $this->belongsTo('App\Models\CatalogoRol', 'clave_rol', 'clave_rol');
    }
}
