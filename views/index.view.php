  <?php require 'nav-bar.view.php'; ?>

  <!-- Ventana emergente -->
  <div id="modalBanner" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="init modal-content">
        <div class="float-right py-2 px-1">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <img src="<?php echo PATH; ?>img/banner-inicial.png" class="img-fluid" alt="Anuncios">
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
        <a href="https://colegiojesusromero.edu.mx/" target="_blank" class="btn btn-primary mt-3 btn-sec-1">Visítanos > </a>
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
              <img src="<?php echo PATH; ?>img/img-aviso.jpg" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo PATH; ?>img/img-instalacion2.jpg" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo PATH; ?>img/img-aviso.jpg" class="d-block img-fluid" alt="...">
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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#formOpinion">Dejar comentario o sugerencia ></button>

        <!-- Modal -->
        <div class="modal fade modal-form" id="formOpinion" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Dejanos un comentario ó sugerencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <form action="#" method="POST" class="form-opinion" id="form-opinion" novalidate>
                    <div class="group">
                      <input type="text" name="nombre" id="nombre" required="" autocomplete="off" value=""><span class="barra"></span>
                      <label for="nombre" class="float-label">Nombre completo: <span class="text-danger">*</span></label>   
                      <div id="error-nombre"></div>                  
                    </div>
                    <div class="group">
                      <input type="text" name="email" id="email" required="" autocomplete="off" value=""><span class="barra"></span>
                      <label for="email" class="float-label">Correo electrónico: <span class="text-danger">*</span></label>                      
                      <div id="error-email"></div>
                    </div>
                    <div class="form-star">
                      <label for="" class="">Calificanos: <span class="text-danger">*</span></label>
                      <p class="clasificacion">
                        <!-- first star -->
                        <input id="radio1" class="input-star" type="radio" name="votacion" value="5">
                        <label for="radio1" class="label-star">&#9733;</label>
                        <!-- second star -->
                        <input id="radio2" class="input-star" type="radio" name="votacion" value="4">
                        <label for="radio2" class="label-star">&#9733;</label>
                        <!-- third star -->
                        <input id="radio3" class="input-star" type="radio" name="votacion" value="3">
                        <label for="radio3" class="label-star">&#9733;</label>
                        <!-- fourth star -->
                        <input id="radio4" class="input-star" type="radio" name="votacion" value="2">
                        <label for="radio4" class="label-star">&#9733;</label>
                        <!-- fifth star -->
                        <input id="radio5" class="input-star" type="radio" name="votacion" value="1">
                        <label for="radio5" class="label-star">&#9733;</label>
                      </p>                      
                    </div>
                    <div id="error-votacion"></div>
                    <div class="group pt-2 pb-3">
                      <textarea name="mensaje" id="mensaje" rows="4" required="" autocomplete="off" onpaste="countChar();" onkeyup="countChar();" onkeypress="return limita(200);"></textarea><span class="barra"></span>
                      <label for="mensaje" class="float-label">Mensaje: <span class="text-danger">*</span></label>
                      <div id="res" class="text-secondary text-right">0 caracter/s</div>                      
                      <div id="error-mensaje"></div>
                    </div>
                    <div class="text-left">
                      <small class="text-secondary">* Todos los campos son obligatorios</small>
                    </div>
                    <div id="loaders">                      
                      <img id="spinner" src="img/spinner.gif">
                    </div>
                    <div class="btn-form-opinion">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        < Cerrar</button>
                      <button type="submit" class="btn btn-form-primary" id="btnForm" name="submit" value="enviar">Enviar >
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- termina modal -->
      </div>
    </div>
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
            <p class="card-text text-right pt-3">
              <small class="text-muted"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;Publicado en Febrero 2020</small>
            </p>
          </div>
        </article>
      </div>
      <div class="col-12 offset-md-2 col-md-8 offset-lg-0 col-lg-4 pb-3">
        <article class="card shadow">
          <img src="<?php echo PATH; ?>img/evento-enero.jpg" class="card-img-top" alt="Imagen ilustrativa del evento">
          <div class="card-body">
            <div class="card-title text-center">
              <h5>Día de reyes</h5>
              <hr>
            </div>
            <p class="card-text">
              Los Reyes Magos también visitaron nuestras instalaciones de Villa Infantil y
              nuestros pequeños recibieron un presente al regresar a clases después de las
              fiestas decembrinas. ¡Estuvimos muy emocionados y felices!
            </p>
            <p class="card-text text-right pt-3">
              <small class="text-muted"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;Publicado en Enero 2020</small>
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
            <p class="card-text text-right pt-3">
              <small class="text-muted"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;Publicado en Diciembre 2019</small>
            </p>
          </div>
        </article>
      </div>
    </div>
  </section>
  <?php require 'footer.view.php'; ?>

  <!-- JavaScript files for Bootstrap 4 -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/headroom.min.js"></script>

  <!-- Custom javascript files -->
  <script src="js/nav-bar.js"></script>
  <script src="js/form-opinion.js"></script>
  <script>
    $(document).ready(function() {
      /*activating the modal for the index page banner*/
      $('#modalBanner').modal('show');
    });
  </script>
</body>

</html>
