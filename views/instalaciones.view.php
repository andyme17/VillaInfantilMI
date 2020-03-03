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
    <link rel="stylesheet" href="css/pgwslideshow.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'nav-bar.view.php'; ?>

    <section class="img-back-blue h-md-back-2 py-4">
        <div class="content-back-blue container mx-auto">
            <h2>Instalaciones</h2>
            <hr>
            <p class="text-back-blue">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, et nam tenetur reiciendis minus nesciunt rem
                amet impedit nulla qui, fugiat earum perferendis iusto vitae.(definir).
            </p>
        </div>
    </section>
    <main class="img-back py-4">
        <div class="sec-gallery container">
            <ul class="pgwSlideshow">
                <li>
                    <img src="<?php echo PATH; ?>img/img-instalacion2.jpg">
                </li>
                <li>
                    <img src="<?php echo PATH; ?>img/img-instalacion3.jpg">
                </li>
                <li>
                    <img src="<?php echo PATH; ?>img/img-instalacion4.jpg">
                </li>
                <li>
                    <img src="<?php echo PATH; ?>img/img-instalacion5.jpg">
                </li>
                <li>
                    <img src="<?php echo PATH; ?>img/img-instalacion6.jpg">
                </li>           
                <li>
                    <img src="<?php echo PATH; ?>img/img-instalacion7.jpg">
                </li>
                <li>
                    <img src="<?php echo PATH; ?>img/img-instalacion8.jpg">
                </li>
                <li>
                    <img src="<?php echo PATH; ?>img/img-instalacion9.jpg">
                </li>              
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