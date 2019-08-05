<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header class="header-entero">
      <!--Menu con icono -->
      <div class="header-container">
    <div class="navbar">
      <div class="dropdown">
        <button class="dropbtn" id="action" href="action" >
        <i class="fa fa-ellipsis-v"></i>
        </button>
        <div id="action"class="dropdown-content">
          <a href="{{"/preguntas"}}">PREGUNTAS FRECUENTES</a>
          <a href="{{ route('register') }}">REGISTRARSE</a>
          <a href="{{ route('login') }}">LOG IN </a>
          <a href="#">PORQUE LEER CON BOOKISH</a>
          <a href="/categorias">CATEGORIAS</a>
          <a href="#">QUIENES SOMOS</a>
        </div>
      </div>
    </div>
    <img src="img/Bookish.png" class="logo-mini" alt="">
</div>
<!--PRIMER FILA INCLUYENDO LOGO -->
    <ul class="listagrande-header">
      <li class="menucorto header" id="chau"><a class="menucorto header" href="{{"/preguntas"}}">PREGUNTAS FRECUENTES</a></li>
      <li class="menucorto dentrodemenu"> <a href="{{route('home')}}"> <img class="logo" src="img/Bookish.png" alt=""></a></li>
      <li class="menucorto header" id="chau">
                        @guest
                                <a class="menucorto" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                /
                            @if (Route::has('register'))
                                    <a class="menucorto" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            @endif
      </li>
                        @else
                          @if (Auth::user()->role=='USER')
                          <a href="#" class="menucorto">{{Auth::user()->name}}</a>
                        @else
                          <a href="#" class="menucorto">Vista de Administrador</a>
                        @endif
                          /
                                    <a class="menucorto" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                        @endguest
            </ul>
            <ul class="bookish header" role="navigation">
                <li class="header"><a href="/quienes-somos" class="header menulargo">PORQUE LEER CON BOOKISH</a></li>
                <li class="header"><i class="menulargo"></i>|</li>
                <li class="header"><a href="/categorias" class="menulargo header">CATEGORIAS</a></li>
                <li class="header"><i class="menulargo"></i>|</li>
                <li class="header"><a href="/quienes-somos" class="header menulargo">QUIENES SOMOS</a></li>
            </ul>
          </header>
        <main>
            @yield('content')
        </main>
        <footer>
          <div class="flex-container">
            <ul class="listagrande">
              <li class="menucortobold">CONTACTO</li>
              <li class="menucortomini">BOOKISH.LIBROS@GMAIL.COM</li>
              <li class="menucortomini">+54 9 11 56541925</li>
              <li class="menucortobold">SEGUINOS EN @BOOKISH.LIBROS</li>
            </ul>
            <div class="data"><img class="data" src="img/bookish-05.jpg" alt="">
            </div>
          </div>
        </footer>
        <script src="js/app.js">

        </script>
        <script src="js/transitions.js">

        </script>
</body>
</html>
