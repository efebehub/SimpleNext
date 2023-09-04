@extends('layouts.app')

@section('template_title')
    {{ $pTitulo }}
@endsection

@section('content')


    <div class="px-4 py-2 bg-light border-bottom" style="display: flex; justify-content: space-between; align-items: center;">

        <span id="card_title">
            <h3 class="pt-2"> {{ $pTitulo }} </h3>
        </span>

        <div class="float-right">
        <a href="{{ route('g-entidades.create', ['pModulo' => $pModulo]) }}" class="btn btn-primary float-right"  data-placement="left">
            {{ __('Nuevo') }}
        </a>
        </div>
    </div>

    <div class="abm">
        <div class="table-responsive">

            <table class="table table-striped table-hover mb-1">
                <thead>
                    <tr>
                        <th style="width: 20%;">Nombre</th>
                        <th style="width: 10%;">Cuit</th>
                        
                        <th style="width: 20%;">Domicilio</th>
                        <th style="width: 10%;">Telefono</th>
                        <th style="width: 10%;">Email</th>
                        <th style="width: 10%;">Barrio</th>
                        <th style="width: 10%;">Localidad</th>
                
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive" style="height:70vh; overflow: auto;">
            <table class="table table-striped table-hover">
                <tbody>
                    @foreach ($gEntidades as $gEntidade)
                        <tr>
                            <td style="width: 20%;">{{ $gEntidade->nombre }}</td>
                            <td style="width: 10%;">{{ $gEntidade->cuit }}</td>
                            
                            <td style="width: 20%;">{{ $gEntidade->domicilio }}</td>
                            <td style="width: 10%;">{{ $gEntidade->telefono }}</td>
                            <td style="width: 10%;">{{ $gEntidade->email }}</td>
                            <td style="width: 10%;">{{ $gEntidade->barrio }}</td>
                            <td style="width: 10%;">{{ $gEntidade->localidad }}</td>
                            
                            <td>
                                <form action="{{ route('g-entidades.destroy',['g_entidade' => $gEntidade->id, 'pModulo' => $pModulo]) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                    <a class="btn btn-sm btn-success" href="{{ route('g-entidades.edit', ['g_entidade' => $gEntidade->id , 'pModulo' => $pModulo]) }}"><i class="icon-edit" title="Modificar"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="icon-remove" title="Borrar"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
                
    </div>

    @if ($message = Session::get('success'))
        <x-alert color="success">  
        <p>{{ $message }}</p>
        </x-alert>
    @endif
@endsection
