@extends('layouts.index')

@section('nav')
<nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{ route('index') }}">Inicio</a>
    <a class="p-2 text-dark" href="{{ route('price') }}">Planes</a>
    <a class="p-2 text-dark" href="{{ route('docs') }}">Documentación</a>

    @if (Route::has('login'))
        @auth
            <a class="btn btn-outline-primary" href="{{ url('/home') }}">Panel administrativo</a>
        @else
            <a class="p-2 text-dark" href="{{ route('login') }}">Ingresar</a>

        @if (Route::has('register'))
            <a class="btn btn-outline-primary" href="{{ route('register') }}">Registrarse</a>
        @endif
        @endauth
    @endif
  </nav>
<<<<<<< HEAD
@endsection
=======
</div>


<div class="container">
    @yield('content')

<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">© 2017-2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
>>>>>>> 55ea19227e9966f187a1198cba0e288d6a32b51c
