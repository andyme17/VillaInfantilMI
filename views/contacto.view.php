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

    <main class="sec-contact py-4">
        <div class="content-contact container mx-auto">
            <div class="text-contact pb-3">
                <h3>Para más información</h3>
                <hr>
                <p class="my-4">Envía tus datos y nos pondremos en contacto contigo a la brevedad</p>
                <p>Ó bien comunicate al <span>21 67 74 36</span> en el horario de atención</p>
            </div>
            <form action="" class="form-contact">
                <div class="container mx-auto">
                    <div class="group">
                        <input type="text" name="" id="" required><span class="barra"></span>
                        <label for="">Nombre:</label>
                    </div>
                    <div class="group">
                        <input type="text" name="" id="" required><span class="barra"></span>
                        <label for="">Apellidos:</label>
                    </div>
                    <div class="group">
                        <input type="email" name="" id="" required><span class="barra"></span>
                        <label for="">Correo electrónico:</label>
                    </div>
                    <div class="group">
                        <textarea name="" id="" rows="3" required></textarea><span class="barra"></span>
                        <label for="">Mensaje:</label>
                    </div>
                    <div class="text-md-right">
                        <button type="submit" class="btn btn-primary">Enviar ></button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <section class="sec-mac container py-4">
        <div class="text-map">
            <h3>Nos ubicamos en </h3>
            <hr>
        </div>
        <div class="row mx-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15054.663685714198!2d-99.2383028!3d19.383613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa6f7611bce0a3484!2sCOLEGIO%20JESUS%20ROMERO%20FLORES!5e0!3m2!1ses-419!2smx!4v1579163498719!5m2!1ses-419!2smx" width="1140" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="content-horario py-4">
            <div class="header-horario">
                <h3>Horario de atención</h3>
                <hr>
            </div>
            <p class="text-horario ml-3">Lunes a Viernes de 8:00am a 3:30pm</p>
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