<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_usuario
 * @property int $clave_tipo_estatus
 * @property int $clave_persona
 * @property string $contrasenia
 * @property string $codigo_oficial
 * @property string $foto_usuario
 * @property string $idioma
 * @property string $activo_sn
 * @property string $fecha_expiracion
 * @property string $fecha_activacion
 * @property string $fecha_alta
 * @property string $fuc
 * @property string $fecha_ultima_conexion
 * @property string $correo
 * @property CatalogoTipoEstatus $catalogoTipoEstatus
 * @property CatalogoPersona $catalogoPersona
 * @property CatalogoUsuarioRelRol[] $catalogoUsuarioRelRols
 */
class CatalogoUsuariosModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_usuario';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_usuario';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_tipo_estatus', 'clave_persona', 'contrasenia', 'codigo_oficial', 'foto_usuario', 'idioma', 'activo_sn', 'fecha_expiracion', 'fecha_activacion', 'fecha_alta', 'fuc', 'fecha_ultima_conexion', 'correo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoTipoEstatus()
    {
        return $this->belongsTo('App\Models\CatalogoTipoEstatus', 'clave_tipo_estatus', 'clave_tipo_estatus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoPersona()
    {
        return $this->belongsTo('App\Models\CatalogoPersona', 'clave_persona', 'clave_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoUsuarioRelRols()
    {
        return $this->hasMany('App\Models\CatalogoUsuarioRelRol', 'clave_usuario', 'clave_usuario');
    }
}
