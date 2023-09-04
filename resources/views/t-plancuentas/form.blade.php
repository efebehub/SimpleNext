<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('id') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('id', $tPlancuenta->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'id']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('descripcion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('descripcion', $tPlancuenta->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idcuentapadre') }}
            </div>
            <div style="float: left; width: 90%;">
                <select class="form-control" id="idcuentapadre" name="idcuentapadre">
                    <option value="">--Select Cuenta--</option>
                    @foreach ($tPlancuentaPadre as $key => $value)
                        <option value="{{ $value->id }}"
                        @if ($value->id == $tPlancuenta->idcuentapadre)
                            selected="selected"
                        @endif
                        >{{ $value->id.' | '.$value->descripcion }}</option>
                    @endforeach
                </select>
            {!! $errors->first('idcuentapadre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('asiento') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::checkbox('asiento', "1", ("1" == $tPlancuenta->asiento)  ? true : false),[ 'class' => 'form-check-input'] }}
            {!! $errors->first('asiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>


    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>