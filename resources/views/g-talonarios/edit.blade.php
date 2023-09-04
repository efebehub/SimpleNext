@extends('layouts.app')

@section('template_title')
    Update G Talonario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h5 class="pt-2"> Modificar G Talonario</h5></span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-talonarios.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('g-talonarios.update', $gTalonario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('g-talonarios.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
