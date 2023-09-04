@extends('layouts.app')

@section('template_title')
    Localidades
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="abm">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2">Localidades</h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('g-localidades.show','0') }}" class="btn btn-primary float-right"  data-placement="left">
                                  Actualizar
                                </a>
                              </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th style="width: 15%;">Descripcion</th>
										<th style="width: 15%;">Cp</th>
										<th style="width: 15%;">Provincia</th>

                                        <th style="width: 15%;"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive" style="height:70vh; overflow: auto;">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    @foreach ($gLocalidades as $gLocalidade)
                                        <tr>
                                            
											<td style="width: 15%;">{{ $gLocalidade->descripcion }}</td>
											<td style="width: 15%;">{{ $gLocalidade->cp }}</td>
											<td style="width: 15%;">{{ $gLocalidade->provincia }}</td>

                                            <td style="width: 15%;">
                                                <a class="btn btn-sm btn-success" href="{{ route('g-localidades.edit',$gLocalidade->id) }}"><i class="icon-edit" title="Modificar"></i></a>
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
