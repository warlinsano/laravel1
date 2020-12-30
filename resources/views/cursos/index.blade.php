@extends('layouts.plantilla')

@section('title', 'Curso')

@section('content')
  <div class="">
    <h1>Todos  los cursos</h1>

    <p>
      <a href="{{route('cursos.create')}}" class="btn btn-primary">add couse <i class="fa fa-plus-circle"></i></a>
    </p>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($cursos as $curso)
          <tr>
            <th scope="row">{{$curso->id}}</th>
            <td>{{$curso->name}}</td>
            <td>{{$curso->description}}</td>
            <td>
              <a href="{{route('cursos.show', $curso->id)}}" class="btn btn-info">View details <i class="fa fa-list"></i></a>
            </td>
          </tr>
          @endforeach

      </tbody>
    </table>

    {{$cursos->links()}}

  </div>
@endsection