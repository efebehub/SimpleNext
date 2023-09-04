@extends('layouts.app')

@section('template_title')
    {{ $gLocalidade->name ?? 'Ver G Localidade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Ver G Localidade</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-localidades.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $gLocalidade->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            {{ $gLocalidade->cp }}
                        </div>
                        <div class="form-group">
                            <strong>Idprovincia:</strong>
                            {{ $gLocalidade->idprovincia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
