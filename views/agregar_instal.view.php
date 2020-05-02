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
                        <div class="col-12 offset-xl-1 col-xl-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post" class="shadow mb-sm-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-5 text-center">Agregar fotografía a galería de instalaciones</h3>
                                <div class="form-group">
                                    <label for="thumb">Fotografía: <span class="text-danger">*</span></label>
                                    <input type="file" name="thumb" class="form-control-file" id="thumb" accept=".jpeg,.jpg" data-html="true" data-toggle="tooltip" data-placement="top" title="Formato válido:  <b>jpg / jpeg</b> Dimensiones:  <b>1048 x 694 px</b> Tamaño:  <b>menor a 115 KB</b>" onchange="validaImagen(this);">
                                    <div id="error-thumb"></div>
                                </div>
                                <div class="text-left">
                                    <small class="text-secondary">* Todos los campos son obligatorios</small>
                                </div>
                                <div class="btn-right">
                                    <button type="submit" name="submit" class="btn btn-primary mt-3 mt-md-5" id="btnForm">Actualizar ></button>
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
    <script src="../js/form-instal.js"></script>
    <script>
        $(document).ready(function() {
            $('#thumb').tooltip('show');           
        });
    </script>
</body>

</html>