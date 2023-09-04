<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class GLocalidad
 *
 * @property $id
 * @property $descripcion
 * @property $cp
 * @property $idprovincia
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GLocalidad extends Model
{

    protected $table = "g_localidades";
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
		'idprovincia' => 'required',
    ];

    protected $perPage = 20;

    public function provincias(): HasMany
    {
        return $this->hasMany(GProvincia::class, 'idprovincia', 'idprovincia');
    }


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','descripcion','cp','idprovincia'];



}
