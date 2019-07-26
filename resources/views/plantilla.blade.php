<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
  </head>
  <body>
    <header>
        <div class="header-entero">
        <!--Menu con icono -->
        <div class="header-container">
      <div class="navbar">
        <div class="dropdown">
          <button class="dropbtn" id="action" href="action">
          <i class="fa fa-ellipsis-v"></i>
          </button>
          <div id="action"class="dropdown-content">
            <a href="#">PREGUNTAS FRECUENTES</a>
            <a href="register.php">REGISTRARSE</a>
            <a href="login.php">LOG IN </a>
            <a href="#">PORQUE LEER CON BOOKISH</a>
            <a href="categorias.php">CATEGORIAS</a>
            <a href="#">QUIENES SOMOS</a>
          </div>
        </div>
      </div>
      <img src="img/Bookish.png" class="logo-mini" alt="">
  </div>
  <!--PRIMER FILA INCLUYENDO LOGO -->
      <ul class="listagrande-header">
        <li class="menucorto header" id="chau">PREGUNTAS FRECUENTES</li>
        <li class="menucorto dentrodemenu"> <a href="home.php"> <img class="logo" src="img/Bookish.png" alt=""></a></li>
        <li class="menucorto header" id="chau"> <?php if (!$auth->UsuarioLogeado()): ?> <a href="register.php" class="menucorto">REGISTRARSE </a> /
        <?php endif; ?> <?php if (!$auth->UsuarioLogeado()):?><a class="menucorto header" href="login.php"> LOG IN</a><?php else: ?> <a class="menucorto header" href="logout.php"> LOG OUT</a>
        <?php endif; ?> </li>
      </ul>

  <!--SEGUNDA FILA INFLUYE MAS OPCIONES -->
      <ul class="bookish header" role="navigation">
          <li class="header"><i class="menulargo"></i>PORQUE LEER CON BOOKISH</li>
          <li class="header"><i class="menulargo"></i>|</li>
          <li class="header"><a href="categorias.php" class="menulargo header">CATEGORIAS</a></li>
          <li class="header"><i class="menulargo"></i>|</li>
          <li class="header"><i class="menulargo"></i>QUIENES SOMOS</li>
      </ul>
      </div>
    </header>
    @yield('principal')
  </body>
</html>
