<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_empresa
 * @property int $clave_usuario
 * @property int $clave_rol
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoEmpresa $catalogoEmpresa
 */
class CatalogoEmpresaUsuariosModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_empresa_usuarios';

    /**
     * @var array
     */
    protected $fillable = ['fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoEmpresa()
    {
        return $this->belongsTo('App\Models\CatalogoEmpresa', 'clave_empresa', 'clave_empresa');
    }
}
