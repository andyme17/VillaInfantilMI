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
                <p>Ó bien comunicate al <span>55 21 67 74 36</span> en el horario de atención</p>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-contact" novalidate>
                <div class="container mx-auto">
                    <div class="group">
                        <input type="text" name="nombre" id="nombre" required="" autocomplete="off" value="<?php if(!$enviado && isset($nombre)) echo $nombre;?>"><span class="barra"></span>
                        <label for="">Nombre completo:</label>  
                        <?php if(!empty($error_nombre)): ?>
                            <small class="input-error"><?php echo $error_nombre;?></small>
                        <?php endif?>                                                          
                    </div>
                    <div class="group">
                        <input type="text" name="email" id="email" required="" autocomplete="off" value="<?php if(!$enviado && isset($email)) echo $email;?>"><span class="barra"></span>
                        <label for="">Correo electrónico:</label>
                        <?php if(!empty($error_email)): ?>
                            <small class="input-error"><?php echo $error_email;?></small>
                        <?php endif?>                                      
                    </div>
                    <div class="group">
                        <textarea name="mensaje" id="mensaje" rows="3" required="" autocomplete="off"><?php if(!$enviado && isset($mensaje)) echo $mensaje;?></textarea><span class="barra"></span>
                        <label for="">Mensaje:</label>
                        <?php if(!empty($error_mensaje)): ?>
                            <small class="input-error"><?php echo $error_mensaje;?></small>     
                        <?php endif?>                            
                    </div>
                                    
                    <?php if(!empty($enviado)): ?>
                    <div class="alert-successful" id="content-alert">
                        <p>Mensaje enviado correctamente &nbsp;&nbsp;&nbsp;<i class="fas fa-check"></i></p>                        
                    </div>
                    <?php endif?>
                        
                    <div class="text-md-right">
                        <button type="submit" name="submit" class="btn btn-primary">Enviar ></button>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.666693651444!2d-99.24070738509407!3d19.383579586912237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201019f246fed%3A0xcbf660f79c002ef6!2sJard%C3%ADn%20de%20ni%C3%B1os%20Villa%20Infantil%20Mar%C3%ADa%20Isabel!5e0!3m2!1ses-419!2smx!4v1583200652807!5m2!1ses-419!2smx" width="1140" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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