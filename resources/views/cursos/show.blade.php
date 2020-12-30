
@extends('layouts.plantilla')

@section('title', 'Curso '. $curso->name)

@section('content')

  <div class="">
    {{-- <h1>welcome a curos: <?php echo  $curso ?> </h1> --}}
    <h1>welcome al curos:  {{ $curso->name}} </h1>
    <p> <strong>Description: </strong>
      {{ $curso->description}}
    </p>
  </div>

  <p>
    <a href="{{route('cursos.index')}}" class="btn btn-success">volver couse <i class="fa arrow-alt-circle-left"></i></a>
    <a href="{{route('cursos.edit',$curso)}}" class="btn btn-warning">Edit couse <i class="fa fa-pencil "></i></a>
 </p>
@endsection