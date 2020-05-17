<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="x7i-1eQfu-xEuD6jxgrEJD3LJAi5do0R7iRzlfy9Y_4" />
    <title>Villa Infantil María Isabel</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="login">
    <main class="img-back-blue h-total">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-sm-2 col-sm-8 offset-md-3 col-md-6 offset-lg-4 col-lg-4">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-login shadow-lg" id="form-login" novalidate>
                        <div class="container mx-auto">
                            <div class="group">
                                <input type="text" name="usuario" id="usuario" required="" autocomplete="off"><span class="barra"></span>
                                <label for="usuario" class="float-label">Usuario: <span class="text-danger">*</span></label>
                                <div id="error-usuario"></div>
                            </div>       
                            <div class="group">
                                <input type="password" name="pass" id="pass" required="" autocomplete="off"><span class="barra"></span>
                                <label for="nombre" class="float-label">Contraseña: <span class="text-danger">*</span></label>
                                <div id="error-pass"></div>
                            </div>                     
                            <div class="text-left">
                                <small class="text-secondary">* Todos los campos son obligatorios</small>
                            </div>

                            <?php if(!empty($error)):?>
                                <div class="text-center error-login"><?php echo $error;?></div>
                            <?php endif;?>

                            <div class="text-md-right mt-4">
                                <button type="submit" name="submit" class="btn btn-form-primary" id="btnLogin">Entrar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
                            </div>                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!--Archivos javascript para bootstrap -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/form-login.js"></script>
</body>

</html>