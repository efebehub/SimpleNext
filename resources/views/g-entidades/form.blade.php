
    <div class="box-body">


        <div style="width: 35%; float: left; margin-right: 20px;">

            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('cuit') }}
                </div>
                <div style="float: left; width: 80%;">
                {{ Form::text('cuit', $gEntidade->cuit, ['class' => 'form-control' . ($errors->has('cuit') ? ' is-invalid' : ''), 'placeholder' => 'Cuit']) }}
                {!! $errors->first('cuit', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('nombre') }}
                </div>
                <div style="float: left; width: 80%;">
                {{ Form::text('nombre', $gEntidade->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('domicilio') }}
                </div>
                <div style="float: left; width: 80%;">
                {{ Form::text('domicilio', $gEntidade->domicilio, ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
                {!! $errors->first('domicilio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('telefono') }}
                </div>
                <div style="float: left; width: 80%;">
                {{ Form::text('telefono', $gEntidade->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('email') }}
                </div>
                <div style="float: left; width: 80%;">
                {{ Form::text('email', $gEntidade->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Provincia') }}
                </div>
                <div style="float: left; width: 80%;">
                    <select class="form-control" id="idprovincia" name="idprovincia">
                        <option value="" {{ $gEntidade->idprovincia=='' ? 'selected' : ''; }}>--Select Provincia--</option>
                        @foreach ($gProvincia as $key => $value)
                            <option value="{{ $value->id }}"
                            @if ($gEntidade->idprovincia!='' && $value->id == $gEntidade->idprovincia)
                                selected="selected"
                            @endif
                            >{{ $value->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('localidad') }}
                </div>
                <div style="float: left; width: 80%;">

                    <script>
                        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
                        document.getElementById('idprovincia').addEventListener('change',(e)=>{
                            fetch('http://127.0.0.1:8000/g-localidades',{
                                method : 'POST',
                                body: JSON.stringify({idprovincia : e.target.value}),
                                headers:{
                                    'Content-Type': 'application/json',
                                    "X-CSRF-Token": csrfToken
                                }
                            }).then(response =>{
                                console.log(response)
                                return response.json()
                            }).then( data =>{

                                console.log(data);

                                var opciones ="<option value=''>--Select Localidad--</option>";
                                for (let i in data.lista) {
                                   opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].descripcion+'</option>';
                                }
                                document.getElementById("idlocalidad").innerHTML = opciones;
                            }).catch(error =>console.error(error));
                        })                    
                    </script>   

                    <select class="form-control" id="idlocalidad" name="idlocalidad">
                        <option value="" {{ $gEntidade->idlocalidad=='' ? 'selected' : ''; }}>--Select Localidad--</option>

                    </select>
                    

                {!! $errors->first('idlocalidad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('tipo iva') }}
                </div>
                <div style="float: left; width: 80%;">
                    <select class="form-control" id="idtipoiva" name="idtipoiva">
                        <option value="" {{ $gEntidade->idtipoiva=='' ? 'selected' : ''; }}>--Select Tipo IVA--</option>
                        @foreach ($gTipoIva as $key => $value)
                            <option value="{{ $value->id }}"
                            @if ($gEntidade->idtipoiva!='' && $value->id == $gEntidade->idtipoiva)
                                selected="selected"
                            @endif
                            >{{ $value->descripcion }}</option>
                        @endforeach
                    </select>
                {!! $errors->first('idtipoiva', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 20%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('IIBB') }}
                </div>
                <div style="float: left; width: 80%;">
                {{ Form::text('iibb', $gEntidade->iibb, ['class' => 'form-control' . ($errors->has('iibb') ? ' is-invalid' : ''), 'placeholder' => 'Iibb']) }}
                {!! $errors->first('iibb', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

        </div>

        <div style="width: 30%; float: left;">
        
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 30%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Lista de precios') }}
                </div>
                <div style="float: left; width: 70%;">

                    <select class="form-control" id="idlistadeprecios" name="idlistadeprecios">
                        <option value="" {{ $gEntidade->idlistadeprecios=='' ? 'selected' : ''; }}>--Select Lista de Precios--</option>
                        @foreach ($gListaPrecios as $key => $value)
                            <option value="{{ $value->id }}"
                            @if ($gEntidade->idlistadeprecios!='' && $value->id == $gEntidade->idlistadeprecios)
                                selected="selected"
                            @endif
                            >{{ $value->descripcion }}</option>
                        @endforeach
                    </select>
                {!! $errors->first('idlistadeprecios', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 30%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Vendedor') }}
                </div>
                <div style="float: left; width: 70%;">
                    <select class="form-control" id="idvendedor" name="idvendedor">
                        <option value="" {{ $gEntidade->idvendedor=='' ? 'selected' : ''; }}>--Select Vendedor--</option>
                        @foreach ($gVendedores as $key => $value)
                            <option value="{{ $value->id }}"
                            @if ($gEntidade->idvendedor!='' && $value->id == $gEntidade->idvendedor)
                                selected="selected"
                            @endif
                            >{{ $value->nombre }}</option>
                        @endforeach
                    </select>
                {!! $errors->first('idvendedor', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 30%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Cbu') }}
                </div>
                <div style="float: left; width: 70%;">
                {{ Form::text('cbu', $gEntidade->cbu, ['class' => 'form-control' . ($errors->has('cbu') ? ' is-invalid' : ''), 'placeholder' => 'Cbu']) }}
                {!! $errors->first('cbu', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 30%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Fecha de nacimiento') }}
                </div>
                <div style="float: left; width: 70%;">
                {{ Form::date('fechanacimiento', $gEntidade->fechanacimiento,['class' => 'form-control', 'style' => 'width: 150px;']) }} 
                {!! $errors->first('fechanacimiento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 30%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('Comentario') }}
                </div>
                <div style="float: left; width: 70%;">
                {!! Form::textarea('comentario', $gEntidade->comentario, ['id' => 'comentario', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','class' => 'form-control']) !!}
                {!! $errors->first('comentario', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>


        <div style="width: 10%; float: right; visibility: hidden;">
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 80%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('escliente') }}
                </div>
                <div style="float: left; width: 20%;">
                {{ Form::checkbox('escliente', "1", ("1" == $gEntidade->escliente || $pModulo=='V')  ? true : false),[ 'class' => 'form-check-input'] }}
                {!! $errors->first('escliente', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 80%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('esproveedor') }}
                </div>
                <div style="float: left; width: 20%;">
                {{ Form::checkbox('esproveedor', "1", ("1" == $gEntidade->esproveedor || $pModulo=='C')  ? true : false),[ 'class' => 'form-check-input'] }}
                {!! $errors->first('esproveedor', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 80%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('esempleado') }}
                </div>
                <div style="float: left; width: 20%;">
                {{ Form::checkbox('esempleado', "1", ("1" == $gEntidade->esempleado)  ? true : false),[ 'class' => 'form-check-input'] }}
                {!! $errors->first('esempleado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 80%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('estransporte') }}
                </div>
                <div style="float: left; width: 20%;">
                {{ Form::checkbox('estransporte', "1", ("1" == $gEntidade->estransporte)  ? true : false),[ 'class' => 'form-check-input'] }}
                {!! $errors->first('estransporte', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 80%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('esentfin') }}
                </div>
                <div style="float: left; width: 20%;">
                {{ Form::checkbox('esentfin', "1", ("1" == $gEntidade->esentfin)  ? true : false),[ 'class' => 'form-check-input'] }}
                {!! $errors->first('esentfin', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 80%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('esagencia') }}
                </div>
                <div style="float: left; width: 20%;">
                {{ Form::checkbox('esagencia', "1", ("1" == $gEntidade->esagencia)  ? true : false),[ 'class' => 'form-check-input'] }}
                {!! $errors->first('esagencia', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 80%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('esvendedor') }}
                </div>
                <div style="float: left; width: 20%;">
                    {{ Form::checkbox('esvendedor', "1", ("1" == $gEntidade->esvendedor)  ? true : false),[ 'class' => 'form-check-input'] }}
                {!! $errors->first('esvendedor', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 80%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('esconsecionario') }}
                </div>
                <div style="float: left; width: 20%;">
                {{ Form::checkbox('esconsecionario', "1", ("1" == $gEntidade->esconsecionario)  ? true : false),[ 'class' => 'form-check-input'] }}
                {!! $errors->first('esconsecionario', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 30%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('idcuentacontable') }}
                </div>
                <div style="float: left; width: 70%;">

                    <select class="form-control" id="idcuentacontable" name="idcuentacontable">
                        <option value="" {{ $gEntidade->idcuentacontable=='' ? 'selected' : ''; }}>--Select Imputacion Contable--</option>
                        @foreach ($tPlanCuentas as $key => $value)
                            <option value="{{ $value->id }}"
                            @if ($gEntidade->idcuentacontable!='' && $value->id == $gEntidade->idcuentacontable)
                                selected="selected"
                            @endif
                            >{{ $value->id.' | '.$value->descripcion }}</option>
                        @endforeach
                    </select>
                {!! $errors->first('idcuentacontable', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
                <div style="float: left; width: 30%; margin-top: 3px;">
                <span style="float: left; min-width: 150px;">
                {{ Form::label('lugarnacimiento') }}
                </div>
                <div style="float: left; width: 70%;">
                {{ Form::text('lugarnacimiento', $gEntidade->lugarnacimiento, ['class' => 'form-control' . ($errors->has('lugarnacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Lugarnacimiento']) }}
                {!! $errors->first('lugarnacimiento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20" style="width: 100%; float: left;">
        <br/>
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
