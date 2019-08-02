@extends('layouts.app')
@section('content')
  <h1 class="preguntas">Preguntas Frecuentes</h1>
  <div class="preguntas-padre">
      <div class="preguntas-hijos" id="hijo1">
        <h2>¿Me quedo con el libro?</h2>
        <p>Por supuesto. Es esencial para nosotros que todes puedan leer a su ritmo y que tengan su libro en su estado físico. Esto ayuda con la absorpción de contenido y rapidez de lectura.</p>
      </div>
      <div class="preguntas-hijos" id="hijo2">
        <h2>¿Cómo eligen los libros?</h2>
        <p>Nosotros nos enfocamos en seleccionar libros que sean pertinentes, y que no sean muy enfocados en la teoría ni tampoco muy pesado en cuanto al contenido matemático</p>
      </div>
      <div class="preguntas-hijos" id="hijo3">
        <h2 class="preguntas">¿Me puedo contactar personalmente?</h2>
        <p>¡Obvio! ¡A nosotros nos encanta hablar con personas interesadas en Bookish! ¡Mandanos un mail y responderemos en los proximos 24 horas! </p>
      </div>
  </div>
@endsection
