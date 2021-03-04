<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_tipo_moneda
 * @property string $tipo_moneda
 * @property string $fecha_alta
 * @property string $fuc
 */
class CatalogoTipoMonedaModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_tipo_moneda';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_tipo_moneda';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['tipo_moneda', 'fecha_alta', 'fuc'];

}
