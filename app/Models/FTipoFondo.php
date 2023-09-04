<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FTipoFondo
 *
 * @property $id
 * @property $descripcion
 * @property $sumaencaja
 * @property $cotizacion
 * @property $esmoneda
 * @property $simbolo
 * @property $identidadfinanciera
 * @property $idcuentacontabled
 * @property $idcuentacontableh
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FTipoFondo extends Model
{

    protected $table = "f_tipo_fondo";
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
    protected $fillable = ['descripcion','sumaencaja','cotizacion','esmoneda','simbolo','identidadfinanciera','idcuentacontabled','idcuentacontableh'];



}
