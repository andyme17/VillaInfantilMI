    <?php require 'nav-bar.view.php'; ?>

    <section class="img-back-blue h-md-back-2">
        <div class="content-back-blue container mx-auto">
            <h2>Instalaciones</h2>
            <hr>            
        </div>
    </section>
    <main class="img-back py-4">
        <div class="sec-gallery container">
            <ul class="pgwSlideshow">
                <?php foreach($imagenes as $imagen):?>
                    <li>
                        <img src="<?php echo PATH; ?>img/<?php echo $imagen['thumb'];?>">
                    </li>
                <?php endforeach;?>                         
            </ul>
        </div>
    </main>

    <section class="sec-contacto py-4">
        <div class="container">
            <div class="header-contacto mb-3">
                <p class="mb-3 mb-md-0">¿Deseas visitarnos personalmente?</p>
                <p>¡ No esperes más !</p>
            </div>
            <p>
                Para ofrecerte más informes sobre el lugar y horario de visita
                consulta el siguiente enlace, o bien dejanos un mensaje.
            </p>
            <a href="<?php echo PATH; ?>contacto.php" class="btn btn-outline-light mt-4">Contáctanos ></a>
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
    <script>
        /** Slide gallery script **/
        $(document).ready(function() {
            var pgwSlideshow = $('.pgwSlideshow').pgwSlideshow(); //puglin is initialized for gallery

            pgwSlideshow.reload({ //configuring the plugin
                autoSlide: true,
                maxHeight: 560
            });
        });
    </script>
</body>

</html>