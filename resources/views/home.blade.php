@extends('layouts.app')

@section('content')
  <div class="imagen">
    <img src="/img/bookish-02.jpg" alt="" class="cabeza">
    <h2 class="bienvenido">¡Bienvenido, {{ Auth::user()->name }}!</h2>
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
