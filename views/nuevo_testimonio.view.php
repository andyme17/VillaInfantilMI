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
                <div class="cont-h">
                    <button type="button" id="sidebarCollapse" class="btn btn-info btn-side-bar">
                        <i class="fas fa-bars pr-1"></i>
                        <span>Menú</span>
                    </button>
                    <div class="img-init-2">
                        <img src="<?php echo PATH; ?>img/logo-kinder.png" class="img-fluid">
                    </div>
                </div>
                <main class="container">
                    <div class="row">
                        <div class="col-12 offset-md-1 col-md-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="shadow mb-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Nuevo Testimonio</h3>
                                <div class="group pb-2">
                                    <input type="text" name="nombre" id="nombre" autocomplete="off" required><span class="barra"></span>
                                    <label for="nombre" class="float-label">Nombre: <span class="text-danger">*</span></label>
                                    <div id="error_nombre"></div>
                                </div>
                                <div class="form-star">
                                    <label for="" class="">Calificación: <span class="text-danger">*</span></label>
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
                                <div id="error-vot"></div>
                                <div class="group pt-3 pt-md-4">
                                    <textarea name="mensaje" id="mensaje" rows="3" required="" autocomplete="off" onpaste="countChar();" onkeyup="countChar();" onkeypress="return limita(200);" title="No se requiere indicar comillas dobles"></textarea><span class="barra"></span>
                                    <label for="mensaje" class="float-label">Mensaje: <span class="text-danger">*</span></label>
                                    <div id="res" class="text-secondary text-right">0 caracter/s, te quedan 200</div>
                                    <div id="error-msj"></div>
                                </div>
                                <div class="text-left">
                                    <small class="text-secondary">* Todos los campos son obligatorios</small>
                                </div>
                                <div class="btn-opc">
                                    <input type="hidden" id="action" value="new">
                                    <button type="button" class="btn btn-secondary mr-2" id="btnCloseForm"></i>Cancelar&nbsp;&nbsp;<i class="fas fa-times"></i></button>
                                    <button type="submit" name="submit" class="btn btn-primary" id="btnForm">Agregar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- JavaScript files for Bootstrap 4 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/headroom.min.js"></script>
    <script src="../js/side-bar.js"></script>

    <!-- Custom javascript files -->
    <script src="../js/form-testimonio.js"></script>
    <script>
        $(document).ready(function() {
            $('#mensaje').tooltip('show');
        });           
    </script>
</body>

</html>