<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_menu
 * @property int $clave_submenu
 * @property string $nombre
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoMenu $catalogoMenu
 * @property CatalogoRolPermisosRelMenu[] $catalogoRolPermisosRelMenus
 * @property CatalogoMenuRelEmpresa[] $catalogoMenuRelEmpresas
 */
class CatalogoMenuModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_menu';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_menu';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_submenu', 'nombre', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoMenu()
    {
        return $this->belongsTo('App\Models\CatalogoMenu', 'clave_submenu', 'clave_menu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoRolPermisosRelMenus()
    {
        return $this->hasMany('App\Models\CatalogoRolPermisosRelMenu', 'clave_menu', 'clave_menu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoMenuRelEmpresas()
    {
        return $this->hasMany('App\Models\CatalogoMenuRelEmpresa', 'clave_menu', 'clave_menu');
    }
}
