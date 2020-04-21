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
                <div class="container">
                    <h3 class="my-4 my-md-5 mt-xl-0 text-center">Últimos Eventos</h3>
                    <div class="row">
                        <div class="col-12 offset-md-1 col-md-10 mb-sm-4">
                            <a href="<?php echo PATH;?>admin/nuevo_evento.php" class="btn btn-success mb-4 mb-md-5">
                                <i class="fas fa-plus-circle pr-2"></i><span>Nuevo Evento</span>
                            </a>
                            <div class="cont-item shadow">
                                <h5 class="mb-4">Titulo del evento</h5>
                                <div class="btn-opc">
                                    <a class="btn btn-warning pr-2 mr-2" href="#"><i class="fas fa-eye"></i> Ver evento</a>
                                    <a class="btn btn-primary pr-2" href="<?php echo PATH;?>admin/editar_evento.php"><i class="fas fa-edit"></i> Editar</a>
                                </div>
                            </div>
                            <div class="cont-item shadow">
                                <h5 class="mb-4">Titulo del evento</h5>
                                <div class="btn-opc">
                                    <a class="btn btn-warning pr-2 mr-2" href="#"><i class="fas fa-eye"></i> Ver evento</a>
                                    <a class="btn btn-primary pr-2" href="<?php echo PATH;?>admin/editar_evento.php"><i class="fas fa-edit"></i> Editar</a>
                                </div>
                            </div>
                            <div class="cont-item shadow">
                                <h5 class="mb-4">Titulo del evento</h5>
                                <div class="btn-opc">
                                    <a class="btn btn-warning pr-2 mr-2" href="#"><i class="fas fa-eye"></i> Ver evento</a>
                                    <a class="btn btn-primary pr-2" href="<?php echo PATH;?>admin/editar_evento.php"><i class="fas fa-edit"></i> Editar</a>
                                </div>
                            </div>
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