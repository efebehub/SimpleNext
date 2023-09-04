@extends('layouts.app')

@section('template_title')
    Create G Talonario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h5 class="pt-2"> Nuevo G Talonario </h5></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('g-talonarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('g-talonario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
