@extends('layouts.app')

@section('template_title')
    {{ $gComprobante->name ?? 'Ver G Comprobante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver G Comprobante</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-comprobantes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcaja:</strong>
                            {{ $gComprobante->idcaja }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipocomprobante:</strong>
                            {{ $gComprobante->idtipocomprobante }}
                        </div>
                        <div class="form-group">
                            <strong>Idvendedor:</strong>
                            {{ $gComprobante->idvendedor }}
                        </div>
                        <div class="form-group">
                            <strong>Identidad:</strong>
                            {{ $gComprobante->identidad }}
                        </div>
                        <div class="form-group">
                            <strong>Modulo:</strong>
                            {{ $gComprobante->modulo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero1:</strong>
                            {{ $gComprobante->numero1 }}
                        </div>
                        <div class="form-group">
                            <strong>Numero2:</strong>
                            {{ $gComprobante->numero2 }}
                        </div>
                        <div class="form-group">
                            <strong>Letra:</strong>
                            {{ $gComprobante->letra }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $gComprobante->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Vencimiento:</strong>
                            {{ $gComprobante->vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Periododeposito:</strong>
                            {{ $gComprobante->periododeposito }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $gComprobante->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $gComprobante->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Importe Subtotal:</strong>
                            {{ $gComprobante->importe_subtotal }}
                        </div>
                        <div class="form-group">
                            <strong>Importe Bonificacion1:</strong>
                            {{ $gComprobante->importe_bonificacion1 }}
                        </div>
                        <div class="form-group">
                            <strong>Importe Bonificacion2:</strong>
                            {{ $gComprobante->importe_bonificacion2 }}
                        </div>
                        <div class="form-group">
                            <strong>Importe Recfin:</strong>
                            {{ $gComprobante->importe_recfin }}
                        </div>
                        <div class="form-group">
                            <strong>Importe Impuestos:</strong>
                            {{ $gComprobante->importe_impuestos }}
                        </div>
                        <div class="form-group">
                            <strong>Importe Total:</strong>
                            {{ $gComprobante->importe_total }}
                        </div>
                        <div class="form-group">
                            <strong>Importe Cancelado:</strong>
                            {{ $gComprobante->importe_cancelado }}
                        </div>
                        <div class="form-group">
                            <strong>Entidadocasional:</strong>
                            {{ $gComprobante->entidadocasional }}
                        </div>
                        <div class="form-group">
                            <strong>Idtransporte1:</strong>
                            {{ $gComprobante->idtransporte1 }}
                        </div>
                        <div class="form-group">
                            <strong>Idtransporte2:</strong>
                            {{ $gComprobante->idtransporte2 }}
                        </div>
                        <div class="form-group">
                            <strong>Idcondicionventa:</strong>
                            {{ $gComprobante->idcondicionventa }}
                        </div>
                        <div class="form-group">
                            <strong>Contrareembolso:</strong>
                            {{ $gComprobante->contrareembolso }}
                        </div>
                        <div class="form-group">
                            <strong>Idejercicio:</strong>
                            {{ $gComprobante->idejercicio }}
                        </div>
                        <div class="form-group">
                            <strong>Cae:</strong>
                            {{ $gComprobante->cae }}
                        </div>
                        <div class="form-group">
                            <strong>Idmoneda:</strong>
                            {{ $gComprobante->idmoneda }}
                        </div>
                        <div class="form-group">
                            <strong>Cotizacion:</strong>
                            {{ $gComprobante->cotizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Caevence:</strong>
                            {{ $gComprobante->caevence }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $gComprobante->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Idlistadeprecios:</strong>
                            {{ $gComprobante->idlistadeprecios }}
                        </div>
                        <div class="form-group">
                            <strong>Idconcesionario:</strong>
                            {{ $gComprobante->idconcesionario }}
                        </div>
                        <div class="form-group">
                            <strong>Idfinanciacion:</strong>
                            {{ $gComprobante->idfinanciacion }}
                        </div>
                        <div class="form-group">
                            <strong>Iddeposito:</strong>
                            {{ $gComprobante->iddeposito }}
                        </div>
                        <div class="form-group">
                            <strong>Operacion:</strong>
                            {{ $gComprobante->operacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
