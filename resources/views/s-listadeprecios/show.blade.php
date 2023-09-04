@extends('layouts.app')

@section('template_title')
    {{ $sListadeprecio->name ?? 'Ver S Listadeprecio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver S Listadeprecio</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('s-listadeprecios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $sListadeprecio->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Utilidad:</strong>
                            {{ $sListadeprecio->utilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Bonificacion1:</strong>
                            {{ $sListadeprecio->bonificacion1 }}
                        </div>
                        <div class="form-group">
                            <strong>Bonificacion2:</strong>
                            {{ $sListadeprecio->bonificacion2 }}
                        </div>
                        <div class="form-group">
                            <strong>Bonificacion3:</strong>
                            {{ $sListadeprecio->bonificacion3 }}
                        </div>
                        <div class="form-group">
                            <strong>Idejercicio:</strong>
                            {{ $sListadeprecio->idejercicio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
