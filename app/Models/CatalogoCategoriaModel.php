<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_categoria
 * @property int $clave_subcategoria
 * @property string $categoria
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoCategorium $catalogoCategorium
 * @property CatalogoProducto[] $catalogoProductos
 */
class CatalogoCategoriaModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_categoria';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_categoria';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_subcategoria', 'categoria', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogoCategorium()
    {
        return $this->belongsTo('App\Models\CatalogoCategorium', 'clave_subcategoria', 'clave_categoria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoProductos()
    {
        return $this->hasMany('App\Models\CatalogoProducto', 'clave_categoria', 'clave_categoria');
    }
}
