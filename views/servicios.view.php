    <?php require 'nav-bar.view.php'; ?>

    <section class="img-back-blue h-md-back-2 py-4">
        <div class="content-back-blue container mx-auto">
            <div class="row">
                <div class="col-12">
                    <h2>Nuestros servicios</h2>
                    <hr>
                    <p class="text-back-blue">
                        Ofrecemos una amplia gama de actividades para el desarrollo integral de los pequeños.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <main class="py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Modelo Educativo</h2>
                    <p class="pt-3 text-horario">En el horario de 09:00 a 14:00 hrs, ofrecemos: </p>
                </div>
            </div>
            <div class="row pt-4 content-model">
                <div class="opc-model col-12 col-md-4 pb-4">
                    <img src="<?php echo PATH; ?>img/img1-service.png" alt="" class="img-fluid img-serv">
                    <p>Programa establecido por la SEP</p>
                </div>
                <div class="opc-model col-12 col-md-4 pb-4">
                    <img src="<?php echo PATH; ?>img/img2-service.jpg" alt="" class="img-fluid img-serv rounded-circle">
                    <p>Inglés</p>
                </div>
                <div class="opc-model col-12 col-md-4 pb-4">
                    <img src="<?php echo PATH; ?>img/img3-service.jpg" alt="" class="img-fluid img-serv rounded-circle">
                    <p>Francés</p>
                </div>
                <div class="opc-model col-12 col-md-4 pb-4">
                    <img src="<?php echo PATH; ?>img/img4-service.jpg" alt="" class="img-fluid img-serv rounded-circle">
                    <p>Educación Física</p>
                </div>
                <div class="opc-model col-12 col-md-4 pb-4">
                    <img src="<?php echo PATH; ?>img/img5-service.jpg" alt="" class="img-fluid img-serv rounded-circle">
                    <p>Educación Musical</p>
                </div>
                <div class="opc-model col-12 col-md-4">
                    <img src="<?php echo PATH; ?>img/img6-service.jpg" alt="" class="img-fluid img-serv rounded-circle">
                    <p class="pt-1">Computación</p>
                </div>
            </div>
        </div>
    </main>

    <div class="sec-after py-4">
        <div class="container text-center">
            <h3 class="text-center">Clases Afterschool</h3>
            <p class="pt-3">
                Pondremos a su disposición una oferta de clases especiales, fuera de
                horario escolar, con el fin de complementar el desarrollo de sus hijos.
            </p>
            <div class="content-after container pt-3">
                <?php foreach ($servicios as $servicio) : ?>
                    <div class="item-extra mb-3">
                        <img src="<?php echo PATH; ?>img/<?php echo $servicio['thumb'];?>" alt="Imagen ilustrativa de <?php echo $servicio['nombre'];?>" class="img-fluid">
                        <div class="content-extra">
                            <h4><?php echo $servicio['nombre'];?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>              
            </div>
        </div>
    </div>

    <section class="img-inscrip py-4 py-lg-5">
        <div class="container content-inscrip mx-auto">
            <h4 class="mb-3">¿Te interesa formar parte de la comunidad de Villa Infantil María Isabel?</h4>
            <h5>Inscríbete y se parte de nuestra comunidad</h5>
            <a href="<?php echo PATH; ?>inscripciones.php" class="btn btn-outline-light mt-4">Click aquí ></a>
        </div>
    </section>

    <section class="img-back py-4">
        <div class="content-service container mx-auto">
            <div class="row">
                <div class="col-12 col-md-6 order-2">
                    <img class="img-fluid pt-3 pt-lg-0" src="<?php echo PATH; ?>img/imgs-comida.jpg" alt="Foto del servicio de comida del preescolar">
                </div>
                <div class="col-12 col-md-6 pt-xl-5 order-md-2">
                    <h3>Comedor</h3>
                    <p>
                        A partir del mes de febrero, pondremos a su disposición el servicio de comedor dentro de las instalaciones
                        de Villa Infantil, a fin de poder brindarles una alternativa cómoda y saludable para este propósito.
                    </p>
                    <p>
                        Con asesoría nutricional, tendremos menús variados y balanceados, para asegurar un aporte calórico adecuado,
                        además de un excelente sabor para los niños.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-contacto py-4">
        <div class="container">
            <div class="header-contacto mb-3">
                <p class="mb-3 mb-md-0">¿Tienes dudas acerca de nuestro servicio?</p>
            </div>
            <p>
                Comunicate con nosotros llenando el siguiente formulario.
            </p>
            <a href="<?php echo PATH; ?>contacto.php" class="btn btn-outline-light mt-4">Contáctanos ></a>
        </div>
    </section>
    <?php require 'footer.view.php'; ?>

    <!--Archivos javascript para bootstrap -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/nav-bar.js"></script>
    </body>

    </html>