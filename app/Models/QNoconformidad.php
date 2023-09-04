<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GEntidad;

class QNoconformidad extends Model
{
    use HasFactory;

    protected $table = "q_noconformidad";
    protected $primaryKey = 'idnoconformidad';

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
		'idnoconformidad' => 'required',
		'descripcion' => 'required',
		'idusuariogenera' => 'required',
		'fechagenera' => 'required',
		'idiusuariosoluciona' => 'required',
		'fechasolucion' => 'required',
		'tiponc' => 'required',
    ];

    protected $perPage = 20;

    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idnoconformidad',
                            'descripcion',
                            'idusuariogenera',
                            'fechagenera',
                            'tipo',
                            'idiusuariosoluciona',
                            'fechanecesidad',
                            'fechasolucion',
                            'solucionado',
                            'tiponc',
                            'tiposolucion',
                            'idnc',
                            'observacion',
                            'conclusion'];



    public function ncpadre()
    {
        return $this->belongsTo(QNoconformidad::class, 'idnc', 'idnoconformidad');
    }
    public function usuariogenera()
    {
        return $this->belongsTo(GEntidad::class, 'idusuariogenera', 'identidad');
    }
    public function usuariosoluciona()
    {
        return $this->belongsTo(GEntidad::class, 'idiusuariosoluciona', 'identidad');
    }

}
