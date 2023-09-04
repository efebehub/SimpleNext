<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('descripcion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('descripcion', $sListadeprecio->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('utilidad') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('utilidad', $sListadeprecio->utilidad, ['class' => 'form-control' . ($errors->has('utilidad') ? ' is-invalid' : ''), 'placeholder' => 'Utilidad']) }}
            {!! $errors->first('utilidad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('bonificacion1') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('bonificacion1', $sListadeprecio->bonificacion1, ['class' => 'form-control' . ($errors->has('bonificacion1') ? ' is-invalid' : ''), 'placeholder' => 'Bonificacion1']) }}
            {!! $errors->first('bonificacion1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('bonificacion2') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('bonificacion2', $sListadeprecio->bonificacion2, ['class' => 'form-control' . ($errors->has('bonificacion2') ? ' is-invalid' : ''), 'placeholder' => 'Bonificacion2']) }}
            {!! $errors->first('bonificacion2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('bonificacion3') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('bonificacion3', $sListadeprecio->bonificacion3, ['class' => 'form-control' . ($errors->has('bonificacion3') ? ' is-invalid' : ''), 'placeholder' => 'Bonificacion3']) }}
            {!! $errors->first('bonificacion3', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idejercicio') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('idejercicio', $sListadeprecio->idejercicio, ['class' => 'form-control' . ($errors->has('idejercicio') ? ' is-invalid' : ''), 'placeholder' => 'Idejercicio']) }}
            {!! $errors->first('idejercicio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>