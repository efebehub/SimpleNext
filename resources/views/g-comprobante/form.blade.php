<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idcaja') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idcaja', $gComprobante->idcaja, ['class' => 'form-control' . ($errors->has('idcaja') ? ' is-invalid' : ''), 'placeholder' => 'Idcaja']) }}
            {!! $errors->first('idcaja', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idtipocomprobante') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idtipocomprobante', $gComprobante->idtipocomprobante, ['class' => 'form-control' . ($errors->has('idtipocomprobante') ? ' is-invalid' : ''), 'placeholder' => 'Idtipocomprobante']) }}
            {!! $errors->first('idtipocomprobante', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idvendedor') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idvendedor', $gComprobante->idvendedor, ['class' => 'form-control' . ($errors->has('idvendedor') ? ' is-invalid' : ''), 'placeholder' => 'Idvendedor']) }}
            {!! $errors->first('idvendedor', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('identidad') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('identidad', $gComprobante->identidad, ['class' => 'form-control' . ($errors->has('identidad') ? ' is-invalid' : ''), 'placeholder' => 'Identidad']) }}
            {!! $errors->first('identidad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('modulo') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('modulo', $gComprobante->modulo, ['class' => 'form-control' . ($errors->has('modulo') ? ' is-invalid' : ''), 'placeholder' => 'Modulo']) }}
            {!! $errors->first('modulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('numero1') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('numero1', $gComprobante->numero1, ['class' => 'form-control' . ($errors->has('numero1') ? ' is-invalid' : ''), 'placeholder' => 'Numero1']) }}
            {!! $errors->first('numero1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('numero2') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('numero2', $gComprobante->numero2, ['class' => 'form-control' . ($errors->has('numero2') ? ' is-invalid' : ''), 'placeholder' => 'Numero2']) }}
            {!! $errors->first('numero2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('letra') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('letra', $gComprobante->letra, ['class' => 'form-control' . ($errors->has('letra') ? ' is-invalid' : ''), 'placeholder' => 'Letra']) }}
            {!! $errors->first('letra', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('fecha') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('fecha', $gComprobante->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('vencimiento') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('vencimiento', $gComprobante->vencimiento, ['class' => 'form-control' . ($errors->has('vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Vencimiento']) }}
            {!! $errors->first('vencimiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('periododeposito') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('periododeposito', $gComprobante->periododeposito, ['class' => 'form-control' . ($errors->has('periododeposito') ? ' is-invalid' : ''), 'placeholder' => 'Periododeposito']) }}
            {!! $errors->first('periododeposito', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('descripcion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('descripcion', $gComprobante->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('estado') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('estado', $gComprobante->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('importe_subtotal') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('importe_subtotal', $gComprobante->importe_subtotal, ['class' => 'form-control' . ($errors->has('importe_subtotal') ? ' is-invalid' : ''), 'placeholder' => 'Importe Subtotal']) }}
            {!! $errors->first('importe_subtotal', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('importe_bonificacion1') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('importe_bonificacion1', $gComprobante->importe_bonificacion1, ['class' => 'form-control' . ($errors->has('importe_bonificacion1') ? ' is-invalid' : ''), 'placeholder' => 'Importe Bonificacion1']) }}
            {!! $errors->first('importe_bonificacion1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('importe_bonificacion2') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('importe_bonificacion2', $gComprobante->importe_bonificacion2, ['class' => 'form-control' . ($errors->has('importe_bonificacion2') ? ' is-invalid' : ''), 'placeholder' => 'Importe Bonificacion2']) }}
            {!! $errors->first('importe_bonificacion2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('importe_recfin') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('importe_recfin', $gComprobante->importe_recfin, ['class' => 'form-control' . ($errors->has('importe_recfin') ? ' is-invalid' : ''), 'placeholder' => 'Importe Recfin']) }}
            {!! $errors->first('importe_recfin', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('importe_impuestos') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('importe_impuestos', $gComprobante->importe_impuestos, ['class' => 'form-control' . ($errors->has('importe_impuestos') ? ' is-invalid' : ''), 'placeholder' => 'Importe Impuestos']) }}
            {!! $errors->first('importe_impuestos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('importe_total') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('importe_total', $gComprobante->importe_total, ['class' => 'form-control' . ($errors->has('importe_total') ? ' is-invalid' : ''), 'placeholder' => 'Importe Total']) }}
            {!! $errors->first('importe_total', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('importe_cancelado') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('importe_cancelado', $gComprobante->importe_cancelado, ['class' => 'form-control' . ($errors->has('importe_cancelado') ? ' is-invalid' : ''), 'placeholder' => 'Importe Cancelado']) }}
            {!! $errors->first('importe_cancelado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('entidadocasional') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('entidadocasional', $gComprobante->entidadocasional, ['class' => 'form-control' . ($errors->has('entidadocasional') ? ' is-invalid' : ''), 'placeholder' => 'Entidadocasional']) }}
            {!! $errors->first('entidadocasional', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idtransporte1') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idtransporte1', $gComprobante->idtransporte1, ['class' => 'form-control' . ($errors->has('idtransporte1') ? ' is-invalid' : ''), 'placeholder' => 'Idtransporte1']) }}
            {!! $errors->first('idtransporte1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idtransporte2') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idtransporte2', $gComprobante->idtransporte2, ['class' => 'form-control' . ($errors->has('idtransporte2') ? ' is-invalid' : ''), 'placeholder' => 'Idtransporte2']) }}
            {!! $errors->first('idtransporte2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idcondicionventa') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idcondicionventa', $gComprobante->idcondicionventa, ['class' => 'form-control' . ($errors->has('idcondicionventa') ? ' is-invalid' : ''), 'placeholder' => 'Idcondicionventa']) }}
            {!! $errors->first('idcondicionventa', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('contrareembolso') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('contrareembolso', $gComprobante->contrareembolso, ['class' => 'form-control' . ($errors->has('contrareembolso') ? ' is-invalid' : ''), 'placeholder' => 'Contrareembolso']) }}
            {!! $errors->first('contrareembolso', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idejercicio') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idejercicio', $gComprobante->idejercicio, ['class' => 'form-control' . ($errors->has('idejercicio') ? ' is-invalid' : ''), 'placeholder' => 'Idejercicio']) }}
            {!! $errors->first('idejercicio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('cae') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('cae', $gComprobante->cae, ['class' => 'form-control' . ($errors->has('cae') ? ' is-invalid' : ''), 'placeholder' => 'Cae']) }}
            {!! $errors->first('cae', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idmoneda') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idmoneda', $gComprobante->idmoneda, ['class' => 'form-control' . ($errors->has('idmoneda') ? ' is-invalid' : ''), 'placeholder' => 'Idmoneda']) }}
            {!! $errors->first('idmoneda', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('cotizacion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('cotizacion', $gComprobante->cotizacion, ['class' => 'form-control' . ($errors->has('cotizacion') ? ' is-invalid' : ''), 'placeholder' => 'Cotizacion']) }}
            {!! $errors->first('cotizacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('caevence') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('caevence', $gComprobante->caevence, ['class' => 'form-control' . ($errors->has('caevence') ? ' is-invalid' : ''), 'placeholder' => 'Caevence']) }}
            {!! $errors->first('caevence', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('concepto') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('concepto', $gComprobante->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idlistadeprecios') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idlistadeprecios', $gComprobante->idlistadeprecios, ['class' => 'form-control' . ($errors->has('idlistadeprecios') ? ' is-invalid' : ''), 'placeholder' => 'Idlistadeprecios']) }}
            {!! $errors->first('idlistadeprecios', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idconcesionario') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idconcesionario', $gComprobante->idconcesionario, ['class' => 'form-control' . ($errors->has('idconcesionario') ? ' is-invalid' : ''), 'placeholder' => 'Idconcesionario']) }}
            {!! $errors->first('idconcesionario', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idfinanciacion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idfinanciacion', $gComprobante->idfinanciacion, ['class' => 'form-control' . ($errors->has('idfinanciacion') ? ' is-invalid' : ''), 'placeholder' => 'Idfinanciacion']) }}
            {!! $errors->first('idfinanciacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('iddeposito') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('iddeposito', $gComprobante->iddeposito, ['class' => 'form-control' . ($errors->has('iddeposito') ? ' is-invalid' : ''), 'placeholder' => 'Iddeposito']) }}
            {!! $errors->first('iddeposito', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('operacion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('operacion', $gComprobante->operacion, ['class' => 'form-control' . ($errors->has('operacion') ? ' is-invalid' : ''), 'placeholder' => 'Operacion']) }}
            {!! $errors->first('operacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>