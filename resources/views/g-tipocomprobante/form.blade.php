<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('descripcion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('descripcion', $gTipoComprobante->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('tipocomprobante') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('tipocomprobante', $gTipoComprobante->tipocomprobante, ['class' => 'form-control' . ($errors->has('tipocomprobante') ? ' is-invalid' : ''), 'placeholder' => 'Tipocomprobante']) }}
            {!! $errors->first('tipocomprobante', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('modulo') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('modulo', $gTipoComprobante->modulo, ['class' => 'form-control' . ($errors->has('modulo') ? ' is-invalid' : ''), 'placeholder' => 'Modulo']) }}
            {!! $errors->first('modulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('fondos') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('fondos', $gTipoComprobante->fondos, ['class' => 'form-control' . ($errors->has('fondos') ? ' is-invalid' : ''), 'placeholder' => 'Fondos']) }}
            {!! $errors->first('fondos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('stock') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('stock', $gTipoComprobante->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('ctacte') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('ctacte', $gTipoComprobante->ctacte, ['class' => 'form-control' . ($errors->has('ctacte') ? ' is-invalid' : ''), 'placeholder' => 'Ctacte']) }}
            {!! $errors->first('ctacte', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('asiento') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('asiento', $gTipoComprobante->asiento, ['class' => 'form-control' . ($errors->has('asiento') ? ' is-invalid' : ''), 'placeholder' => 'Asiento']) }}
            {!! $errors->first('asiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('iva') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('iva', $gTipoComprobante->iva, ['class' => 'form-control' . ($errors->has('iva') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
            {!! $errors->first('iva', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('impresion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('impresion', $gTipoComprobante->impresion, ['class' => 'form-control' . ($errors->has('impresion') ? ' is-invalid' : ''), 'placeholder' => 'Impresion']) }}
            {!! $errors->first('impresion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('copias') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('copias', $gTipoComprobante->copias, ['class' => 'form-control' . ($errors->has('copias') ? ' is-invalid' : ''), 'placeholder' => 'Copias']) }}
            {!! $errors->first('copias', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('cae') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('cae', $gTipoComprobante->cae, ['class' => 'form-control' . ($errors->has('cae') ? ' is-invalid' : ''), 'placeholder' => 'Cae']) }}
            {!! $errors->first('cae', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('caetipodoc') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('caetipodoc', $gTipoComprobante->caetipodoc, ['class' => 'form-control' . ($errors->has('caetipodoc') ? ' is-invalid' : ''), 'placeholder' => 'Caetipodoc']) }}
            {!! $errors->first('caetipodoc', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idtalonario') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idtalonario', $gTipoComprobante->idtalonario, ['class' => 'form-control' . ($errors->has('idtalonario') ? ' is-invalid' : ''), 'placeholder' => 'Idtalonario']) }}
            {!! $errors->first('idtalonario', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idcuentacontable') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idcuentacontable', $gTipoComprobante->idcuentacontable, ['class' => 'form-control' . ($errors->has('idcuentacontable') ? ' is-invalid' : ''), 'placeholder' => 'Idcuentacontable']) }}
            {!! $errors->first('idcuentacontable', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>