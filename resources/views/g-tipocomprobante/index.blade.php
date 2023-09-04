@extends('layouts.app')

@section('template_title')
    G Tipo Comprobante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2">{{ __('G Tipo Comprobante') }} </h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('g-tipo-comprobante.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Tipocomprobante</th>
										<th>Modulo</th>
										<th>Fondos</th>
										<th>Stock</th>
										<th>Ctacte</th>
										<th>Asiento</th>
										<th>Iva</th>
										<th>Impresion</th>
										<th>Copias</th>
										<th>Cae</th>
										<th>Caetipodoc</th>
										<th>Idtalonario</th>
										<th>Idcuentacontable</th>

                                        <th style="width: 15%;"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive" style="height:70vh; overflow: auto;">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    @foreach ($gTipocomprobante as $gTipoComprobante)
                                        <tr>
                                            
											<td>{{ $gTipoComprobante->descripcion }}</td>
											<td>{{ $gTipoComprobante->tipocomprobante }}</td>
											<td>{{ $gTipoComprobante->modulo }}</td>
											<td>{{ $gTipoComprobante->fondos }}</td>
											<td>{{ $gTipoComprobante->stock }}</td>
											<td>{{ $gTipoComprobante->ctacte }}</td>
											<td>{{ $gTipoComprobante->asiento }}</td>
											<td>{{ $gTipoComprobante->iva }}</td>
											<td>{{ $gTipoComprobante->impresion }}</td>
											<td>{{ $gTipoComprobante->copias }}</td>
											<td>{{ $gTipoComprobante->cae }}</td>
											<td>{{ $gTipoComprobante->caetipodoc }}</td>
											<td>{{ $gTipoComprobante->idtalonario }}</td>
											<td>{{ $gTipoComprobante->idcuentacontable }}</td>

                                            <td>
                                                <form action="{{ route('g-tipo-comprobante.destroy',$gTipoComprobante->id) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    <a class="btn btn-sm btn-light " href="{{ route('g-tipo-comprobante.show',$gTipoComprobante->id) }}"><i class="icon-eye-open" title="Ver"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('g-tipo-comprobante.edit',$gTipoComprobante->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
