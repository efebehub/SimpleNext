<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Nueva Entidad
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('entidades.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">NOMBRE:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>
          <div class="form-group">
              <label for="cases">DOMICILIO :</label>
              <input type="text" class="form-control" name="domicilio"/>
          </div>
          <button type="submit" class="btn btn-primary">GUARDAR</button>
      </form>
  </div>
</div>
@endsection