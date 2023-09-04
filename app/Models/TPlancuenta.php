<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TPlancuenta
 *
 * @property $idcuentacontable
 * @property $cuenta
 * @property $descripcion
 * @property $idcuentapadre
 * @property $asiento
 * @property $nivel
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TPlancuenta extends Model
{

    protected $table = "t_plancuentas";
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
        'id' => 'required',
		'descripcion' => 'required',
		'asiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','descripcion','idcuentapadre','asiento','nivel'];


}
