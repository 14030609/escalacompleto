<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_persona
 * @property int $clave_domicilio
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $fecha_nacimiento
 * @property string $curp
 * @property string $rfc
 * @property string $correo
 * @property int $telefono1
 * @property int $telefono2
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoDomicilio $catalogoDomicilio
 * @property CatalogoProveedor[] $catalogoProveedors
 * @property CatalogoUsuario[] $catalogoUsuarios
 * @property CatalogoRepresentanteLegal[] $catalogoRepresentanteLegals
 */
class CatalogoPersonasModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_persona';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_persona';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_domicilio', 'nombre', 'apellido_paterno', 'apellido_materno', 'fecha_nacimiento', 'curp', 'rfc', 'correo', 'telefono1', 'telefono2', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoDomicilio()
    {
        return $this->belongsTo('App\Models\CatalogoDomicilio', 'clave_domicilio', 'clave_domicilio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoProveedors()
    {
        return $this->hasMany('App\Models\CatalogoProveedor', 'clave_persona', 'clave_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoUsuarios()
    {
        return $this->hasMany('App\Models\CatalogoUsuario', 'clave_persona', 'clave_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoRepresentanteLegals()
    {
        return $this->hasMany('App\Models\CatalogoRepresentanteLegal', 'clave_persona', 'clave_persona');
    }
}
