@extends('layouts.app')

@section('template_title')
    {{ $gTipoComprobante->name ?? 'Ver G Tipo Comprobante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver G Tipo Comprobante</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-tipo-comprobantes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $gTipoComprobante->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipocomprobante:</strong>
                            {{ $gTipoComprobante->tipocomprobante }}
                        </div>
                        <div class="form-group">
                            <strong>Modulo:</strong>
                            {{ $gTipoComprobante->modulo }}
                        </div>
                        <div class="form-group">
                            <strong>Fondos:</strong>
                            {{ $gTipoComprobante->fondos }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $gTipoComprobante->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Ctacte:</strong>
                            {{ $gTipoComprobante->ctacte }}
                        </div>
                        <div class="form-group">
                            <strong>Asiento:</strong>
                            {{ $gTipoComprobante->asiento }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $gTipoComprobante->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Impresion:</strong>
                            {{ $gTipoComprobante->impresion }}
                        </div>
                        <div class="form-group">
                            <strong>Copias:</strong>
                            {{ $gTipoComprobante->copias }}
                        </div>
                        <div class="form-group">
                            <strong>Cae:</strong>
                            {{ $gTipoComprobante->cae }}
                        </div>
                        <div class="form-group">
                            <strong>Caetipodoc:</strong>
                            {{ $gTipoComprobante->caetipodoc }}
                        </div>
                        <div class="form-group">
                            <strong>Idtalonario:</strong>
                            {{ $gTipoComprobante->idtalonario }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuentacontable:</strong>
                            {{ $gTipoComprobante->idcuentacontable }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
