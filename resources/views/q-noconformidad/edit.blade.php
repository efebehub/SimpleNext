@extends('layouts.app')

@section('template_title')
Modificar 
@endsection

@section('content')


    @includeif('partials.errors')


    <div class="px-4 py-2 bg-light border-bottom" style="display: flex; justify-content: space-between; align-items: center;">

        <span id="card_title">
            <h3 class="pt-2"> Modificar No Conformidad </h3>
        </span>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('q-noconformidad.index') }}"> Volver</a>
        </div>
    </div>

    <div class="abm">
        <form method="POST" action="{{ route('q-noconformidad.update', $qNc->idnoconformidad) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            
            @include('q-noconformidad.form')

        </form>
    </div>

@endsection
