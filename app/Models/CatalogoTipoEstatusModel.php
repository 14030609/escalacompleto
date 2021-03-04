<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_tipo_estatus
 * @property string $descripcion
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoUsuario[] $catalogoUsuarios
 */
class CatalogoTipoEstatusModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_tipo_estatus';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_tipo_estatus';

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
    public function catalogoUsuarios()
    {
        return $this->hasMany('App\Models\CatalogoUsuario', 'clave_tipo_estatus', 'clave_tipo_estatus');
    }
}
