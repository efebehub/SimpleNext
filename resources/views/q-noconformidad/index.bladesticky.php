@extends('layouts.app')

@section('template_title')
    No Conformidad
@endsection

@section('content')

    <div class="px-4 py-2 bg-light border-bottom" style="display: flex; justify-content: space-between; align-items: center;">

        <span id="card_title">
            <h3 class="pt-2"> No Conformidades </h3>
        </span>

        <div class="float-right">
            <a href="{{ route('q-noconformidad.create') }}" class="btn btn-primary float-right"  data-placement="left">
                {{ __('Nuevo') }}
            </a>
        </div>
    </div>

    <div class="abm">
        <div class="table-responsive" style="overflow-y: auto;">
            <div class="sticky_anchor_begin"></div>
            <table data-show-columns="true" class="table table-striped table-hover"  style="overflow-y: auto;">
                <thead class="undefined sticky-header">
                    <tr>
                        <th style="width: 5%;">Nº</th>
                        <th style="width: 25%;">Descripcion</th>
                        <th style="width: 10%;">Incidencia</th>
                        <th style="width: 10%;">Solicita</th>
                        <th style="width: 10%;">Fecha</th>
                        <th style="width: 10%;">Responsable</th>
                        <th style="width: 10%;">Fecha Solución</th>
                        <th style="width: 30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($qNCs as $qNC)
                        <tr>
                            <td style="width: 5%;">{{ $qNC->idnoconformidad }}</td>
                            <td style="width: 25%;">{{ $qNC->descripcion }}</td>
                            <td style="width: 10%;">{{ $qNC->tipo=='C' ? 'Critica' : 'Leve' }}</td>
                            <td style="width: 10%;">{{ $qNC->nombregenera }}</td>
                            <td style="width: 10%;">{{ $qNC->fechagenera }}</td>
                            <td style="width: 10%;">{{ $qNC->nombresoluciona }}</td>
                            <td style="width: 10%;">{{ $qNC->fechasolucion }}</td>
                            
                            <td>
                                <form action="{{ route('q-noconformidad.destroy',$qNC->idnoconformidad) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                    <a class="btn btn-sm btn-success" href="{{ route('q-noconformidad.edit',$qNC->idnoconformidad) }}"><i class="icon-edit" title="Modificar"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="icon-remove" title="Borrar"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="sticky_anchor_end"></div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <x-alert color="success">  
        <p>{{ $message }}</p>
        </x-alert>
    @endif
@endsection
