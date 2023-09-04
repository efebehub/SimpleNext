@extends('layouts.app')

@section('template_title')
    {{ $tPlancuenta->name ?? 'Ver T Plancuenta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver T Plancuenta</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('t-plancuentas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcuentacontable:</strong>
                            {{ $tPlancuenta->idcuentacontable }}
                        </div>
                        <div class="form-group">
                            <strong>Cuenta:</strong>
                            {{ $tPlancuenta->cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tPlancuenta->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuentapadre:</strong>
                            {{ $tPlancuenta->idcuentapadre }}
                        </div>
                        <div class="form-group">
                            <strong>Asiento:</strong>
                            {{ $tPlancuenta->asiento }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $tPlancuenta->nivel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
