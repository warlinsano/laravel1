
@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
  <div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p> 
  </div>
    
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3>Column 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
      <div class="col-sm-4">
        <h3>Column 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
      <div class="col-sm-4">
        <h3>Column 3</h3>        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
    </div>

      @php
        $color='alert-success';
        $alert='alert';
    @endphp

    <x-alert :color="$color" class="mb-4">
      <x-slot name="title">
         Titulo 1
      </x-slot>
      Hola mundo
     </x-alert>

    <x-alert color="alert-warning">
      <x-slot name="title">
        Titulo 2
     </x-slot>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nesciunt voluptas delectus quisquam doloremque fugit nisi aliquid! Magnam itaque tempora harum sequi iusto nulla beatae, reprehenderit commodi cupiditate molestias voluptatem.
    </x-alert>

    {{-- <x-alert  /> --}}
    <x-alert2 color="alert-info"> 
    </x-alert2> 

  <x-dynamic-component :component=" $alert" >
    <x-slot name="title">
      Titulo 1
    </x-slot>
    Hola mundo
  </x-dynamic-component>

    
  </div>
@endsection

