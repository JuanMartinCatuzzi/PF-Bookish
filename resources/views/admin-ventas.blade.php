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
      <li class="menucorto header" id="chau">PREGUNTAS FRECUENTES</li>
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
            <h2 class="admin-titulo">Pendientes de entrega:</h2>
              <ul class="admin-ventas-container">
                <li class="admin-campo">Nombre:</li>
                <li class="admin-campo">Apellido:</li>
                <li class="admin-campo">Provincia:</li>
                <li class="admin-campo">Ciudad:</li>
                <li class="admin-campo">Dirección:</li>
                <li class="admin-campo">Categoría:</li>
                <li class="admin-campo">Modalidad:</li>
                <li class="admin-campo">Marcar como Entregado</li>
              </ul>
              <form class="admin-entrega" action="{{"/marcar-entregado"}}" method="post">
                @csrf
              <ul class="admin-ventas-lista">
                <li class="admin-ventas-lista">
                  @foreach ($pendientes as $pendiente)
                  <ul class="lista-ventas">
                    @foreach ($users as $user)
                      @if ($pendiente->user_id==$user->id)
                        <li class="admin-campo-venta">{{$user->name}}</li>
                        <li class="admin-campo-venta">{{$user->surname}}</li>
                        <li class="admin-campo-venta">{{$user->province}}</li>
                        <li class="admin-campo-venta">{{$user->city}}</li>
                        <li class="admin-campo-venta">{{"$user->street $user->number"}}</li>
                      @endif
                    @endforeach
                    @foreach ($subscriptions as $subscription)

                      @if ($pendiente->subscription_id==$subscription->id)
                        @foreach ($categories as $category)
                          @if ($subscription->category_id==$category->id)
                  <li class="admin-campo-venta">{{$category->title}}</li>
                          @endif
                        @endforeach
                      @endif
                    @endforeach
                @foreach ($subscriptions as $subscription)
                  @if ($pendiente->subscription_id == $subscription->id)
                    @foreach ($modalities as $modality)
                      @if ($subscription->modality_id==$modality->id)

                  <li class="admin-campo-venta">{{$modality->name}}</li>
                      @endif
                    @endforeach
                  @endif
                @endforeach
                  <li class="admin-campo-venta">   <input type="checkbox" name="{{$pendiente->id}}" value="{{$pendiente->id}}">  </li>
                </ul>
              @endforeach
                </li>
              </ul>
              <div class="input-container">

              <button type="submit" name="" class="boton-enviar">Entregado</button>
            </div>
            </form>
          </div>


          <script src="js/app.js">

          </script>
          <script src="js/transitions.js">

          </script>
          </body>
          </html>
