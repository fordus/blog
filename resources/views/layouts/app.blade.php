@extends('layouts.index')

@section('nav')
<nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{ route('index') }}">Inicio</a>

    @guest
                            <a class="p-2 text-dark" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        @else
                            <a class="p-2 text-dark" href="{{ route('home') }}">Panel</a>
                            <a class="p-2 text-dark" href="{{ route('users.index') }}">Usuarios</a>
                            <a class="p-2 text-dark" href="{{ route('roles.index') }}">Roles</a>
                            <a class="p-2 text-dark" href="{{ route('products.index') }}">Productos</a>
                            
                           
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    </button>


                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
<<<<<<< HEAD
                        @endguest
  </nav>
@endsection
=======
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
>>>>>>> 55ea19227e9966f187a1198cba0e288d6a32b51c
