<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Villa Infantil María Isabel</title>
  <script defer src="js/all.js"></script>
</head>

<body>
  <header class="site-header">
    <div class="nav-bar">
      <div class="nav-responsive py-2 px-3 px-md-4">
        <a href="/" class="">
          <img src="img/logo.png" class="mobile-logo" alt="Logotipo de la escuela">
        </a>
        <a href="#nav" class="mobile-icon">
          <i class="fas fa-bars"></i>
        </a>
      </div>

      <div class="nav-container">
        <nav id="nav" class="navegation">
          <a href="#">INICIO</a>
          <a href="#">NOSOTROS</a>
          <a href="#" class="opc">OFERTA EDUCATIVA</a>
          <a href="/" class="py-2 logo-center">
            <img src="img/logo.png" class="logo" alt="Logotipo de la escuela">
          </a>
          <a href="#">INSCRIPCIONES</a>
          <a href="#">INSTALACIONES</a>
          <a href="#">CONTACTO</a>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <section class="principal-slide">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/img1.jpg" class="img-slide-1 d-block" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>VILLA INFANTIL MARÍA ISABEL</h1>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/img2.jpg" class="img-slide-1 d-block" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Second slide label</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/img3.jpg" class="img-slide-1 d-block" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Third slide label</h1>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main class="container my-4">
    <div class="sec-bienvenida">
      <div class="content-bienvenida">
        <h2>Bienvenid@s</h2>
        <hr>
        <p class="text-bienvenida">
          El jardín de niños Villa Infantil María Isabel le da las más cordial bienvenida a sus pequeños.
          Ponemos a su disposición los servicios para el adecuado desarrollo de sus hijos en diversas
          áreas como la convivencia, idiomas y valores para que sus niños tengan un desarrollo sano y
          obtengan las habilidades que les permitirán continuar con su proceso de maduración.</p>
      </div>
      <div class="img-bienvenida pt-3 pt-lg-0 mx-lg-5">
        <img src="img/mascotakinder.png" alt="Logotipo de la mascota de la escuela">
      </div>
    </div>
  </main>

  <section class="img-oferta">
    <div class="container text-oferta">
      <h4>Conoce nuestra oferta educativa así como los diferentes servicios con los que contamos</h4>
      <a href="#" class="btn btn-outline-light mt-4">Ver más ></a>
    </div>
  </section>

  <section class="container my-4 slide-avisos">
    <h2 class="text-center mb-4">Avisos</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/av1.jpg" class="img-slide-2 d-block" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/av3.jpg" class="img-slide-2 d-block" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/av1.jpg" class="img-slide-2 d-block" alt="...">
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
  </section>

  <section class="container mt-4 mx-auto">
    <h2 class="text-center">Últimos eventos</h2>
    <div class="row mt-4">
      <div class="col-12 col-md-4 pb-3">
        <article class="card shadow-sm">
          <img src=" img/img1.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <h5 class="card-title">Título del evento</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary mt-2">Leer más</a>
          </div>
        </article>
      </div>
      <div class="col-12 col-md-4 pb-3">
        <article class="card shadow-sm">
          <img src="img/img1.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <h5 class="card-title">Título del evento</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary mt-2">Leer más</a>
          </div>
        </article>
      </div>
      <div class="col-12 col-md-4">
        <article class="card shadow-sm">
          <img src="img/img1.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <h5 class="card-title">Título del evento</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary mt-2">Leer más</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="sec-contacto mt-4 py-4">
    <div class="container">
      <h3 class="mb-3">Frase</h3>
      <p>Para ofrecerte más informes acerca de nuestros servicios, llena el siguiente formulario
        y un asesor educativo se pondrá en contacto contigo a la brevedad.
      </p>
      <div class="text-md-right">
      <a href="#" class="btn btn-outline-light mt-3">Contáctanos ></a>
      </div>
      
    </div>
  </section>

  <section class="testimonios container mt-4">
    <h2 class="text-center">Testimonios</h2>
    <div class="row mt-4 mt-md-5">
      <div class="col-12 col-md-4 pb-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Nombre de la persona</h5>
            <hr>
            <blockquote class="card-text">
              Lorem Ipsum has been the industry's standard dummy text ever
              since the 1500s, when an unknown printer took a galley of type
              and scrambled it to make a type specimen book.
            </blockquote>
            <div class="calificacion text-center">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 pb-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Nombre de la persona</h5>
            <hr>
            <blockquote class="card-text">
              Lorem Ipsum has been the industry's standard dummy text ever
              since the 1500s, when an unknown printer took a galley of type
              and scrambled it to make a type specimen book.
            </blockquote>
            <div class="calificacion text-center">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Nombre de la persona</h5>
            <hr>
            <blockquote class="card-text">
              Lorem Ipsum has been the industry's standard dummy text ever
              since the 1500s, when an unknown printer took a galley of type
              and scrambled it to make a type specimen book.
            </blockquote>
            <div class="calificacion text-center">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="mt-4 mt-mb-5">
    <div class="sec-footer">
      <div class="row container mx-auto py-4">
        <div class="img-footer col-12 col-md-0 col-lg-4 text-center">
          <img src="img/mascotakinder.png" alt="Logotipo de la mascota del kinder">
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0 mt-lg-2">
          <div class="img-footer-2 text-center mb-md-3">
            <img src="img/mascotakinder.png" class="size-img-footer" alt="Logotipo de la mascota del kinder">
          </div>
          <h5>Enlaces de interés</h5>
          <hr>
          <ul>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Oferta Educativa</a></li>
            <li><a href="#">Inscripciones</a></li>
            <li><a href="#">Instalaciones y servicios</a></li>
            <li><a href="#">Nivel Primaria </a></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-2">
          <h5>Contacto</h5>
          <hr>
          <div class="row pl-2 pb-3">
            <div class="col-1">
              <i class="fas fa-map-marker-alt icon"></i>
            </div>
            <div class="col-10 pl-4 pl-lg-3">
              <p>Morelos 11, Santa Fe. Alvaro Obregon, CP 01210 Ciudad de México, CDMX</p>
            </div>
          </div>
          <div class="row pl-2 pb-3">
            <div class="col-1">
              <i class="fas fa-envelope icon"></i>
            </div>
            <div class="col-10 pl-4 pl-lg-3">
              <p>colegiojrf@live.com.mx</p>
            </div>
          </div>
          <div class="row pl-2 pb-3">
            <div class="col-1">
              <i class="fas fa-phone icon"></i>
            </div>
            <div class="col-10 pl-4 pl-lg-3">
              <p>55 70 59 39</p>
            </div>
          </div>
          <div class="row pl-4 pt-3">
            <h5>Siguenos en:</h5>
            <a href="https://www.facebook.com/Villa-Infantil-Maria-Isabel-813116022199232/"><i class="fab fa-facebook icon-2 ml-4"></i></a>
            <a href="#"> <i class="fab fa-twitter icon-2 ml-4"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-copyright row py-3">
      <div class="container sec-content-copy">
        <p class="pb-2 pb-md-0">&copy;2020 Todos los derechos reservados</p>
        <nav>
          <a href="#">Aviso de Privacidad</a>
          <a href="#">Otro documento</a>
          <a href="#">Otro documento</a>
        </nav>
      </div>
    </div>
  </footer>

  <!--Archivos javascript para bootstrap -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>