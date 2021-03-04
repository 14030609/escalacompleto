<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_presentacion
 * @property string $descripcion
 * @property string $medida
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoProducto[] $catalogoProductos
 */
class CatalogoPresentacionModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_presentacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_presentacion';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['descripcion', 'medida', 'fecha_alta', 'fuc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogoProductos()
    {
        return $this->hasMany('App\Models\CatalogoProducto', 'clave_presentacion', 'clave_presentacion');
    }
}
