@extends('layout')
@section('title', 'Contacto')

@section('content')

  {{-- <hr class="featurette-divider"> --}}
<br><br>
  <!-- /END THE FEATURETTES -->
  <div class="row">
    <div class="col-md-6">
      <h1>Formulario de pedidos</h1>
      @if (session('estatus'))
      <br><br>
          <h3 style="color: yellow">{{session('estatus')}}</h3>
      @else
      <form action="{{ route('mensajeContacto')}}" method="post">
        @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre: </label>
              <input type="text" name='name' class="form-control"  placeholder="Nombre..." value="{{old('name')}}">
              {!! $errors->first('name', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email: </label>
              <input name="email" type="email" class="form-control"  placeholder="Email..." value="{{old('email')}}">
              {!! $errors->first('email', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Telefono: </label>
              <input name="fono" type="number" class="form-control"  placeholder="ingrese fono: 987654321" value="{{old('fono')}}">
              {!! $errors->first('fono', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mensaje:</label>
              <textarea name="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="10">{{old('mensaje')}}</textarea>
              {!! $errors->first('mensaje', '<small>:message</small>') !!}
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" id="factura" for="exampleCheck1">¿Necesita factura?</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @endif
  </div>
  <div class="col-md-6">
    <h1 class="center">Dirección</h1>
    <div>
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.690198757696!2d-70.69774208479986!3d-33.483415680764466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c4b851c9d621%3A0xdd6c5f6d87dfc0c9!2sCerrillos!5e0!3m2!1ses!2scl!4v1587575695907!5m2!1ses!2scl" width="100%" height="520" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
  </div>
</div>
<br>
<br>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

@endsection