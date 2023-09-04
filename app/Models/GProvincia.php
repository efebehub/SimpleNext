<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GProvincia
 *
 * @property $idprovincia
 * @property $descripcion
 * @property $codigo
 * @property $idpais
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GProvincia extends Model
{

    protected $table = "g_provincias";
    protected $primaryKey = 'idprovincia';
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
		'idprovincia' => 'required',
		'descripcion' => 'required',
		'idpais' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['idprovincia','descripcion','idpais'];


}
