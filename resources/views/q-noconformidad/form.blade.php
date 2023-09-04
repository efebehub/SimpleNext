
<div class="w-100 float-left">



    <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
        <div style="float: left; width: 10%; margin-top: 3px;">
        <span style="float: left; min-width: 150px;">
        {{ Form::label('Numero') }}
        </div>
         <div style="float: left; width: 35%; margin-right: 3rem;">
        {{ Form::text('idnoconformidad', $qNc->idnoconformidad, ['class' => 'form-control' . ($errors->has('idnoconformidad') ? ' is-invalid' : ''), 'placeholder' => 'Numero', 'readonly']) }}
        {!! $errors->first('idnoconformidad ', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Solicita') }}
            </div>
              <div style="float: left; width: 35%; margin-right: 3rem;">
                <select class="form-control {{($errors->has('idusuariogenera') ? ' is-invalid' : '')}}" id="idusuariogenera" name="idusuariogenera">
                    <option value="" {{ $qNc->idusuariogenera=='' ? 'selected' : ''; }}>--Select Usuario--</option>
                    @foreach ($gUsuarios as $key => $value)
                        <option value="{{ $value->id }}"
                        @if ($qNc->idusuariogenera!='' && $value->id == $qNc->idusuariogenera)
                            selected="selected"
                        @endif
                        >{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
    </div>
    <div class="form-group mb-5" style="float: left; width: 100%;">
        <div style="float: left; width: 10%; margin-top: 3px;">
        <span style="float: left; min-width: 150px;">
        {{ Form::label('Titulo') }}
        </div>
          <div style="float: left; width: 35%; margin-right: 3rem;">
        {{ Form::text('descripcion', $qNc->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
        {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Fecha') }}
            </div>
              <div style="float: left; width: 35%; margin-right: 3rem;">
            {{ Form::date('fechagenera', $qNc->fechagenera,['class' => 'form-control' . ($errors->has('fechagenera') ? ' is-invalid' : ''), 'style' => 'width: 150px;']) }} 
            {!! $errors->first('fechagenera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>


</div>


<div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneX" aria-expanded="false" aria-controls="collapseOneX"><h3 class="mb-0 p-0">Descripción</h3></button>
        </h5>
      </div>
  
      <div id="collapseOneX" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          
            <div style="float: left; width: 10%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Descripcion') }}
                </div>
                  <div style="float: left; width: 35%; margin-right: 3rem;">
                {{ Form::text('descripcion', $qNc->observacion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
                </div>

            <div style="float: left; width: 10%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Tipo') }}
                </div>
                  <div style="float: left; width: 35%; margin-right: 3rem;">
                    <select class="form-control {{($errors->has('tiponc') ? ' is-invalid' : '')}}" id="tiponc" name="tiponc">
                        <option value="" {{ $qNc->tipo=='' ? 'selected' : ''; }}>--Select Tipo--</option>
                        <option value="C" @if ($qNc->tipo!='' && 'C' == $qNc->tipo) selected="selected" @endif>CRITICA</option>
                        <option value="L" @if ($qNc->tipo!='' && 'L' == $qNc->tipo) selected="selected" @endif>LEVE</option>
                    </select>
                </div>

        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">

            <a class="btn" data-bs-toggle="collapse" href="#collapseTwoX" role="button" aria-expanded="false" aria-controls="collapseTwoX"><h3 class="mb-0 p-0">Causas</h3></a>
        </h5>
      </div>
      <div id="collapseTwoX" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeX" aria-expanded="false" aria-controls="collapseThreeX"><h3 class="mb-0 p-0">Solución</h3></button>
        </h5>
      </div>
      <div id="collapseThreeX" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">

            <div style="float: left; width: 10%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Responsable') }}
                </span>
            </div>
              <div style="float: left; width: 35%; margin-right: 3rem;">
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
            <div style="float: left; width: 10%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Fecha') }}
                </div>
                  <div style="float: left; width: 35%; margin-right: 3rem;">
                {{ Form::date('fechasolucion', $qNc->fechasolucion,['class' => 'form-control' . ($errors->has('fechasolucion') ? ' is-invalid' : ''), 'style' => 'width: 150px;']) }} 
                {!! $errors->first('fechasolucion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group" style="float: left; width: 100%;">
                <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                    <div style="float: left; width: 10%; margin-top: 3px;">
                    <span style="float: left; min-width: 150px;">
                    {{ Form::label('Tipo') }}
                    </div>
                    <div style="float: left; width: 35%; margin-right: 3rem;">
                        <select class="form-control {{($errors->has('tiposolucion') ? ' is-invalid' : '')}}" id="tiposolucion" name="tiposolucion">
                            <option value="" {{ $qNc->tiposolucion=='' ? 'selected' : ''; }}>--Select Tipo Solucion--</option>
                            <option value="D" @if ($qNc->tiposolucion!='' && 'D' == $qNc->tiposolucion) selected="selected" @endif>DEFINITIVA</option>
                            <option value="C" @if ($qNc->tiposolucion!='' && 'C' == $qNc->tiposolucion) selected="selected" @endif>CONTENCION</option>
                        </select>
                    </div>
                </div>
            
                <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                    <div style="float: left; width: 10%; margin-top: 3px;">
                    <span style="float: left; min-width: 150px;">
                    {{ Form::label('No Conformidad') }}
                    </div>
                    <div style="float: left; width: 35%; margin-right: 3rem;">
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
                <div style="float: left; width: 10%;">
                    <span style="float: left; min-width: 150px;">
                    {{ Form::label('Solucion') }}
                    </div>
                    <div style="float: left; width: 85%;">
                        <textarea name="conclusion" id="conclusion" rows="5" cols="20" class="form-control">{{$qNc->conclusion}}</textarea>
                    </div>
            </div>

        </div>
      </div>
    </div>
</div>

<div class="box-footer" style="width: 100%; float: left;">
    <hr class="hr" />
</div>

<div class="box-footer mt-1" style="width: 40%; float: left;">
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
<div class="box-footer mt-1" style="width: 40%; float: right; text-align: right;">
    <button type="button" class="btn btn-danger float-right"  onclick="onclickdel('{{ $qNc->idnoconformidad }}')" style="cursor: pointer;">Borrar</button>
</div>


@stack('scripts')

<script>

function onclickdel(id) {
	var url = "{{ route('q-noconformidad.destroy', ['q_noconformidad' => ':id']) }}";
	url = url.replace(':id', id);
	location.href = url;
}


</script>