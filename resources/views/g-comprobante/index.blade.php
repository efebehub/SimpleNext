@extends('layouts.app')

@section('template_title')
    G Comprobante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2">{{ __('G Comprobante') }} </h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('g-comprobantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idcaja</th>
										<th>Idtipocomprobante</th>
										<th>Idvendedor</th>
										<th>Identidad</th>
										<th>Modulo</th>
										<th>Numero1</th>
										<th>Numero2</th>
										<th>Letra</th>
										<th>Fecha</th>
										<th>Vencimiento</th>
										<th>Periododeposito</th>
										<th>Descripcion</th>
										<th>Estado</th>
										<th>Importe Subtotal</th>
										<th>Importe Bonificacion1</th>
										<th>Importe Bonificacion2</th>
										<th>Importe Recfin</th>
										<th>Importe Impuestos</th>
										<th>Importe Total</th>
										<th>Importe Cancelado</th>
										<th>Entidadocasional</th>
										<th>Idtransporte1</th>
										<th>Idtransporte2</th>
										<th>Idcondicionventa</th>
										<th>Contrareembolso</th>
										<th>Idejercicio</th>
										<th>Cae</th>
										<th>Idmoneda</th>
										<th>Cotizacion</th>
										<th>Caevence</th>
										<th>Concepto</th>
										<th>Idlistadeprecios</th>
										<th>Idconcesionario</th>
										<th>Idfinanciacion</th>
										<th>Iddeposito</th>
										<th>Operacion</th>

                                        <th style="width: 15%;"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive" style="height:70vh; overflow: auto;">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    @foreach ($gComprobantes as $gComprobante)
                                        <tr>
                                            
											<td>{{ $gComprobante->idcaja }}</td>
											<td>{{ $gComprobante->idtipocomprobante }}</td>
											<td>{{ $gComprobante->idvendedor }}</td>
											<td>{{ $gComprobante->identidad }}</td>
											<td>{{ $gComprobante->modulo }}</td>
											<td>{{ $gComprobante->numero1 }}</td>
											<td>{{ $gComprobante->numero2 }}</td>
											<td>{{ $gComprobante->letra }}</td>
											<td>{{ $gComprobante->fecha }}</td>
											<td>{{ $gComprobante->vencimiento }}</td>
											<td>{{ $gComprobante->periododeposito }}</td>
											<td>{{ $gComprobante->descripcion }}</td>
											<td>{{ $gComprobante->estado }}</td>
											<td>{{ $gComprobante->importe_subtotal }}</td>
											<td>{{ $gComprobante->importe_bonificacion1 }}</td>
											<td>{{ $gComprobante->importe_bonificacion2 }}</td>
											<td>{{ $gComprobante->importe_recfin }}</td>
											<td>{{ $gComprobante->importe_impuestos }}</td>
											<td>{{ $gComprobante->importe_total }}</td>
											<td>{{ $gComprobante->importe_cancelado }}</td>
											<td>{{ $gComprobante->entidadocasional }}</td>
											<td>{{ $gComprobante->idtransporte1 }}</td>
											<td>{{ $gComprobante->idtransporte2 }}</td>
											<td>{{ $gComprobante->idcondicionventa }}</td>
											<td>{{ $gComprobante->contrareembolso }}</td>
											<td>{{ $gComprobante->idejercicio }}</td>
											<td>{{ $gComprobante->cae }}</td>
											<td>{{ $gComprobante->idmoneda }}</td>
											<td>{{ $gComprobante->cotizacion }}</td>
											<td>{{ $gComprobante->caevence }}</td>
											<td>{{ $gComprobante->concepto }}</td>
											<td>{{ $gComprobante->idlistadeprecios }}</td>
											<td>{{ $gComprobante->idconcesionario }}</td>
											<td>{{ $gComprobante->idfinanciacion }}</td>
											<td>{{ $gComprobante->iddeposito }}</td>
											<td>{{ $gComprobante->operacion }}</td>

                                            <td>
                                                <form action="{{ route('g-comprobantes.destroy',$gComprobante->id) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    <a class="btn btn-sm btn-light " href="{{ route('g-comprobantes.show',$gComprobante->id) }}"><i class="icon-eye-open" title="Ver"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('g-comprobantes.edit',$gComprobante->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
