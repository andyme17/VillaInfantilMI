  <?php require 'nav-bar.view.php'; ?>

  <!-- Ventana emergente -->
  <section id="modalBanner" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="init modal-content">
        <div class="float-right py-2 px-1">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <img src="<?php echo PATH; ?>img/<?php echo $banner['thumb']; ?>" class="img-fluid" alt="Anuncios">
      </div>
    </div>
  </section>

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
      <p><?php echo nl2br($welcome_msg['descripcion']); ?></p>
    </div>
    <div class="img-bienvenida pt-3 pt-lg-0 ml-lg-5">
      <img src="<?php echo PATH; ?>img/mascota-kinder.png" alt="Logotipo de la mascota de la escuela">
    </div>
  </main>

  <section class="img-oferta mt-md-4">
    <div class="container text-oferta">
      <h4>Conoce nuestra oferta educativa así como los diferentes servicios con los que contamos</h4>
      <a href="<?php echo PATH; ?>servicios.php" class="btn btn-outline-light mt-4">Ver más&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
    </div>
  </section>

  <section class="img-back py-3 py-lg-4">
    <div class="row container mx-auto">
      <div class="col-12 col-md-5 col-lg-6 text-primaria">
        <p class="pb-2">
          El Jardín de Niños María Isabel nace como una institución hermana del <span> Colegio
            Jesús Romero Flores</span> que ofrece una educación de calidad a <span>nivel primaria</span>.
        </p>
        <a href="https://colegiojesusromero.edu.mx/" target="_blank" class="btn btn-primary mt-3 btn-sec-1">Visítanos&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
      </div>
      <div class="col-12 col-md-7 col-lg-6 img-primaria">
        <img src="<?php echo PATH; ?>img/img-primaria.jpg" class="img-fluid" alt="Fotografía de la primaria">
        <a href="#" class="btn btn-primary mt-2 btn-sec-2">Visítanos&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
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
      <a href="<?php echo PATH; ?>contacto.php" class="btn btn-outline-light mt-4">Contáctanos&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
    </div>
  </section>

  <section class="img-back py-4">
    <h2 class="text-center mb-4">Avisos</h2>
    <div class="container">
      <div class="row">
        <div class="col-12 offset-md-1 col-md-10">
          <ul class="pgwSlideshow">
            <?php foreach ($avisos as $aviso) : ?>
              <li>
                <img src="<?php echo PATH; ?>img/<?php echo $aviso['thumb']; ?>">
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-testimonios pb-4">
    <h2 class="text-center pt-4">Testimonios</h2>
    <div class="row container mx-auto py-4">
      <?php foreach ($testimonios as $testimonio) : ?>
        <div class="col-12 col-lg-4 pb-3">
          <div class="card text-center shadow">
            <div class="card-body">
              <div class="card-title">
                <h5 class="card-title"><?php echo $testimonio['nombre']; ?></h5>
                <hr>
              </div>
              <blockquote class="card-text"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;<?php echo $testimonio['mensaje']; ?>&nbsp;&nbsp;<i class="fas fa-quote-right"></i></blockquote>
              <div class="calificacion text-center">
                <?php for ($i = 0; $i < $testimonio['votacion']; $i++) : ?>
                  <i class="fas fa-star"></i>
                <?php endfor; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="row container mx-auto">
      <div class="col-12 text-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#formOpinion">Dejar comentario o sugerencia&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>

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
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar&nbsp;&nbsp;<i class="fas fa-times"></i></button>
                      <button type="submit" class="btn btn-form-primary" id="btnForm" name="submit" value="enviar">Enviar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
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
      <?php foreach ($eventos as $evento) : ?>
        <div class="col-12 offset-md-2 col-md-8 offset-lg-0 col-lg-4 pb-3">
          <article class="card shadow">
            <img src="<?php echo PATH; ?>img/<?php echo $evento['thumb']; ?>" class="card-img-top" alt="Imagen ilustrativa del evento">
            <div class="card-body">
              <div class="card-title text-center">
                <h5><?php echo $evento['titulo']; ?></h5>
                <hr>
              </div>
              <p class="card-text"><?php echo nl2br($evento['descripcion']); ?></p>
              <p class="card-text text-right pt-3">
                <small class="text-muted"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;Publicado en <?php echo fecha($evento['fecha']); ?></small>
              </p>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <?php require 'footer.view.php'; ?>

  <!-- JavaScript files for Bootstrap 4 -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/headroom.min.js"></script>

  <!-- JavaScript file for gallery -->
  <script src="js/pgwslideshow.min.js"></script>

  <!-- Custom javascript files -->
  <script src="js/nav-bar.js"></script>
  <script src="js/form-opinion.js"></script>
  <script>
    $(document).ready(function() {
      /*activating the modal for the index page banner*/
      $('#modalBanner').modal('show');

      /** Slide gallery script **/
      var pgwSlideshow = $('.pgwSlideshow').pgwSlideshow(); //puglin is initialized for gallery
      
      pgwSlideshow.reload({ //configuring the plugin
        autoSlide: true,
        displayList: false
      });
    });
  </script>
  </body>

  </html>