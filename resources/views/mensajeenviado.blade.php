@extends('layout')
@section('title', 'Mensaje enviado')

@section('content')
<br><br>
<div class="row">
  <div class="col-md-7">
        <h1>Su mensaje enviado</h1>
      <br>
          <h4 class="text-justify">Su mensaje a sido enviado con exito.</h4>
          <a href="{{ route('contacto')}}">Volver</a>
      
      </div>
</div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

@endsection