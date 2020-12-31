
@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
  <div class="jumbotron text-center">
    <h1>Dejanos un mensaje</h1>
    <p>Lo que no quieras decir</p> 
  </div>

  <div class="">
    <h1>create curso</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter you name " >
        @error('name')
          <small id="name" class="form-text text-muted text-danger">*{{$message}}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="">Correo:</label>
        <input type="text" class="form-control" id="correo" name="correo" placeholder="Enter you correo" >
        @error('correo')
          <small id="correo" class="form-text text-muted text-danger">*{{$message}}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="">Mensaje:</label>
        <textarea  class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Enter the message"></textarea>
        @error('mensaje')
          <small class="text-danger">*{{$message}}</small>
         @enderror
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @if (session('info'))
        <script>
          alert("{{session('info')}}");
        </script>
    @endif

  </div>
@endsection

