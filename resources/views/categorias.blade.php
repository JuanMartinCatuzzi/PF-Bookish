@extends('layouts.app')
@section('content')

  <div class="titulo-container">
    <h1 class="seccion-titulo">CATEGORÍAS</h1>
    <img src="/img/fondo-enc-register-09.jpg" class="fondo-titulo">
  </div>
  <div class="container">
    <div class="parent">
      @foreach ($categories as $category)

      <div class="children">
        <h2><!-- Imprimir desde db-->{{$category->title}}</h2>
        <button class="categorias" type="button" name="button"> <a href="#" class="fa fa-eye categoria-white myBtn"></a> </button>
      </div>
      <div class="modal myModal">    <!-- The Modal -->
      <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
            <div class="grande">

              <div class="chico" id="primero">
                  <h1>{{$category->title}}</h1>
                  <p>{{$category->description}} </p>
                  <p>Te brindamos los libros y el material adicional necesario para darte "la posta" sobre {{$category->title}} tanto actual como tradicional.</p>
              </div>
              <div class="chico" id="segundo">
                    <div class="oscuro">
                        <div class="todo">
                            <div class="chicos" id="titulo">
                              <h2>Modalidad</h2>
                            </div>
                            <div class="chicos">
                                <div class="modalidad" id="dif1">
                                  <div class="modalidad-especifica">
                                    <h2>Regular</h2>
                                  </div>
                                  @foreach ($subscriptions as $subscription)
                                    @if ($subscription->category_id==$category->id && $subscription->modality_id ==1)
                                  <div class="mas-info">
                                      <h3>3 LIBROS PARA 3 MESES <br><span>${{$subscription->price}}</span></h3>
                                      <ul class="nada">
                                        @foreach ($books as $book)
                                          @if ($book->category_id == $category->id && $book->modality_id == 1)
                                            <li class="titulo-libro">{{$book->title}} - {{$book->autor}}</li>
                                          @endif
                                        @endforeach
                                      </ul>
                                  </div>
                                  <div class="try"><form action="{{"comprar"}}" method="post">
                                    @csrf
                                  <button class="try"type="submit" name="Subscription" value="{{$subscription->id}}">Comprar modalidad regular</button></form></div>
                                </div>
                              @endif
                              @endforeach
                            </div>
                            <div class="chicos">
                              <div class="modalidad" id="dif2">
                                <div class="modalidad-especifica">
                                  <h2>Intensiva</h2>
                                </div>
                                <div class="mas-info">
                                  @foreach ($subscriptions as $subscription)
                                    @if ($subscription->category_id == $category->id && $subscription->modality_id==2)

                                    <h3>6 LIBROS PARA 3 MESES <br><span>{{$subscription->price}}</span></h3>
                                    <ul>
                                      @foreach ($books as $book)
                                        @if ($book->category_id == $category->id && $book->modality_id == 1)
                                          <li class="titulo-libro">{{$book->title}} - {{$book->autor}}</li>
                                        @endif
                                        @if ($book->category_id == $category->id && $book->modality_id == 2)
                                          <li class="titulo-libro">{{$book->title}} - {{$book->autor}}</li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                                <div name="button" class="try"><form action="{{"comprar"}}" method="post">
                                  @csrf
                                <button class="try" type="submit" name="Subscription" value="{{$subscription->id}}">Comprar modalidad intensiva</button></form></div>
                              @endif
                              @endforeach
                              </div>
                            </div>


                        </div>

                    </div>



              </div>

            </div>
        </div>
      </div>
    @endforeach
      </div>
    </div>


@endsection
