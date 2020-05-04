<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <title>@yield('title', 'Panaderia Oasis')</title>
    <!-- Custom styles for this template -->
    <link href="{{ asset('asset/css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/estilos.css') }}" rel="stylesheet">

</head>
<body>
    

<body>
    <header>
  @include('partials/nav')
    </header>

<main role="main">

  @yield('carrousel')


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    @yield('content')

   

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


<!-- jQuery 3 -->
<script src="{{ asset('asset/js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap-->
<script src="{{ asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('asset/js/popper.min.js')}}"></script>

</body>
</html>