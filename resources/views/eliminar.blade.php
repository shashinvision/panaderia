@extends('layout')
@section('title', 'Elimnar')

@section('content')
<br><br>
<div class="row">
  <div class="col-md-12">
        <h1>Esta seguro que quiere eliminar este producto ?</h1>
        <br>
  <h4 class="text-justify text-secondary">{{$producto->nombre}}</h4>
        
   </div>

</div>
<div class="row">
    {{-- {{var_dump($productos)}} --}}

    <div class="col-md-6">
        <div class="card mt-3" style="width: 80%;">
        <img class="card-img-top" src="{{'../images/'.$producto->img}}" alt="Card image cap" height="280px">
            <div class="card-body bg-grey">
            <h5 class="card-title  negro">{{$producto->nombre}}</h5>
              <p class="card-text  negro">valor C/U: {{$producto->precioUnitario}}</p>
              <p class="card-text  negro">valor x Mayor: {{$producto->precioPorMayor}}</p>
            <a href="{{route('remove', $producto->id)}}" class="btn btn-danger negro">Eliminar</a>
            <a href="{{route('mostrarproductos')}}" class="btn btn-warning negro">Volver</a>
            </div>
          </div>
    </div>

    
    
</div>
<br>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

@endsection