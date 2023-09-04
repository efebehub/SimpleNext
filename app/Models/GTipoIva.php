<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GTipoIva
 *
 * @property $id
 * @property $descripcion
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GTipoIva extends Model
{
    protected $table = "g_tipo_iva";
    public $timestamps = false;
    static $rules = [
        'descripcion' => 'required'
    ];

    public function getDescripcionAttribute($value) 
    {
        return ucwords($value);
    }
    public function setDescripcionAttribute($value) 
    {
        $this->attributes['descripcion']=ucwords($value);
    }

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];



}
