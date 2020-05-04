@extends('layout')
@section('title', 'Subir producto')

@section('content')

  {{-- <hr class="featurette-divider"> --}}
<br><br>
  <!-- /END THE FEATURETTES -->
  <div class="row">
    <div class="col-md-6">
      <h1>Subir un producto</h1>
      <form action="{{ route('ingresar')}}" method="post" >
        @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre: </label>
              <input type="text" name='nombre' class="form-control"  placeholder="Nombre..." value="{{old('nombre')}}">
              {!! $errors->first('nombre', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password: </label>
              <input name="pass" type="password" class="form-control"  placeholder="..." value="{{old('pass')}}">
              {!! $errors->first('pass', '<small>:message</small>') !!}
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Entrar</button>
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