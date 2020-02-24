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

  <!-- Ventana emergente -->
  <div id="modalBanner" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="float-right py-2 px-1">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <img src="<?php echo PATH; ?>img/banner-inicial.jpg" class="img-fluid" alt="Anuncios">
      </div>
    </div>
  </div>

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
      <p>
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
      <a href="<?php echo PATH; ?>servicios.php" class="btn btn-outline-light mt-4">Ver más ></a>
    </div>
  </section>

  <section class="img-back py-3 py-lg-4">
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

  <section class="img-back py-4">
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
              <img src="<?php echo PATH; ?>img/img-instalacion1.jpg" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo PATH; ?>img/img-instalacion2.jpg" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo PATH; ?>img/img-instalacion3.jpg" class="d-block img-fluid" alt="...">
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

  <section class="sec-testimonios pb-4">
    <h2 class="text-center pt-4">Testimonios</h2>
    <div class="row container mx-auto py-4">
      <h5 class="text-center mb-4">
        En la búsqueda de mejorar su experiencia con nosotros al final de cada ciclo
        escolar se realiza una encuesta para manifestar sus comentarios, observaciones
        y sugerencias.
      </h5>
      <div class="col-12 col-lg-4 pb-3">
        <div class="card text-center shadow">
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
        <div class="card text-center shadow">
          <div class="card-body">
            <div class="card-title">
              <h5>Zaira Rebollo</h5>
              <hr>
            </div>
            <blockquote class="card-text">
              “...el Amor, respeto y cuidado que tienen las especialistas con los niños,
              forman un muy buen equipo ... además la enseñanza es personalizada!,
              yo estoy muy contenta! porque mi hija estudie ahí”
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
        <div class="card text-center shadow">
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
    <div class="row container mx-auto">
      <div class="col-12 text-center">
        <p class="mb-2"> De igual forma, puedes dejarnos tu opinión dando clic en el siguiente enlace. </p>
        <h4 class="mb-4">!Recuerda, tu opinión es muy importante!</h4>
        <button class="btn btn-outline-light" id="showFormOpinion">Dejar comentario o sugerencia ></button>
      </div>
    </div>
  </section>
  <section class="sec-form-opinion img-back py-4">
    <form action="" method="post" class="form-opinion container" novalidate>
      <div class="container mx-auto">
        <div class="group">
          <input type="text" name="nombre" id="nombre" required="" autocomplete="off"><span class="barra"></span>
          <label for="">Nombre completo:</label>
        </div>
        <div class="group">
          <input type="text" name="email" id="email" required="" autocomplete="off"><span class="barra"></span>
          <label for="">Correo electrónico:</label>
        </div>
        <div class="group">
          <textarea name="" id="" rows="2" required></textarea><span class="barra"></span>
          <label for="">Mensaje:</label>
        </div>
        <div class="text-md-right">
          <button type="submit" class="btn btn-primary">Enviar comentario ></button>
        </div>
      </div>
    </form>
  </section>

  <section class="img-back">
    <h2 class="text-center pt-4">Últimos eventos</h2>
    <div class="sec-eventos container row py-3 mx-auto">
      <div class="col-12 offset-md-2 col-md-8 offset-lg-0 col-lg-4 pb-3">
        <article class="card shadow">
          <img src="<?php echo PATH; ?>img/evento-feb.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <div class="card-title text-center">
              <h5>Día del amor y la amistad</h5>
              <hr>
            </div>
            <p class="card-text">
              Para conmemorar el día de la amistad, nuestros alumnos realizaron un intercambio
              de playeritas y convivieron compartiendo su lunch con todos, como buenos amigos.
              También se tomaron lindas fotos con un tierno fondo que sus maestras prepararon 
              con mucho cariño para la ocasión.
            </p>
          </div>
        </article>
      </div>
      <div class="col-12 offset-md-2 col-md-8 offset-lg-0 col-lg-4 pb-3">
        <article class="card shadow">
          <img src="<?php echo PATH; ?>img/evento-enero.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <div class="card-title text-center">
              <h5>Día de Reyes</h5>
              <hr>
            </div>
            <p class="card-text">
              Los Reyes Magos también visitaron nuestras instalaciones de Villa Infantil y 
              nuestros pequeños recibieron un presente al regresar a clases después de las
              fiestas decembrinas. ¡Estuvimos muy emocionados y felices!
            </p>
          </div>
        </article>
      </div>
      <div class="col-12 offset-md-2 col-md-8 offset-lg-0 col-lg-4 pb-3">
        <article class="card shadow">
          <img src="<?php echo PATH; ?>img/evento-dic.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <div class="card-title text-center">
              <h5>Pastorela</h5>
              <hr>
            </div>
            <p class="card-text">
              Nuestros alumnos presentaron la divertida pastorela “entre pastores y diabluras” 
              en el teatro de la Unidad Santa Fe, donde hicieron gala de su talento y gracia para bailar,
              entreteniendo a familiares y amigos de la comunidad Villa Infantil y Jesús Romero Flores.
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