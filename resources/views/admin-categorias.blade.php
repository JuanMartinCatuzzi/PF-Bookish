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
        <button class="dropbtn" id="action" href="action">
        <i class="fa fa-ellipsis-v"></i>
        </button>
        <div id="action"class="dropdown-content">
          <a href="#">PREGUNTAS FRECUENTES</a>
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
      <li class="menucorto header" id="chau"><a class="menucorto header" href="#">PREGUNTAS FRECUENTES</a></li>
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
                          <a href="#" class="menucorto">{{Auth::user()->name}}</a>
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



          <div class="admin-navbar">
            <ul class="admin-navbar-lista">
              <li class="admin-navbar-item"><a class="admin-navbar-link" href="{{"ver-ventas"}}">Ventas</a></li>
              <li class="admin-navbar-item"><a class="admin-navbar-link" href="{{"admin-categorias"}}">Categorías</a></li>
            </ul>
          </div>

          <div class="admin-container">
            <h2 class="admin-titulo">Categorías</h2>
              <ul class="admin-ventas-container">
                <li class="admin-campo">Nombre:</li>
                <li class="admin-campo">Precio Regular:</li>
                <li class="admin-campo">Precio Intensivo:</li>
              </ul>
              <ul class="admin-ventas-lista">
                <li class="admin-ventas-lista">
                  @foreach ($categories as $category)
                  <ul class="lista-ventas">

                      <li class="admin-campo-venta">{{$category->title}} | <a href="/eliminar-categoria-{{$category->id}}">Eliminar</a></li>

                    {{-- @foreach ($categories as $category) --}}
                      @foreach ($subscriptions as $subscription)
                          @if ($subscription->category_id==$category->id)

                            <li class="admin-campo-venta">{{$subscription->price}}</li>
                          @endif
                        @endforeach
                  {{-- @endforeach --}}
                  </ul>
                @endforeach
                </li>
              </ul>

              <form class="" action="{{"/agregar-categoria"}}" method="post">
                @csrf
                <h2 class="admin-titulo centrado">Agregar Categoría:</h2>
                <div class="input-container">
                  <label class="form-input" for="title">Nombre:</label>
                  <input class="form-input" type="text" name="title">
                </div>
                <div class="input-container">
                  <label class="form-input" for="description">Descripción</label>
                  <input class="form-input" type="text" name="description" value="">
                </div>
                <div class="input-container">
                  <label class="form-input" for="reg-price">Precio para modalidad regular:</label>
                  <input class="form-input" type="text" name="reg-price" value="">
                </div>
                <div class="input-container">
                  <label class="form-input" for="int-price">Precio para modalidad intensiva:</label>
                  <input class="form-input" type="text" name="int-price" value="">
                </div>
                {{-- LIBROS --}}
                <div class="input-container">
                  <label class="form-input" for="firstBook">Título/Autor Libro 1 (Regular+Intensivo)</label>
                  <input class="form-input" type="text" name="firstBook" value="">
                  <input class="form-input" type="text" name="firstBookAutor" value="">
                </div>
                <div class="input-container">
                  <label class="form-input" for="SecondBook">Título/Autor Libro 2 (Regular+Intensivo)</label>
                  <input class="form-input" type="text" name="secondBook" value="">
                  <input class="form-input" type="text" name="secondBookAutor" value="">
                </div>
                <div class="input-container">
                  <label class="form-input" for="thirdBook">Título/Autor Libro 3 (Regular+Intensivo)</label>
                  <input class="form-input" type="text" name="thirdBook" value="">
                  <input class="form-input" type="text" name="thirdBookAutor" value="">
                </div>
                <div class="input-container">
                  <label class="form-input" for="fourthBook">Título/Autor Libro 4 (Intensivo)</label>
                  <input class="form-input" type="text" name="fourthBook" value="">
                  <input class="form-input" type="text" name="fourthBookAutor" value="">
                </div>
                <div class="input-container">
                  <label class="form-input" for="fifthBook">Título/Autor Libro 5 (Intensivo)</label>
                  <input class="form-input" type="text" name="fifthBook" value="">
                  <input class="form-input" type="text" name="fifthBookAutor" value="">
                </div>
                <div class="input-container">
                  <label class="form-input" for="sixthBook">Título/Autor Libro 6 (Intensivo)</label>
                  <input class="form-input" type="text" name="sixthBook" value="">
                  <input class="form-input" type="text" name="sixthBookAutor" value="">
                </div>
                <div class="input-container">
                  <button class="boton-enviar" type="submit">Agregar Categoría</button>
                </div>
              </form>



            </div>
