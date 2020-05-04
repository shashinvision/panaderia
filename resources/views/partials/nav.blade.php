<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ route('inicio') }}">Panaderia <i>Oasis</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item @if(Request::segment(1) == '') ? active : '' @endif">
          <a class="nav-link" href="{{ route('inicio') }}">Inico<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @if(Request::segment(1) == 'about') ? active : '' @endif"">
            <a class="nav-link" href="{{ route('about') }}">¿Quines somos?</a>
          </li>
          <li class="nav-item @if(Request::segment(1) == 'productos') ? active : '' @endif"">
            <a class="nav-link" href="{{ route('mostrarproductos') }}">Productos</a>
          </li>
          <li class="nav-item @if(Request::segment(1) == 'contacto') ? active : '' @endif"">
            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
          </li>
          @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('auth_logout') }}">Cerrar Sesión</a>
          </li>
              
          @endif
          {{-- <li class="nav-item @if(Request::segment(1) == 'productos') ? active : '' @endif"">
            <a class="nav-link" href="{{ route('productos') }}">Productos</a>
          </li>
          <li class="nav-item @if(Request::segment(1) == 'pedidos') ? active : '' @endif"">
            <a class="nav-link" href="{{ route('pedidos') }}">Pedidos</a>
          </li>
          <li class="nav-item @if(Request::segment(1) == 'contacto') ? active : '' @endif"">
            <a class="nav-link" href="{{ route('contactos') }}">Contacto</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
        {{-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form> --}}
      </div>
    </nav>