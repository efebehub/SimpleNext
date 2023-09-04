<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $gTalonario->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero1') }}
            {{ Form::text('numero1', $gTalonario->numero1, ['class' => 'form-control' . ($errors->has('numero1') ? ' is-invalid' : ''), 'placeholder' => 'Numero1']) }}
            {!! $errors->first('numero1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero2') }}
            {{ Form::text('numero2', $gTalonario->numero2, ['class' => 'form-control' . ($errors->has('numero2') ? ' is-invalid' : ''), 'placeholder' => 'Numero2']) }}
            {!! $errors->first('numero2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('letra') }}
            {{ Form::text('letra', $gTalonario->letra, ['class' => 'form-control' . ($errors->has('letra') ? ' is-invalid' : ''), 'placeholder' => 'Letra']) }}
            {!! $errors->first('letra', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>