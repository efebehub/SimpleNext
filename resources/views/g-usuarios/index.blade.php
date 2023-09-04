@extends('layouts.app')

@section('template_title')
    Usuarios
@endsection

@section('content')
    <div class="px-4 py-2 bg-light border-bottom" style="display: flex; justify-content: space-between; align-items: center;">

        <span id="card_title">
            <h3 class="pt-2"> Usuarios </h3>
        </span>

        <div class="float-right">
        <a href="{{ route('g-usuarios.create') }}" class="btn btn-primary float-right"  data-placement="left">
            {{ __('Nuevo') }}
        </a>
        </div>
    </div>

    <div class="abm">
        <div class="table-responsive">

            <table class="table table-striped table-hover mb-1">
                <thead>
                    <tr>
                        <th style="width: 30%;">Usuario</th>
                        <th style="width: 30%;">Mail</th>                
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive" style="height:70vh; overflow: auto;">
            <table class="table table-striped table-hover">
                <tbody>
                    @foreach ($xUsers as $item)
                        <tr>
                            <td style="width: 30%;">{{ $item->name }}</td>
                            <td style="width: 30%;">{{ $item->email }}</td>
                            <td>
                                <form action="{{ route('g-usuarios.destroy',['g_usuario' => $item->id]) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                    <a class="btn btn-sm btn-success" href="{{ route('g-usuarios.edit', ['g_usuario' => $item->id]) }}"><i class="icon-edit" title="Modificar"></i></a>
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
