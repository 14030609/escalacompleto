<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_menu
 * @property int $clave_empresa
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoMenu $catalogoMenu
 * @property CatalogoEmpresa $catalogoEmpresa
 */
class CatalogoMenuRelEmpresaModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_menu_rel_empresa';

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoEmpresa()
    {
        return $this->belongsTo('App\Models\CatalogoEmpresa', 'clave_empresa', 'clave_empresa');
    }
}
