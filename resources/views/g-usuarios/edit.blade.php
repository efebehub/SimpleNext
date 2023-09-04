@extends('layouts.app')

@section('template_title')
    Modificar Usuario
@endsection

@section('content')


    @includeif('partials.errors')

    <div class="px-4 py-2 bg-light border-bottom" style="display: flex; justify-content: space-between; align-items: center;">

        <span id="card_title">
            <h3 class="pt-2"> Modificar Usuario </h3>
        </span>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ url('g-usuarios' ) }}"> Volver</a>
        </div>
    </div>


    <div class="abm">


            <form method="POST" action="{{ route('g-usuarios.update', ['g_usuario' => $gUser->id ]) }}"  role="form" enctype="multipart/form-data">
                
                {{ method_field('PATCH') }}
                @csrf

                @include('g-usuarios.form')

            </form>
      
    </div>

@endsection