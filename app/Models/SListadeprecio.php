<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SListadeprecio
 *
 * @property $id
 * @property $descripcion
 * @property $utilidad
 * @property $bonificacion1
 * @property $bonificacion2
 * @property $bonificacion3
 * @property $idejercicio
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SListadeprecio extends Model
{

    protected $table = "s_listadeprecios";
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
    protected $fillable = ['descripcion','utilidad','bonificacion1','bonificacion2','bonificacion3','idejercicio'];



}
