@extends('layouts.app')

@section('template_title')
    {{ $gEntidade->name ?? 'Ver G Entidade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver G Entidade</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-entidades.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idlistadeprecios:</strong>
                            {{ $gEntidade->idlistadeprecios }}
                        </div>
                        <div class="form-group">
                            <strong>Idvendedor:</strong>
                            {{ $gEntidade->idvendedor }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipoiva:</strong>
                            {{ $gEntidade->idtipoiva }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $gEntidade->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio:</strong>
                            {{ $gEntidade->domicilio }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $gEntidade->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $gEntidade->email }}
                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            {{ $gEntidade->cp }}
                        </div>
                        <div class="form-group">
                            <strong>Barrio:</strong>
                            {{ $gEntidade->barrio }}
                        </div>
                        <div class="form-group">
                            <strong>Idlocalidad:</strong>
                            {{ $gEntidade->idlocalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Cuit:</strong>
                            {{ $gEntidade->cuit }}
                        </div>
                        <div class="form-group">
                            <strong>Iibb:</strong>
                            {{ $gEntidade->iibb }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $gEntidade->fechanacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Lugarnacimiento:</strong>
                            {{ $gEntidade->lugarnacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $gEntidade->comentario }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $gEntidade->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Idprovincia:</strong>
                            {{ $gEntidade->idprovincia }}
                        </div>
                        <div class="form-group">
                            <strong>Esempleado:</strong>
                            {{ $gEntidade->esempleado }}
                        </div>
                        <div class="form-group">
                            <strong>Idlogin:</strong>
                            {{ $gEntidade->idlogin }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuentacontable:</strong>
                            {{ $gEntidade->idcuentacontable }}
                        </div>
                        <div class="form-group">
                            <strong>Cbu:</strong>
                            {{ $gEntidade->cbu }}
                        </div>
                        <div class="form-group">
                            <strong>Escliente:</strong>
                            {{ $gEntidade->escliente }}
                        </div>
                        <div class="form-group">
                            <strong>Esproveedor:</strong>
                            {{ $gEntidade->esproveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Estransporte:</strong>
                            {{ $gEntidade->estransporte }}
                        </div>
                        <div class="form-group">
                            <strong>Esentfin:</strong>
                            {{ $gEntidade->esentfin }}
                        </div>
                        <div class="form-group">
                            <strong>Esagencia:</strong>
                            {{ $gEntidade->esagencia }}
                        </div>
                        <div class="form-group">
                            <strong>Esvendedor:</strong>
                            {{ $gEntidade->esvendedor }}
                        </div>
                        <div class="form-group">
                            <strong>Esconsecionario:</strong>
                            {{ $gEntidade->esconsecionario }}
                        </div>
                        <div class="form-group">
                            <strong>Idejercicio:</strong>
                            {{ $gEntidade->idejercicio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
