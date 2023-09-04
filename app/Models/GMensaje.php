<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GMensaje extends Model
{
    use HasFactory;

    protected $table = "g_mensajes";
    protected $primaryKey = 'idmensaje';

    public $timestamps = false;

    protected $fillable = ['idmensaje','mensaje'];

}
