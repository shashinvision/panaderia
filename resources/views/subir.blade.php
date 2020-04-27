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
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre: </label>
              <input type="text" name='nombre' class="form-control"  placeholder="Nombre..." value="{{old('nombre')}}">
              {!! $errors->first('nombre', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Categoria: </label>
              <select class="form-control" id="cars" name="categoria_id">
                <option class="negro" value="">--Seleccione un valor--</option>
                @foreach ($categorias as $categoria)
                <option class="negro" value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>  
                @endforeach
              </select>
              {!! $errors->first('categoria_id', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Precio C/U: </label>
              <input name="precioUnitario" type="number" class="form-control"  placeholder="..." value="{{old('precioUnitario')}}">
              {!! $errors->first('precioUnitario', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Precio por mayor: </label>
              <input name="precioPorMayor" type="number" class="form-control"  placeholder="..." value="{{old('precioPorMayor')}}">
              {!! $errors->first('precioPorMayor', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Imagen:</label>
            <input class="form-control" type="file" name="img">
              {!! $errors->first('img', '<small>:message</small>') !!}
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
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