<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <title>Portafolio</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/rp.ico">

  <!-- Tipografia -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
    crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Scrrol -->
  <script src="js/smooth-scroll.min.js"></script>
  <script src="js/smooth-scroll.polyfills.min.js"></script>
  <!-- Normalize     -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Efecos y Animaciones -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/estilos.css">

  <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <header>
    <div class="contenedor">
      <nav class="menu">
        <a data-scroll href="#acerca-de">Acerca de</a>
        <a data-scroll href="#trabajos">Trabajos</a>
        <a data-scroll href="#contacto">Contacto</a>
      </nav>
      <div class="contenedor-texto wow zoomInLeft">
        <div class="texto">
          <h1 class="nombre">Rodrigo Perez</h1>
          <h2 class="profesion">Desarollador Web</h2>
        </div>
      </div>
    </div>
  </header>

  <section class="main">

    <section id="acerca-de" class="acerca-de parallax">
      <div class="contenedor">
        <div class="foto">
          <img src="img/perfil.jpg" width="115" height="115" alt="Rodrigo Perez">
        </div>

        <div class="texto">
          <h3 class="titulo wow fadeIn">Acerca de</h3>
          <p>Mi trabajo es seguir aprendiendo de las nuevas tecnologías,
            aunque me falta por conocer muchos complemetos para mi profeción
            como <span class="bold">Desarrollador Web</span>, aprendre poco a poco para asi lograr las
            metas y objetivos, a largo plazo pienso enseñar lo que estado aprendiendo a lo largo
            de mi profeción asi le servira a esas perosnas que buscan apredner <span class="bold">Desarrollo
              Web</span>.</p>
        </div>
      </div>

    </section>

    <section id="trabajos" class="trabajos">

      <div class="contenedor">
        <h3 class="titulo wow fadeInUp">Trabajos</h3>

        <div id="container">
          <div class="item">

            <div class="thumb">
              <img src="img/proyectos/1.jpg" alt="Buscador de Proyectos">
            </div>
            <div class="descripcion">
              <p target="_blanck" href="#" class="nombre">Buscador de Proyectos</p>
              <p class="categoria wow pulse">HTML5-CSS3-Angular-TypeScript</p>
            </div>

          </div>

          <div class="item">

            <div class="thumb ">
              <img src="img/proyectos/2.png" alt="Lorem thumb">
            </div>
            <div class="descripcion">
              <p class="nombre">Lorem thumb</p>
              <p class="categoria wow pulse">HTML5-CSS-Angular</p>
            </div>

          </div>

          <div class="item">

            <div class="thumb">
              <img src="img/proyectos/3.png" alt="Lorem thumb">
            </div>
            <div class="descripcion">
              <p class="nombre">Lorem thumb</p>
              <p class="categoria wow pulse">HTML5-CSS-Angular</p>
            </div>

          </div>

          <div class="item">

            <div class="thumb">
              <img src="img/proyectos/4.png" alt="Lorem thumb">
            </div>
            <div class="descripcion">
              <p class="nombre">Lorem thumb</p>
              <p class="categoria wow pulse">HTML5-CSS-Angular</p>
            </div>

          </div>

          <div class="item">

            <div class="thumb">
              <img src="img/proyectos/5.png" alt="Lorem thumb">
            </div>
            <div class="descripcion">
              <p class="nombre">Lorem thumb</p>
              <p class="categoria wow pulse">HTML5-CSS-Angular</p>
            </div>

          </div>

          <div class="item">

            <div class="thumb">
              <img src="img/proyectos/6.png" alt="Lorem thumb">
            </div>
            <div class="descripcion">
              <p class="nombre">Lorem thumb</p>
              <p class="categoria wow pulse">HTML5-CSS-Angular</p>
            </div>

          </div>

          <div class="item">

            <div class="thumb">
              <img src="img/proyectos/7.png" alt="Lorem thumb">
            </div>
            <div class="descripcion">
              <p class="nombre">Lorem thumb</p>
              <p class="categoria wow pulse">HTML5-CSS-Angular</p>
            </div>

          </div>

          <div class="item">

            <div class="thumb">
              <img src="img/proyectos/8.png" alt="Lorem thumb">
            </div>
            <div class="descripcion">
              <p class="nombre">Lorem thumb</p>
              <p class="categoria wow pulse">HTML5-CSS-Angular</p>
            </div>

          </div>
          <div class="item">

            <div class="thumb">
              <img src="img/proyectos/9.jpg" alt="Lorem thumb">
            </div>
            <div class="descripcion">
              <p class="nombre">Lorem thumb</p>
              <p class="categoria wow pulse">HTML5-CSS-Angular</p>
            </div>

          </div>
        </div>
      </div>
    </section>

  </section>

  <footer>


    <section id="contacto" class="contacto parallax">

      <div class="contenedor">

        <h3 class="titulo wow slideInDown">Contacto</h3>

        <form action="" class="formulario">
          <input class="wow slideInLeft" type="text" placeholder="Nombre" nombre="nombre" required>
          <input class="wow slideInRight" type="email" placeholder="Correo" name="correo" required>
          <textarea class="wow slideInDown" nombre="Mensaje" placeholder="Mensaje" cols="30" rows="10"></textarea>
          <input class="boton wow slideInUp" type="submit" value="Enviar">
        </form>

      </div>

    </section>

    <section class="redes-sociales">
      <div class="contenedor">
        <a target="_blanck" href="https://twitter.com/Rigo_Wong" class="twitter "><i class="fab fa-twitter wow slideInLeft"></i></a>
        <a target="_blanck" href="https://www.facebook.com/RigoWon" class="facebook wow slideInDown"><i class="fab fa-facebook-f"></i></a>
        <a target="_blanck" href="https://www.instagram.com/rigo_wong/" class="instagram wow slideInUp"><i class="fab fa-instagram"></i></a>
        <a target="_blanck" href="https://www.youtube.com/channel/UCyXJVe_3q0a4n3m142Gz2wA" class="youtube wow slideInDown"><i
            class="fab fa-youtube"></i></a>
        <a target="_blanck" href="https://www.pinterest.es/RigoWon/" class="pinterest wow slideInUp"><i class="fab fa-pinterest"></i></a>
        <a target="_blanck" href="https://github.com/RigoWong" class="github wow slideInDown"><i class="fab fa-github"></i></a>
        <a target="_blanck" href="https://www.tumblr.com/blog/rigowong" class="tumblr wow slideInRight"><i class="fab fa-tumblr"></i></a>
      </div>

      <p>RodrigoPerezWeb© 2018 - <?php echo date('Y'); ?> Todos los derechos reservados</p>

  </footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://masonry.desandro.com/masonry.pkgd.min.js'></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>

</body>

</html>