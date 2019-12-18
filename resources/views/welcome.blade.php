@extends('layouts.show')

@section('content')
<div class="jumbotron mt-3">
    <h1>Incio del sitio</h1>
    <p class="lead">Este es un ejemplo para la página principal.</p>
    <a class="btn btn-lg btn-primary" href="{{ route('docs') }}" role="button">Ver documentación »</a>
</div>
@endsection