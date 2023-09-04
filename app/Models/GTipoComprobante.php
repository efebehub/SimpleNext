<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GTipoComprobante
 *
 * @property $id
 * @property $descripcion
 * @property $tipocomprobante
 * @property $modulo
 * @property $fondos
 * @property $stock
 * @property $ctacte
 * @property $asiento
 * @property $iva
 * @property $impresion
 * @property $copias
 * @property $cae
 * @property $caetipodoc
 * @property $idtalonario
 * @property $idcuentacontable
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GTipoComprobante extends Model
{

    protected $table = "g_tipo_comprobante";
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
    protected $fillable = ['descripcion','tipocomprobante','modulo','fondos','stock','ctacte','asiento','iva','impresion','copias','cae','caetipodoc','idtalonario','idcuentacontable'];



}
