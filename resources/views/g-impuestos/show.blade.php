@extends('layouts.app')

@section('template_title')
    {{ $gImpuesto->name ?? 'Ver G Impuesto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver G Impuesto</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-impuestos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $gImpuesto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $gImpuesto->porcentaje }}
                        </div>
                        <div class="form-group">
                            <strong>Compras:</strong>
                            {{ $gImpuesto->compras }}
                        </div>
                        <div class="form-group">
                            <strong>Ventas:</strong>
                            {{ $gImpuesto->ventas }}
                        </div>
                        <div class="form-group">
                            <strong>Codigowsfe:</strong>
                            {{ $gImpuesto->codigowsfe }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuentacontabled:</strong>
                            {{ $gImpuesto->idcuentacontabled }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuentacontableh:</strong>
                            {{ $gImpuesto->idcuentacontableh }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
