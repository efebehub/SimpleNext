<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Ubicacion') }}
            </div>
            <div style="float: left; width: 80%;">
                <select class="form-control" id="idpadre" name="idpadre">
                    <option value="" {{ $qDocu->idpadre=='' ? 'selected' : ''; }}>< Raiz ></option>
                    @foreach ($qDocs1 as $key => $value)
                        <option value="{{ $value->iddocumentacion }}"
                        @if ($qDocu->idpadre!='' && $value->iddocumentacion == $qDocu->idpadre)
                            selected="selected"
                        @endif
                        >{{ $value->nombre }}
                        </option>

                        @foreach ($qDocs2 as $key => $value2)
                            @if ($value2->idpadre==$value->iddocumentacion)

                                <option value="{{ $value2->iddocumentacion }}"
                                @if ($qDocu->idpadre!='' && $value2->iddocumentacion == $qDocu->idpadre)
                                    selected="selected"
                                @endif
                                >{{ $value->nombre }} | {{ $value2->nombre }}</option>

                            @endif
                        @endforeach


                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Titulo') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('nombre', $qDocu->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        @if ($qDocu->iddocumentacion!='')
        
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 10%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Archivo') }}
                </div>
                <div style="float: left; width: 90%;">
                    {{ Form::text('fileexistente', $qDocu->file, ['class' => 'form-control' . ($errors->has('fileexistente') ? ' is-invalid' : ''),     'readonly']) }}
                </div>
            </div>
        
        @endif


        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ $qDocu->iddocumentacion!='' ? Form::label('Cambiar por')  : Form::label('file') }}
            </div>
            <div style="float: left; width: 90%;">
                {{  Form::open(array('url'=>'/documentacion', 'files'=>'true'));  }}
                {{  Form::file('image'); }}
                
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