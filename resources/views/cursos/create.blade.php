@extends('layouts.plantilla')

@section('title', 'create Curso')

@section('content')
  <div class="">
    <h1>create curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="nameCouse">Name Couse</label>
        <input type="text" class="form-control" id="nameCouse" name="nameCouse" value="{{old('nameCouse')}}" aria-describedby="nameCouseHelp" placeholder="Enter name the couse" >
        @error('nameCouse')
          <small id="nameCouseHelp" class="form-text text-muted text-danger">*{{$message}}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea  class="form-control" id="description" name="description" placeholder="Enter the description the couse">{{old('description')}}</textarea>
        @error('description')
          <small class="text-danger">*{{$message}}</small>
         @enderror
      </div>
      {{-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> --}}
      <button type="submit" class="btn btn-primary">Add Couse</button>
    </form>

    {{-- <select id="developers">
      @foreach( $roles as $key => $value )
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
   </select> --}}

  </div>
@endsection