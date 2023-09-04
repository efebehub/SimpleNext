<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GComprobante
 *
 * @property $id
 * @property $idcaja
 * @property $idtipocomprobante
 * @property $idvendedor
 * @property $identidad
 * @property $modulo
 * @property $numero1
 * @property $numero2
 * @property $letra
 * @property $fecha
 * @property $vencimiento
 * @property $periododeposito
 * @property $descripcion
 * @property $estado
 * @property $importe_subtotal
 * @property $importe_bonificacion1
 * @property $importe_bonificacion2
 * @property $importe_recfin
 * @property $importe_impuestos
 * @property $importe_total
 * @property $importe_cancelado
 * @property $entidadocasional
 * @property $idtransporte1
 * @property $idtransporte2
 * @property $idcondicionventa
 * @property $contrareembolso
 * @property $idejercicio
 * @property $cae
 * @property $idmoneda
 * @property $cotizacion
 * @property $caevence
 * @property $concepto
 * @property $idlistadeprecios
 * @property $idconcesionario
 * @property $idfinanciacion
 * @property $iddeposito
 * @property $operacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GComprobante extends Model
{

    protected $table = "g_comprobante";


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
    protected $fillable = ['idcaja','idtipocomprobante','idvendedor','identidad','modulo','numero1','numero2','letra','fecha','vencimiento','periododeposito','descripcion','estado','importe_subtotal','importe_bonificacion1','importe_bonificacion2','importe_recfin','importe_impuestos','importe_total','importe_cancelado','entidadocasional','idtransporte1','idtransporte2','idcondicionventa','contrareembolso','idejercicio','cae','idmoneda','cotizacion','caevence','concepto','idlistadeprecios','idconcesionario','idfinanciacion','iddeposito','operacion'];



}
