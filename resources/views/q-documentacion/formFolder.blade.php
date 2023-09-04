<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Ubicacion') }}
            </div>
            <div style="float: left; width: 80%;">

                {{-- Si contiene carpetas no se puede mover la ubicacion porque podria generar tres niveles y no se mostraria en pantalla --}}
                @php($xreadonly = '')
                @php($xumensaje = '')
                @foreach ($qDocs2 as $key => $value)
                    @if ($qDocu->iddocumentacion==$value->idpadre)
                        @php($xreadonly = 'disabled')
                        @php($xumensaje = 'Las carpetas que contengan otras carpetas no pueden moverse de <Raiz>')
                    @endif
                @endforeach


                <select class="form-control" id="idpadre" name="idpadre" {{ $xreadonly; }} >
                    <option value="" {{ $qDocu->idpadre=='' ? 'selected' : ''; }}>< Raiz ></option>
                    @foreach ($qDocs1 as $key => $value)
                        <option value="{{ $value->iddocumentacion }}"
                        @if ($qDocu->idpadre!='' && $value->iddocumentacion == $qDocu->idpadre)
                            selected="selected"
                        @endif
                        >{{ $value->nombre }}</option>
                    @endforeach
                </select>
                {{ $xumensaje; }}
            </div>
        </div>

        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('nombre') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('nombre', $qDocu->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            </div>
            <div style="float: left; width: 90%;">
                {{ Form::hidden('tipo', $qDocu->tipo!='' ? $qDocu->tipo : app('request')->input('pTipo')) }}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <br/>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>