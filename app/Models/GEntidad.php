<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class GEntidade
 *
 * @property $id
 * @property $idlistadeprecios
 * @property $idvendedor
 * @property $idtipoiva
 * @property $nombre
 * @property $domicilio
 * @property $telefono
 * @property $email
 * @property $barrio
 * @property $idlocalidad
 * @property $cuit
 * @property $iibb
 * @property $fechanacimiento
 * @property $lugarnacimiento
 * @property $comentario
 * @property $foto
 * @property $idprovincia
 * @property $esempleado
 * @property $idlogin
 * @property $idcuentacontable
 * @property $cbu
 * @property $escliente
 * @property $esproveedor
 * @property $estransporte
 * @property $esentfin
 * @property $esagencia
 * @property $esvendedor
 * @property $esconsecionario
 * @property $idejercicio
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GEntidad extends Model
{

    protected $table = "g_entidades";
    public $timestamps = false;

    public function getNombreAttribute($value) 
    {
        return ucwords($value);
    }
    public function setNombreAttribute($value) 
    {
        $this->attributes['nombre']=ucwords($value);
    }

    
    static $rules = [
        'nombre' => 'required',
        'cuit' => 'required',
    ];

    protected $perPage = 20;

    public function localidades(): HasMany
    {
        return $this->hasMany(GLocalidad::class);
    }


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idlistadeprecios','idvendedor','idtipoiva','nombre','domicilio','telefono','email','barrio','idlocalidad','cuit','iibb','fechanacimiento','lugarnacimiento','comentario','foto','esempleado','idlogin','idcuentacontable','cbu','escliente','esproveedor','estransporte','esentfin','esagencia','esvendedor','esconsecionario','idejercicio'];



}
