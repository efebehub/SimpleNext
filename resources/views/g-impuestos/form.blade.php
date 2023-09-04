<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('descripcion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('descripcion', $gImpuesto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('porcentaje') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('porcentaje', $gImpuesto->porcentaje, ['class' => 'form-control' . ($errors->has('porcentaje') ? ' is-invalid' : ''), 'placeholder' => 'Porcentaje']) }}
            {!! $errors->first('porcentaje', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('compras') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('compras', $gImpuesto->compras, ['class' => 'form-control' . ($errors->has('compras') ? ' is-invalid' : ''), 'placeholder' => 'Compras']) }}
            {!! $errors->first('compras', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('ventas') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('ventas', $gImpuesto->ventas, ['class' => 'form-control' . ($errors->has('ventas') ? ' is-invalid' : ''), 'placeholder' => 'Ventas']) }}
            {!! $errors->first('ventas', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('codigowsfe') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('codigowsfe', $gImpuesto->codigowsfe, ['class' => 'form-control' . ($errors->has('codigowsfe') ? ' is-invalid' : ''), 'placeholder' => 'Codigowsfe']) }}
            {!! $errors->first('codigowsfe', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idcuentacontabled') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idcuentacontabled', $gImpuesto->idcuentacontabled, ['class' => 'form-control' . ($errors->has('idcuentacontabled') ? ' is-invalid' : ''), 'placeholder' => 'Idcuentacontabled']) }}
            {!! $errors->first('idcuentacontabled', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idcuentacontableh') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idcuentacontableh', $gImpuesto->idcuentacontableh, ['class' => 'form-control' . ($errors->has('idcuentacontableh') ? ' is-invalid' : ''), 'placeholder' => 'Idcuentacontableh']) }}
            {!! $errors->first('idcuentacontableh', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>