@extends('layouts.app')

@section('template_title')
    G Impuesto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2">{{ __('G Impuesto') }} </h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('g-impuestos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Porcentaje</th>
										<th>Compras</th>
										<th>Ventas</th>
										<th>Codigowsfe</th>
										<th>Idcuentacontabled</th>
										<th>Idcuentacontableh</th>

                                        <th style="width: 15%;"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive" style="height:70vh; overflow: auto;">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    @foreach ($gImpuestos as $gImpuesto)
                                        <tr>
                                            
											<td>{{ $gImpuesto->descripcion }}</td>
											<td>{{ $gImpuesto->porcentaje }}</td>
											<td>{{ $gImpuesto->compras }}</td>
											<td>{{ $gImpuesto->ventas }}</td>
											<td>{{ $gImpuesto->codigowsfe }}</td>
											<td>{{ $gImpuesto->idcuentacontabled }}</td>
											<td>{{ $gImpuesto->idcuentacontableh }}</td>

                                            <td>
                                                <form action="{{ route('g-impuestos.destroy',$gImpuesto->id) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    <a class="btn btn-sm btn-light " href="{{ route('g-impuestos.show',$gImpuesto->id) }}"><i class="icon-eye-open" title="Ver"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('g-impuestos.edit',$gImpuesto->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
