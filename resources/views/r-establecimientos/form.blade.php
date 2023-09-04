<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('descripcion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('descripcion', $fTipoFondo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('sumaencaja') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::checkbox('sumaencaja', "1", ("1" == $fTipoFondo->sumaencaja)  ? true : false),[ 'class' => 'form-check-input'] }}
            {!! $errors->first('sumaencaja', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('cotizacion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('cotizacion', $fTipoFondo->cotizacion, ['class' => 'form-control' . ($errors->has('cotizacion') ? ' is-invalid' : ''), 'placeholder' => 'Cotizacion']) }}
            {!! $errors->first('cotizacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('esmoneda') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::checkbox('esmoneda', "1", ("1" == $fTipoFondo->esmoneda)  ? true : false),[ 'class' => 'form-check-input'] }}
            {!! $errors->first('esmoneda', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('simbolo') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('simbolo', $fTipoFondo->simbolo, ['class' => 'form-control' . ($errors->has('simbolo') ? ' is-invalid' : ''), 'placeholder' => 'Simbolo']) }}
            {!! $errors->first('simbolo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('identidadfinanciera') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('identidadfinanciera', $fTipoFondo->identidadfinanciera, ['class' => 'form-control' . ($errors->has('identidadfinanciera') ? ' is-invalid' : ''), 'placeholder' => 'Identidadfinanciera']) }}
            {!! $errors->first('identidadfinanciera', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idcuentacontabled') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idcuentacontabled', $fTipoFondo->idcuentacontabled, ['class' => 'form-control' . ($errors->has('idcuentacontabled') ? ' is-invalid' : ''), 'placeholder' => 'Idcuentacontabled']) }}
            {!! $errors->first('idcuentacontabled', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idcuentacontableh') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idcuentacontableh', $fTipoFondo->idcuentacontableh, ['class' => 'form-control' . ($errors->has('idcuentacontableh') ? ' is-invalid' : ''), 'placeholder' => 'Idcuentacontableh']) }}
            {!! $errors->first('idcuentacontableh', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>

