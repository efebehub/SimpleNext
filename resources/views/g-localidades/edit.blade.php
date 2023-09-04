@extends('layouts.app')

@section('template_title')
    Update G Localidade
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h4 class="pt-2">Modificar Localidad</h4></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-localidades.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('g-localidades.update', $gLocalidade->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('g-localidades.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
