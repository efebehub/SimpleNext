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

    <div class="abm" style="background-color: #ccc;">
        <div class="table-responsive rounded bg-white shadow-sm p-3 mb-2">
            <table class="table table-borderless mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%;">Nº</th>
                        <th style="width: 35%;">Descripcion</th>
                        <th style="width: 10%;">Incidencia</th>
                        <th style="width: 10%;">Solicita</th>
                        <th style="width: 10%;">Fecha</th>
                        <th style="width: 10%;">Responsable</th>
                        <th style="width: 11%;">Fecha Solución</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive" style="height:75vh; overflow: auto;">
            @foreach ($qNCs as $qNC)
            <div class="rounded  shadow-sm p-3 mb-2 ficha" >
            <table class="table table-borderless mb-0">
                <tbody>
   
                        <tr onclick="onclicktr('{{ $qNC->idnoconformidad }}')">
                            <td style="width: 5%;">{{ $qNC->idnoconformidad }}</td>
                            <td style="width: 35%;">{{ $qNC->descripcion }}</td>
                            <td style="width: 10%;"><div class="spandot {{ $qNC->tipo=='C' ? 'spandotred' : 'spandotgre' }}"></div></td>
                            <td style="width: 10%;">{{ $qNC->nombregenera }}</td>
                            <td style="width: 10%;">{{ \Carbon\Carbon::parse($qNC->fechagenera)->formatLocalized('%d/%m/%Y');  }}</td>
                            <td style="width: 10%;">{{ $qNC->nombresoluciona }}</td>
                            <td style="width: 10%;">{{ \Carbon\Carbon::parse($qNC->fechasolucion)->formatLocalized('%d/%m/%Y'); }}</td>
                        </tr>
                    
                </tbody>
            </table>
            </div>
            @endforeach
        </div>
    </div>

    @if ($message = Session::get('success'))
        <x-alert color="success">  
        <p>{{ $message }}</p>
        </x-alert>
    @endif
@endsection


@stack('scripts')

<script>

function onclicktr(id) {
	var url = "{{ route('q-noconformidad.edit', ':id') }}";
	url = url.replace(':id', id);
	location.href = url;
}


</script>