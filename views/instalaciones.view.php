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

    <section class="sec-hg py-4">
        <div class="content-history container mx-auto text-center">
            <h2 class="text-center">Conoce nuestras instalaciones</h2>
            <hr>
            <p class="text-history">
               Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, et nam tenetur reiciendis minus nesciunt rem
               amet impedit nulla qui, fugiat earum perferendis iusto vitae.(definir). 
            </p>
        </div>
    </section>
    <main class="sec-nosotros py-4">
        <div class="container">       
        <ul class="pgwSlideshow">
            <li>
                <img src="<?php echo PATH; ?>img/img-instalacion1.jpg">
            </li>
            <li>
                <img src="<?php echo PATH; ?>img/img-instalacion2.jpg">
            </li>
            <li>
                <img src="<?php echo PATH; ?>img/img-instalacion3.jpg">
            </li>
            <li>
                <img src="<?php echo PATH; ?>img/img-instalacion1.jpg">
            </li>
            <li>
                <img src="<?php echo PATH; ?>img/img-instalacion5.jpg">
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
        consulta el siguiente enlace, o bien dejanos un mensaje(verificar).
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
    <script src="js/pgwslideshow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>