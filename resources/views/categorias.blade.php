@extends('layouts.app')
@section('content')


  <div class="container">
    <div class="parent">
      @foreach ($categories as $category)

      <div class="children">
        <h2><!-- Imprimir desde db-->{{$category->title}}</h2>
        <button type="button" name="button"> <a href="#" class="fa fa-eye categoria-white myBtn"></a> </button>
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
                                  <div class="mas-info">
                                      <h3>3 LIBROS PARA 3 MESES <br><span>$5.999</span></h3>
                                      <ul class="nada">
                                      <li class="titulo-libro">"Titulo"</li>
                                        <li class="autor">Autor</li>
                                        <li class="titulo-libro">"Titulo"</li>
                                        <li class="autor">Autor</li>
                                        <li class="titulo-libro">"Titulo"</li>
                                        <li class="autor">Autor</li>
                                      </ul>
                                  </div>
                                  <button type="button" name="button" class="try">Comprar modalidad regular</button>
                                </div>
                            </div>
                            <div class="chicos">
                              <div class="modalidad" id="dif2">
                                <div class="modalidad-especifica">
                                  <h2>Intensiva</h2>
                                </div>
                                <div class="mas-info">
                                    <h3>6 LIBROS PARA 3 MESES <br><span>$9.999</span></h3>
                                    <ul>
                                      <li class="titulo-libro">"Titulo"</li>
                                      <li class="autor">Autor</li>
                                      <li class="titulo-libro">"Titulo"</li>
                                      <li class="autor">Autor</li>
                                      <li class="titulo-libro">"Titulo"</li>
                                      <li class="autor">Autor</li>
                                    </ul>
                                </div>
                                <button type="button" name="button" class="try">Comprar modalidad Intensiva</button>
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
