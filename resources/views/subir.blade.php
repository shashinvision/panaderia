@extends('layout')
@section('title', 'Subir producto')

@section('content')

  {{-- <hr class="featurette-divider"> --}}
<br><br>
  <!-- /END THE FEATURETTES -->
  <div class="row">
    <div class="col-md-6">
      <h1>Subir un producto</h1>
      <form action="{{ route('subirproductos')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('partials.formProductos')
        </form>
  </div>
  <div class="col-md-6">
   
  </div>
</div>
<br>
<br>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

@endsection