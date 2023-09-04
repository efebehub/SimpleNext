<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GImpuesto
 *
 * @property $id
 * @property $descripcion
 * @property $porcentaje
 * @property $compras
 * @property $ventas
 * @property $codigowsfe
 * @property $idcuentacontabled
 * @property $idcuentacontableh
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GImpuesto extends Model
{

    protected $table = "g_impuestos";
    public $timestamps = false;

    public function getDescripcionAttribute($value) 
    {
        return ucwords($value);
    }
    public function setDescripcionAttribute($value) 
    {
        $this->attributes['descripcion']=ucwords($value);
    }

    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','porcentaje','compras','ventas','codigowsfe','idcuentacontabled','idcuentacontableh'];



}
