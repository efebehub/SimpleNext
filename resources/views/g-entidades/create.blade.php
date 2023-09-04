@extends('layouts.app')

@section('template_title')
Nuevo {{$pTitulo}}
@endsection

@section('content')


    @includeif('partials.errors')

    <div class="px-4 py-2 bg-light border-bottom" style="display: flex; justify-content: space-between; align-items: center;">

        <span class="card-title"><h3 class="pt-2">Nuevo {{$pTitulo}}</h3></span>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ url('g-entidades/'.$pModulo ) }}"> Volver</a>
        </div>
    </div>


    <div class="abm">
        <form method="POST" action="{{ route('g-entidades.store', ['pModulo' => $pModulo]) }}"  role="form" enctype="multipart/form-data">
            @csrf

            @include('g-entidades.form')

        </form>
    </div>


@endsection
