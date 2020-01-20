<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Villa Infantil María Isabel</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php require 'nav-bar.view.php'; ?>

  <section class="banner">
    <div class="banner-content">
      <p class="header-banner">VILLA INFANTIL MARÍA ISABEL</p>
      <p class="sub-header-banner">Preparando a sus pequeños para el futuro</p>
    </div>
  </section>

  <main class="sec-bienvenida container my-4">
    <div class="content-bienvenida">
      <h2>Bienvenid@s</h2>
      <hr>
      <p class="text-bienvenida">
        El jardín de niños Villa Infantil María Isabel le da las más cordial bienvenida a sus pequeños.
        Ponemos a su disposición los servicios para el adecuado desarrollo de sus hijos en diversas
        áreas como la convivencia, idiomas y valores para que sus niños tengan un desarrollo sano y
        obtengan las habilidades que les permitirán continuar con su proceso de maduración.</p>
    </div>
    <div class="img-bienvenida pt-3 pt-lg-0 ml-lg-5">
      <img src="<?php echo PATH; ?>img/mascota-kinder.png" alt="Logotipo de la mascota de la escuela">
    </div>
  </main>

  <section class="img-oferta mt-md-4">
    <div class="container text-oferta">
      <h4>Conoce nuestra oferta educativa así como los diferentes servicios con los que contamos</h4>
      <a href="<?php echo PATH; ?>oferta-educativa.php" class="btn btn-outline-light mt-4">Ver más ></a>
    </div>
  </section>

  <section class="sec-primaria py-3 py-lg-4">
    <div class="row container mx-auto">
      <div class="col-12 col-md-5 col-lg-6 text-primaria">
        <p class="pb-2">
          El Jardín de Niños María Isabel nace como una institución hermana del <span> Colegio
            Jesús Romero Flores</span> que ofrece una educación de calidad a <span>nivel primaria</span>.
        </p>
        <a href="#" class="btn btn-primary mt-3 btn-sec-1">Visítanos > </a>
      </div>
      <div class="col-12 col-md-7 col-lg-6 img-primaria">
        <img src="<?php echo PATH; ?>img/img-primaria.jpg" class="img-fluid" alt="Fotografía de la primaria">
        <a href="#" class="btn btn-primary mt-2 btn-sec-2">Visítanos > </a>
      </div>
    </div>
  </section>

  <section class="sec-contacto py-4">
    <div class="container">
      <div class="header-contacto mb-3">
        <p class="mb-3 mb-md-0">¿Quieres saber más acerca de nuestros servicios?</p>
        <p>¡Acércate a nosotros!</p>
      </div>
      <p>
        Para ofrecerte más informes, llena el siguiente formulario y
        un asesor educativo se pondrá en contacto contigo a la brevedad.
      </p>
      <a href="<?php echo PATH; ?>contacto.php" class="btn btn-outline-light mt-4">Contáctanos ></a>
    </div>
  </section>

  <section class="sec-avisos py-4">
    <div class="row container mx-auto">
      <div class="col-12 col-md-8 col-lg-7 container">
        <h2 class="text-center">Avisos</h2>
        <div id="carouselExampleIndicators" class="carousel slide my-3" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo PATH; ?>img/img1.jpg" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo PATH; ?>img/img4.jpg" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo PATH; ?>img/img5.jpg" class="d-block img-fluid" alt="...">
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
      </div>
    </div>
  </section>

  <section class="sec-testimonios">
    <h2 class="text-center pt-4">Testimonios</h2>
    <div class="row container mx-auto py-4">
      <div class="col-12 col-lg-4 pb-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <div class="card-title">
              <h5 class="card-title">Rosa María Meza Iglesias</h5>
              <hr>
            </div>
            <blockquote class="card-text">
              “... está súper completo Villa Infantil pues
              es personalizado con personal capacitado, precio excelente y sobre
              todo calidad en educación. Recomendable para que los pequeños aprendan.”
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
      <div class="col-12 col-lg-4 pb-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <div class="card-title">
              <h5>Encuesta a padres de familia ciclo 2019</h5>
              <hr>
            </div>
            <blockquote class="card-text">
              “Gracias por todas las atenciones. La felicidad de mi hija es la
              de su papá y la mía.”
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
      <div class="col-12 col-lg-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <div class="card-title">
              <h5>Angélica González Martínez</h5>
              <hr>
            </div>
            <blockquote class="card-text">
              “Recomiendo ampliamente el jardín de niños Villa Infantil,
              el trato tanto a los pequeños como a los papás es el mejor,
              las maestras son un amor, pacientes y comprometidas.”
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

  <section class="sec-eventos">
    <div class="header-section">
      <h2 class="text-center pt-4">Últimos eventos</h2>
    </div>
    <div class="container row py-3 mx-auto">
      <div class="col-12 col-lg-4 pb-3">
        <article class="card shadow-sm">
          <img src="<?php echo PATH; ?>img/img-evento-nov-2019.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <div class="card-title text-center">
              <h5>Pastorela</h5>
              <hr>
            </div>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the card's content.
              Some quick example text to build on the card title and make up the bulk of the card's content.
              Some quick example text.              
            </p>            
          </div>
        </article>
      </div>
      <div class="col-12 col-lg-4 pb-3">
        <article class="card shadow-sm">
          <img src="<?php echo PATH; ?>img/img-evento-nov-2019.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <div class="card-title text-center">
              <h5>Día de muertos</h5>
              <hr>
            </div>
            <p class="card-text">
              Con un emocionante concurso, elegimos al “Rey Catrín” y “Reina Catrina” de nuestro evento, 
              al que todos los niños asistieron con un disfraz inspirado en ese famoso personaje creado 
              por José Guadalupe Posada.
            </p>
            </div>
        </article>
      </div>
      <div class="col-12 col-lg-4">
        <article class="card shadow-sm">
          <img src="<?php echo PATH; ?>img/img-evento-nov-2019.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <div class="card-title text-center">
              <h5>Feria del libro</h5>
              <hr>
            </div>
            <p class="card-text">
              Fomentando el gusto por la lectura nuestros pequeños y sus papás participaron en la feria del libro 
              donde escucharon cuentos y pudieron adquirir un libro con sus propios ahorros.
            </p>
          </div>
        </article>
      </div>
    </div>
  </section>
  <?php require 'footer.view.php'; ?>

  <!--Archivos javascript para bootstrap -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/headroom.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>