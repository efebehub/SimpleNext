@extends('layouts.app')

@section('template_title')
    {{ $gTalonario->name ?? 'Ver G Talonario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver G Talonario</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-talonarios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $gTalonario->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Numero1:</strong>
                            {{ $gTalonario->numero1 }}
                        </div>
                        <div class="form-group">
                            <strong>Numero2:</strong>
                            {{ $gTalonario->numero2 }}
                        </div>
                        <div class="form-group">
                            <strong>Letra:</strong>
                            {{ $gTalonario->letra }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
