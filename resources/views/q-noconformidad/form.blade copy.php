
<div class="w-100 float-left">

    <div style="width: 45%; float: left; margin-right: 50px;">

        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 20%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Numero') }}
            </div>
            <div style="float: left; width: 40%;">
            {{ Form::text('idnoconformidad', $qNc->idnoconformidad, ['class' => 'form-control' . ($errors->has('idnoconformidad') ? ' is-invalid' : ''), 'placeholder' => 'Numero', 'readonly']) }}
            {!! $errors->first('idnoconformidad ', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 20%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('descripcion') }}
            </div>
            <div style="float: left; width: 80%;">
            {{ Form::text('descripcion', $qNc->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 20%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('observacion') }}
            </div>
            <div style="float: left; width: 80%;">
            {{ Form::text('observacion', $qNc->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'observacion']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 20%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Tipo') }}
            </div>
            <div style="float: left; width: 80%;">
                <select class="form-control {{($errors->has('tiponc') ? ' is-invalid' : '')}}" id="tiponc" name="tiponc">
                    <option value="" {{ $qNc->tipo=='' ? 'selected' : ''; }}>--Select Tipo--</option>
                    <option value="C" @if ($qNc->tipo!='' && 'C' == $qNc->tipo) selected="selected" @endif>CRITICA</option>
                    <option value="L" @if ($qNc->tipo!='' && 'L' == $qNc->tipo) selected="selected" @endif>LEVE</option>
                </select>
            </div>
        </div>


    </div>

    <div style="width: 45%; float: left;">

   
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 20%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Solicita') }}
            </div>
            <div style="float: left; width: 80%;">
                <select class="form-control {{($errors->has('idusuariogenera') ? ' is-invalid' : '')}}" id="idusuariogenera" name="idusuariogenera">
                    <option value="" {{ $qNc->idusuariogenera=='' ? 'selected' : ''; }}>--Select Usuario--</option>
                    @foreach ($gUsuarios as $key => $value)
                        <option value="{{ $value->id }}"
                        @if ($qNc->idprovincia!='' && $value->id == $qNc->idusuariogenera)
                            selected="selected"
                        @endif
                        >{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 20%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Fecha') }}
            </div>
            <div style="float: left; width: 80%;">
            {{ Form::date('fechagenera', $qNc->fechagenera,['class' => 'form-control' . ($errors->has('fechagenera') ? ' is-invalid' : ''), 'style' => 'width: 150px;']) }} 
            {!! $errors->first('fechagenera', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>


        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 20%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Responsable') }}
            </span>
            </div>
            <div style="float: left; width: 80%;">
                <select class="form-control{{($errors->has('idiusuariosoluciona') ? ' is-invalid' : '')}}" id="idiusuariosoluciona" name="idiusuariosoluciona">
                    <option value="" {{ $qNc->idusuariogenera=='' ? 'selected' : ''; }}>--Select Usuario--</option>
                    @foreach ($gUsuarios as $key => $value)
                        <option value="{{ $value->id }}"
                        @if ($qNc->idiusuariosoluciona!='' && $value->id == $qNc->idiusuariosoluciona)
                            selected="selected"
                        @endif
                        >{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 20%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Fecha') }}
            </div>
            <div style="float: left; width: 80%;">
            {{ Form::date('fechasolucion', $qNc->fechasolucion,['class' => 'form-control' . ($errors->has('fechasolucion') ? ' is-invalid' : ''), 'style' => 'width: 150px;']) }} 
            {!! $errors->first('fechasolucion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>

</div>

<div class="box-footer" style="width: 100%; float: left;">
    <br/>
    <h3>Solución</h3>
    <hr class="hr" />
</div>

<div style="width: 45%; float: left; margin-right: 50px;">
    <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
        <div style="float: left; width: 20%; margin-top: 3px;">
        <span style="float: left; min-width: 150px;">
        {{ Form::label('Tipo') }}
        </div>
        <div style="float: left; width: 80%;">
            <select class="form-control {{($errors->has('tiposolulcion') ? ' is-invalid' : '')}}" id="tiposolulcion" name="tiposolulcion">
                <option value="" {{ $qNc->tiposolulcion=='' ? 'selected' : ''; }}>--Select Tipo Solucion--</option>
                <option value="D" @if ($qNc->tiposolulcion!='' && 'D' == $qNc->tiposolulcion) selected="selected" @endif>DEFINITIVA</option>
                <option value="C" @if ($qNc->tiposolulcion!='' && 'C' == $qNc->tiposolulcion) selected="selected" @endif>CONTENCION</option>
            </select>
        </div>
    </div>

    <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
        <div style="float: left; width: 20%; margin-top: 3px;">
        <span style="float: left; min-width: 150px;">
        {{ Form::label('No Conformidad') }}
        </div>
        <div style="float: left; width: 80%;">
            <select class="form-control {{($errors->has('idnc') ? ' is-invalid' : '')}}" id="idnc" name="idnc">
                <option value="" {{ $qNc->idnc=='' ? 'selected' : ''; }}>--Select No Conformidad--</option>
                @foreach ($qNCids as $key => $value)
                    <option value="{{ $value->idnoconformidad }}"
                    @if ($qNc->idnc!='' && $value->idnoconformidad == $qNc->idnc)
                        selected="selected"
                    @endif
                    >{{ $value->idnoconformidad }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="box-footer" style="width: 100%; float: left;">
    <div style="float: left; width: 20%; margin-top: 3px;">
        <span style="float: left; min-width: 150px;">
        {{ Form::label('Solucion') }}
        </div>
        <div style="float: left; width: 80%;">
            <textarea name="conclusion" id="conclusion" rows="5" cols="20" class="form-control">{{$qNc->conclusion}}</textarea>
        </div>
</div>


<div class="box-footer" style="width: 100%; float: left;">
    <hr class="hr" />
</div>

<div class="box-footer mt-1" style="width: 40%; float: left;">
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
<div class="box-footer mt-1" style="width: 40%; float: right;">
    <form action="{{ route('q-noconformidad.destroy',$qNc->idnoconformidad) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
         @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm"><i class="icon-remove" title="Borrar"></i></button>
    </form>
</div>