@extends('layouts.app')

@section('content')<div class="compra-container">
  <div class="titulo-container">
    <h1 class="seccion-titulo">FINZALIZAR COMPRA</h1>
    <img src="/img/fondo-enc-register-09.jpg" class="fondo-titulo">
  </div>
<div class="compra-chico" id="cancelar-background">

  <div class="infomacion">
    <h3 class="compra" id="centrados">Tu pedido!</h1>
      <p class="centrados">Tu categoria es <span class="distinto">{{$categoria->title}}</span>, modalidad <span class="distinto">{{$modalidad->name}}</span>, y precio de <span class="distinto">${{$subscription->price}}</span></p>
    </div>
    <div class="infomacion-distinto" id="mas-estilo">
      <img src="/img/bookishfoto1.jpg" class="compra-foto" alt="">
    </div>

</div>
<div class="compra-chico">
      <div class="mas-chico">
        <form class="" action="{{"compra-realizada"}}" method="post">
          @csrf
        <h3 class="compra" id="centrados">Información del Pago</h3>
        <div class="input-container">
          <label class="form-input-compra" for="num-tarjeta">Número de Tarjeta</label>

          <input class="form-input-compra" type="number" id="num-tarjeta" name="num-tarjeta" placeholder="Numero de tarjeta..." required>
        </div>
        <div class="input-container">

          <label class="form-input-compra" for="fec-exp">Fecha de Expiración</label>
          <input class="form-input-compra" type="date" id="fec-exp" name="fec-exp" placeholder="Fecha de Expiracion..." required>
        </div>
        <div class="input-container">

        <label class="form-input-compra" for="cod-seg">Código de Seguridad</label>
        <input class="form-input-compra" type="number" id="cod-seg" name="cod-seg" placeholder="Codigo de Seguridad..." required>
      </div>
      <div class="input-container">

        <button class="boton-enviar" type="submit" name="subscription" value="{{$subscription->id}}" id="no-tan-grande" >Enviar</button>
      </div>
        </form>
      </div>
</div>
</div>
@endsection
