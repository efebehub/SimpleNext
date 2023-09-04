<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GTalonario
 *
 * @property $id
 * @property $descripcion
 * @property $numero1
 * @property $numero2
 * @property $letra
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GTalonario extends Model
{
    protected $table = "g_talonario";
    public $timestamps = false;
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','numero1','numero2','letra'];



}
