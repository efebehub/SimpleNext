@extends('layouts.app')

@section('template_title')
    {{ $fTipoFondo->name ?? 'Ver F Tipo Fondo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver F Tipo Fondo</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('f-tipo-fondos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $fTipoFondo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>sumaencaja:</strong>
                            {{ $fTipoFondo->sumaencaja }}
                        </div>
                        <div class="form-group">
                            <strong>Cotizacion:</strong>
                            {{ $fTipoFondo->cotizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Esmoneda:</strong>
                            {{ $fTipoFondo->esmoneda }}
                        </div>
                        <div class="form-group">
                            <strong>Simbolo:</strong>
                            {{ $fTipoFondo->simbolo }}
                        </div>
                        <div class="form-group">
                            <strong>Identidadfinanciera:</strong>
                            {{ $fTipoFondo->identidadfinanciera }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuentacontabled:</strong>
                            {{ $fTipoFondo->idcuentacontabled }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuentacontableh:</strong>
                            {{ $fTipoFondo->idcuentacontableh }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
