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
@endsection