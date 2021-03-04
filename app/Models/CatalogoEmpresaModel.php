<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_empresa
 * @property int $clave_domicilio
 * @property int $clave_representante_legal
 * @property string $nombre_empresa
 * @property string $rfc
 * @property string $razon_social
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoDomicilio $catalogoDomicilio
 * @property CatalogoRepresentanteLegal $catalogoRepresentanteLegal
 * @property CatalogoLocacion[] $catalogoLocacions
 * @property CatalogoEmpresaUsuario[] $catalogoEmpresaUsuarios
 * @property CatalogoMenuRelEmpresa[] $catalogoMenuRelEmpresas
 */
class CatalogoEmpresaModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_empresa';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_empresa';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_domicilio', 'clave_representante_legal', 'nombre_empresa', 'rfc', 'razon_social', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoDomicilio()
    {
        return $this->belongsTo('App\Models\CatalogoDomicilio', 'clave_domicilio', 'clave_domicilio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoRepresentanteLegal()
    {
        return $this->belongsTo('App\Models\CatalogoRepresentanteLegal', 'clave_representante_legal', 'clave_representante_legal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoLocacions()
    {
        return $this->hasMany('App\Models\CatalogoLocacion', 'clave_empresa', 'clave_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoEmpresaUsuarios()
    {
        return $this->hasMany('App\Models\CatalogoEmpresaUsuario', 'clave_empresa', 'clave_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoMenuRelEmpresas()
    {
        return $this->hasMany('App\Models\CatalogoMenuRelEmpresa', 'clave_empresa', 'clave_empresa');
    }
}
