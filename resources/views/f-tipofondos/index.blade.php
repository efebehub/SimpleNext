@extends('layouts.app')

@section('template_title')
    F Tipo Fondo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2">{{ __('F Tipo Fondo') }} </h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('f-tipofondos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Simbolo</th>
										<th>Cotizacion</th>
										<th>Es moneda</th>
										<th>Suma en caja</th>
										<th>Identidadfinanciera</th>
										<th>Idcuentacontabled</th>
										<th>Idcuentacontableh</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fTipoFondos as $fTipoFondo)
                                        <tr>
                                            
											<td>{{ $fTipoFondo->descripcion }}</td>
											<td>{{ $fTipoFondo->simbolo }}</td>
                                            <td>{{ $fTipoFondo->cotizacion }}</td>								
                                            <td>{{ $fTipoFondo->esmoneda=='1' ? 'si' : '' }}</td>	
                                            <td>{{ $fTipoFondo->sumaencaja=='1' ? 'si' : '' }}</td>									
											<td>{{ $fTipoFondo->identidadfinanciera }}</td>
											<td>{{ $fTipoFondo->idcuentacontabled }}</td>
											<td>{{ $fTipoFondo->idcuentacontableh }}</td>

                                            <td>
                                                <form action="{{ route('f-tipofondos.destroy',$fTipoFondo->id) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    <a class="btn btn-sm btn-light " href="{{ route('f-tipofondos.show',$fTipoFondo->id) }}"><i class="icon-eye-open" title="Ver"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('f-tipofondos.edit',$fTipoFondo->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
                {!! $fTipoFondos->links() !!}
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <x-alert color="success">  
        <p>{{ $message }}</p>
        </x-alert>
    @endif
@endsection
