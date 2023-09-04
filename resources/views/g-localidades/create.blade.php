@extends('layouts.app')

@section('template_title')
    Localidades
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header w-100" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><h5 class="pt-2">Localidad</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('g-localidades.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('g-localidades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('g-localidades.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
