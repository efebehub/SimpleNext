@extends('layouts.app')

@section('template_title')
    T Plancuenta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2">{{ __('T Plancuenta') }} </h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('t-plancuentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>


                    <div class="card-body" >
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th style="width: 15%;">Idcuentacontable</th>
										<th style="width: 35%;">Descripcion</th>
										<th style="width: 15%;">Idcuentapadre</th>
										<th style="width: 15%;">Asiento</th>
    
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive" style="height:70vh; overflow: auto;">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    @foreach ($tPlancuentas as $tPlancuenta)
                                        <tr>
                                            
											<td style="width: 15%; padding-left: {{ $tPlancuenta->nivel*30 }}px; ">{{ $tPlancuenta->id }}</td>
											<td style="width: 35%; padding-left: {{ $tPlancuenta->nivel*30 }}px; ">{{ $tPlancuenta->descripcion }}</td>
											<td style="width: 15%;">{{ $tPlancuenta->idcuentapadre }}</td>
											<td style="width: 15%;">{{ $tPlancuenta->asiento=='1' ? 'si' : '' }}</td>
                         

                                            <td>
                                                <form action="{{ route('t-plancuentas.destroy',$tPlancuenta->id) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    <a class="btn btn-sm btn-light " href="{{ route('t-plancuentas.show',$tPlancuenta->id) }}"><i class="icon-eye-open" title="Ver"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('t-plancuentas.edit',$tPlancuenta->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
