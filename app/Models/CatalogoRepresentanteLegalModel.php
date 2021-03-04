<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $clave_representante_legal
 * @property int $clave_persona
 * @property string $observaciones
 * @property string $fecha_alta
 * @property string $fuc
 * @property CatalogoPersona $catalogoPersona
 * @property CatalogoEmpresa[] $catalogoEmpresas
 */
class CatalogoRepresentanteLegalModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'catalogo_representante_legal';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'clave_representante_legal';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clave_persona', 'observaciones', 'fecha_alta', 'fuc'];

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
    public function catalogoEmpresas()
    {
        return $this->hasMany('App\Models\CatalogoEmpresa', 'clave_representante_legal', 'clave_representante_legal');
    }
}
