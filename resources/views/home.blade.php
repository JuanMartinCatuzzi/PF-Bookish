@extends('layouts.app')

@section('content')

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <h2 class="home-frase">"LA PERSONA QUE NO LEE BUENOS LIBROS NO TIENE VENTAJA SOBRE EL QUE NO SABE LEER."</h2>
        <p class="home-autor">-Mark Twain.</p>
        <img class="d-block w-100" src="/img/bookish-02.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <h2 class="home-frase">"NO IMPORTA LO OCUPADO QUE PIENSAS QUE ESTÁS, DEBES ENCONTRAR TIEMPO PARA LEER, O ENTRÉGATE A UNA IGNORANCIA AUTOELEGIDA."</h2>
        <p class="home-autor">-Confucio.</p>
        <img class="d-block w-100" src="/img/bookish-02.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <h2 class="home-frase">"NO TE PREOCUPES POR EL FRACASO, SÓLO DEBES ACERTAR UNA VEZ."</h2>
        <p class="home-autor">-Drew Houston.</p>
        <img class="d-block w-100" src="/img/bookish-02.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <section class="productos">
      <div class="fondo-azul">

      </div>
      <div class="categorias">
        <div class="img primera">
          <img src="img/bookish-03.jpg" alt="" class="articulo">
        </div>
        <div class="img segunda">
          <img src="img/bookish-04.jpg" alt="" class="articulo">
        </div>
      </div>
    </section>
    <section class="interes">
      <h3 class="titulo">ARTICULOS DE INTERES</h3>
      <article class="articulos">
        <h4>TITULO</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" name="button"class="boton">Seguir leyendo</button>
      </article>
      <article class="articulos">
        <h4>TITULO</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" name="button" class="boton">Seguir leyendo</button>
      </article>
      <article class="articulos">
        <h4>TITULO</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" name="button" class="boton">Seguir leyendo</button>
      </article>
    </section>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

@endsection
