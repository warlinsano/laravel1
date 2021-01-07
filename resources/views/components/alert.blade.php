{{-- <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-yellow-500">
    <span class="text-xl inline-block mr-5 align-middle">
      <i class="fas fa-bell {{$color}}" />
    </span>
    <span class="inline-block align-middle mr-8">
      <b class="capitalize">yellow!</b> This is a yellow alert - check it out!
    </span>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
      <span>×</span>
    </button>
  </div> --}}

  <div  role="alert" {{$attributes->merge(['class'=>"alert $color"]) }}>
    <a href="#" class="alert-link">{{$title}}</a>
    {{$slot}}

    <p><strong> {{$prueba()}} </strong></p>
  </div>

  {{-- <div class="alert {{$color}}" role="alert" >
    <a href="#" class="alert-link">{{$title}}</a>
    {{$slot}}
  </div> --}}


  {{-- <div class="alert alert-success" role="alert">
    This is a success alert—check it out!
  </div>
  <div class="alert alert-danger" role="alert">
    This is a danger alert—check it out!
  </div>
  <div class="alert alert-warning" role="alert">
    This is a warning alert—check it out!
  </div>
  <div class="alert alert-info" role="alert">
    This is a info alert—check it out!
  </div>
   --}}