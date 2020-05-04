@extends('layout')
@section('title', 'Productos')

@section('content')
<br><br>
<div class="row">
  <div class="col-md-12">
        <h1>Nuestros productos</h1>
        @include('partials.estatus')
        <br>
          <h4 class="text-justify">Elaborados con la más fina selección de ingredientes, productos no congelados</h4>
          @if (Auth::check())
          <br><a class="btn btn-success" href="{{ route('subir') }}">Subir Producto</a>
              
          @endif
   </div>

</div>
<div class="row">
    {{-- {{var_dump($productos)}} --}}

    @forelse ($productos as $producto)
    <div class="col-md-6">
        <div class="card mt-3" style="width: 80%;">
        <img class="card-img-top" src="images/{{$producto->img}}" alt="Card image cap" height="280px">
            <div class="card-body bg-grey">
            <h5 class="card-title  negro">{{$producto->nombre}}</h5>
              <p class="card-text  negro">valor C/U: {{$producto->precioUnitario}}</p>
              <p class="card-text  negro">valor x Mayor: {{$producto->precioPorMayor}}</p>
            @auth
            <a href="{{route('edit', $producto->id)}}" class="btn btn-success negro">Editar</a>
            <a href="{{route('delete', $producto->id)}}" class="btn btn-danger negro">Eliminar</a>
            @endauth
            </div>
          </div>
    </div>
    @empty
        <p>No hay productos</p>
    @endforelse
    
    
</div>
<br>
<div class="row">
    <div class="col-12">
        {{ $productos->links()}}
    </div>
</div>
  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

@endsection