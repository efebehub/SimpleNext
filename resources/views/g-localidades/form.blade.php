<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('descripcion') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('descripcion', $gLocalidade->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('cp') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('cp', $gLocalidade->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp']) }}
            {!! $errors->first('cp', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('idprovincia') }}
            </div>
            <div style="float: left; width: 90%;">

                <select class="form-control" id="idprovincia" name="idprovincia">
                    <option value="" {{ $gLocalidade->idprovincia=='' ? 'selected' : ''; }}>--Select Provincia--</option>
                    @foreach ($gProvincias as $key => $value)
                        <option value="{{ $value->idprovincia }}"
                        @if ($gLocalidade->idprovincia!='' && $value->idprovincia == $gLocalidade->idprovincia)
                            selected="selected"
                        @endif
                        >{{ $value->descripcion }}</option>
                    @endforeach
                </select>

            {!! $errors->first('idprovincia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</div>