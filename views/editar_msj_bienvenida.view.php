<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="x7i-1eQfu-xEuD6jxgrEJD3LJAi5do0R7iRzlfy9Y_4" />
    <title>Gestor de contenido VillaMI</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="login">
    <div class="wrapper">
        <?php require 'side_bar.view.php'; ?>
        <div id="content">
            <div class="content-1">
                <button type="button" id="sidebarCollapse" class="btn btn-info btn-side-bar">
                    <i class="fas fa-bars pr-1"></i>
                    <span>Menú</span>
                </button>
                <div class="img-init-2">
                    <img src="<?php echo PATH; ?>img/logo-kinder.png" class="img-fluid">                    
                </div>                
                <div class="container">
                    <div class="row">
                        <div class="col-12 offset-xl-1 col-xl-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="shadow" id="form-msj" novalidate>
                                <h3 class="mt-1 mb-3 text-center">Editar > Mensaje de Bienvenida > Página Principal</h3>
                                <div class="group pt-3">
                                    <textarea name="mensaje" id="mensaje" rows="5" required="" autocomplete="off"></textarea><span class="barra"></span>
                                    <label for="mensaje" class="float-label">Mensaje: </label>
                                    <div id="error-mensaje"></div>
                                </div>
                                <div class="btn-right">
                                    <button type="submit" name="submit" class="btn btn-primary" id="btnForm">Actualizar ></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- JavaScript files for Bootstrap 4 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/headroom.min.js"></script>
    <script src="../js/side-bar.js"></script>
</body>

</html>