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

    <section class="img-back-blue h-md-back-3 py-4">
        <div class="content-back-blue container mx-auto">
            <h2>Oferta Educativa</h2>
            <hr>
            <p class="text-back-blue">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, et nam tenetur reiciendis minus nesciunt rem
                amet impedit nulla qui, fugiat earum perferendis iusto vitae.(definir).
            </p>
        </div>
    </section>

    <main class="py-4">
        <h2 class="text-center">Modelo Educativo</h2>
        <div class="container">          
            
        </div>
    </main>
    
    <section class="img-inscrip py-4">
        <div class="container content-inscrip mx-auto">
            <h4 class="mb-3">¿Te interesa formar parte de la comunidad de Villa Infantil María Isabel?(definir)</h4>
            <h5>Checa nuestro proceso de inscripción(definir).</h5>
            <a href="<?php echo PATH; ?>inscripciones.php" class="btn btn-outline-light mt-4">Click aquí ></a>
        </div>
    </section>

   <section class="img-back py-4">
        <div class="content-service container mx-auto">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-7 order-2 ">
                    <img class="img-fluid pt-3 pt-md-0" src="<?php echo PATH; ?>img/img-servicio-comida.jpg" alt="Foto del servicio de comida del preescolar">
                </div>
                <div class="col-12 col-md-6 col-xl-5 order-md-2 pt-xl-5">
                    <h3>Servicio de Comida</h3>
                    <p>
                        En Villa Infantil María Isabel ponemos a su disposición el servicio de desayuno en horario regular 
                        y comida en el periodo afterclass,  a fin de poder brindarles una alternativa cómoda y saludable para este
                        propósito, con menús variados y balanceados, asegurando una buena alimentación para sus pequeños.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-contacto py-4">
    <div class="container">
      <div class="header-contacto mb-3">
        <p class="mb-3 mb-md-0">¿Tienes dudas acerca de nuestro servicio?(definir)</p>
      </div>
      <p>
        Comunicate con nosotros llenando el siguiente formulario. (definir)
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
    <script src="js/main.js"></script>
</body>
</html>    