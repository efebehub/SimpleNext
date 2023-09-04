<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QDocumentacion extends Model
{
    protected $table = "q_documentacion";
    protected $primaryKey = 'iddocumentacion';

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
		'iddocumentacion ' => 'required',
		'tipo' => 'required',
		'nombre' => 'required',
		'idempresa' => 'required',
    ];

    protected $perPage = 20;

    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['iddocumentacion','tipo','idpadre','nombre','file','extension','fechavigencia','idempresa'];



}
