@extends('layouts.app')

@section('template_title')
    S Listadeprecio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2">{{ __('S Listadeprecio') }} </h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('s-listadeprecios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th>Descripcion</th>
										<th>Utilidad</th>
										<th>Bonificacion1</th>
										<th>Bonificacion2</th>
										<th>Bonificacion3</th>
										<th>Idejercicio</th>

                                        <th style="width: 15%;"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive" style="height:70vh; overflow: auto;">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    @foreach ($sListadeprecios as $sListadeprecio)
                                        <tr>
                                            
											<td>{{ $sListadeprecio->descripcion }}</td>
											<td>{{ $sListadeprecio->utilidad }}</td>
											<td>{{ $sListadeprecio->bonificacion1 }}</td>
											<td>{{ $sListadeprecio->bonificacion2 }}</td>
											<td>{{ $sListadeprecio->bonificacion3 }}</td>
											<td>{{ $sListadeprecio->idejercicio }}</td>

                                            <td>
                                                <form action="{{ route('s-listadeprecios.destroy',$sListadeprecio->id) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    <a class="btn btn-sm btn-light " href="{{ route('s-listadeprecios.show',$sListadeprecio->id) }}"><i class="icon-eye-open" title="Ver"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('s-listadeprecios.edit',$sListadeprecio->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
                </div>
                
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <x-alert color="success">  
        <p>{{ $message }}</p>
        </x-alert>
    @endif
@endsection
