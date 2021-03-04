<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_marca
 * @property string $marca
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoProducto[] $catalogoProductos
 */
class CatalogoMarcaModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_marca';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_marca';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['marca', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoProductos()
    {
        return $this->hasMany('App\Models\CatalogoProducto', 'clave_marca', 'clave_marca');
    }
}
