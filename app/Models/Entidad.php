<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    use HasFactory;

    protected $table = 'g_entidades';
    protected $fillable = ['nombre', 'domicilio', 'cuit', 'telefono1', 'telefono2', 'telefono3'];
}
