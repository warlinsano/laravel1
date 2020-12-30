@extends('layouts.plantilla')

@section('title', 'Edit Curso')

@section('content')
  <div class="">
    <h1>Edit curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">
      @csrf
      @method('put')

      <div class="form-group">
        <label for="nameCouse">Name Couse</label>
        <input type="text" class="form-control" id="nameCouse" name="nameCouse" value="{{old('nameCouse', $curso->name)}}" aria-describedby="nameCouseHelp" placeholder="Enter name the couse" >
        @error('nameCouse')
           <small id="nameCouseHelp" class="form-text text-muted text-danger">*{{$message}}</small>
         @enderror      
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea  class="form-control" id="description" name="description" placeholder="Enter the description the couse">{{old('description', $curso->description)}}</textarea>
        @error('description')
           <small class="text-danger">*{{$message}}</small>
        @enderror
     </div>
      <button type="submit" class="btn btn-primary">edit Couse</button>
    </form>

  </div>
@endsection