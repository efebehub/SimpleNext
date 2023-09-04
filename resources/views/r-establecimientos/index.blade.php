@extends('layouts.app')

@section('template_title')
    Establecimientos
@endsection

@section('pageheader')
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title">
                <h3 class="pt-2">{{ __('Establecimientos') }} </h3>
            </span>

                <div class="float-right">
                <a href="{{ route('r-establecimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                    {{ __('Nuevo') }}
                </a>
                </div>
        </div>
    </div>

    <div class="card-body py-0">
        <div class="table-responsive">

            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Activo</th>
                        <th>Codigo</th>
                        <th>Numero</th>
                        <th>Provincia en caja</th>
                        <th>Localidad</th>
                        <th>Zona</th>
                        <th>Superficie</th>
                        <th>ID Zona</th>

                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection

@section('content')

    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-striped table-hover">

                <tbody>
                    @foreach ($establecimientos as $estab)
                        <tr>
                            <td>{{ $estab->NOMBRE }}</td>
                            <td>{{ $estab->ACTIVO }}</td>
                            <td>{{ $estab->CODIGO }}</td>								
                            <td>{{ $estab->NUMERO }}</td>	
                            <td>{{ $estab->PROVINCIA }}</td>									
                            <td>{{ $estab->LOCALIDAD }}</td>
                            <td>{{ $estab->ZONA }}</td>
                            <td>{{ $estab->SUPERFICIE }}</td>
                            <td>{{ $estab->ZONAID }}</td>

                            <td>
                                <form action="{{ route('r-establecimientos.destroy',$estab->CODIGO) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                    <a class="btn btn-sm btn-light" href="{{ route('r-establecimientos.edit',$estab->CODIGO) }}"><i class="icon-edit" title="Modificar"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light btn-sm"><i class="icon-trash" title="Borrar"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
        </div>
    </div>
                
    <div class="vh-50">

    @if ($message = Session::get('success'))
        <x-alert color="success">  
        <p>{{ $message }}</p>
        </x-alert>
    @endif

    </div>

@endsection
