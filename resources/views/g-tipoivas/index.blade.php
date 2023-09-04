@extends('layouts.app')

@section('template_title')
    G Tipo Iva
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2">{{ __('G Tipo Iva') }} </h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('g-tipo-ivas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gTipoIvas as $gTipoIva)
                                        <tr>
                                            
											<td>{{ $gTipoIva->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('g-tipo-ivas.destroy',$gTipoIva->id) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    <a class="btn btn-sm btn-light " href="{{ route('g-tipo-ivas.show',$gTipoIva->id) }}"><i class="icon-eye-open" title="Ver"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('g-tipo-ivas.edit',$gTipoIva->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
                {!! $gTipoIvas->links() !!}
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <x-alert color="success">  
        <p>{{ $message }}</p>
        </x-alert>
    @endif
@endsection
