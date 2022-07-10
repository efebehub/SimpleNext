<!-- index.blade.php -->

@extends('layouts.app')

@section('titulo','Entidades')

@section('btnnuevo')
<a class="btn btn-success" href="{{ route('entidades.create') }}"> Create Company</a>
@endsection

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Game Name</td>
          <td>Game Price</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($entidades as $entidad)
        <tr>
            <td>{{$entidad->id}}</td>
            <td>{{$entidad->nombre}}</td>
            <td>{{$entidad->cuit}}</td>
            <td><a href="{{ route('games.edit', $entidad->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('games.destroy', $entidad->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection