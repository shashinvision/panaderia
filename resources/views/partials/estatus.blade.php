@if (session('estatus'))
<br><br>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{session('estatus')}}
    </div>
@endif