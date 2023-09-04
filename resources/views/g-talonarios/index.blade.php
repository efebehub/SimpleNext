@extends('layouts.app')

@section('template_title')
    G Talonario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h5 class="pt-2">{{ __('G Talonario') }} </h5>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('g-talonarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Descripcion</th>
										<th>Numero1</th>
										<th>Numero2</th>
										<th>Letra</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gTalonarios as $gTalonario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $gTalonario->descripcion }}</td>
											<td>{{ $gTalonario->numero1 }}</td>
											<td>{{ $gTalonario->numero2 }}</td>
											<td>{{ $gTalonario->letra }}</td>

                                            <td>
                                                <form action="{{ route('g-talonarios.destroy',$gTalonario->id) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    <a class="btn btn-sm btn-light " href="{{ route('g-talonarios.show',$gTalonario->id) }}"><i class="icon-eye-open" title="Ver"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('g-talonarios.edit',$gTalonario->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
                {!! $gTalonarios->links() !!}
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <x-alert color="success">  
        <p>{{ $message }}</p>
        </x-alert>
    @endif
@endsection
