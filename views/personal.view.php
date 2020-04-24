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
                    <h3 class="my-4 my-md-5 mt-xl-0 text-center">Personal Administrativo</h3>
                    <a href="<?php echo PATH; ?>admin/nuevo_personal.php" class="btn btn-success mb-4 mb-md-5">
                        <i class="fas fa-plus-circle pr-2"></i><span>Agregar</span>
                    </a>

                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card p-3">
                                <div class="cont-card">
                                    <img src="<?php echo PATH; ?>img\imgp-directora-grnl.jpg" alt="Fotografía de personal administrativo">
                                    <h5>Lic. María Isabel Rincón</h5>
                                    <p> Directora General</p>
                                </div>
                                <div class="btn-opc-card mt-3">
                                    <a class="btn btn-primary pr-2" href="<?php echo PATH; ?>admin/editar_personal.php"><i class="fas fa-edit"></i> Editar</a>
                                    <a class="btn btn-danger pr-2" href="<?php echo PATH; ?>admin/eliminar_personal.php"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card p-3">
                                <div class="cont-card">
                                    <img src="<?php echo PATH; ?>img\imgp-directora-grnl.jpg" alt="Fotografía de personal administrativo">
                                    <h5>Lic. María Isabel Rincón</h5>
                                    <p> Directora General</p>
                                </div>
                                <div class="btn-opc-card mt-3">
                                    <a class="btn btn-primary pr-2" href="<?php echo PATH; ?>admin/editar_personal.php"><i class="fas fa-edit"></i> Editar</a>
                                    <a class="btn btn-danger pr-2" href="<?php echo PATH; ?>admin/eliminar_personal.php"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-xl-4">
                            <div class="card p-3">
                                <div class="cont-card">
                                    <img src="<?php echo PATH; ?>img\imgp-directora-grnl.jpg" alt="Fotografía de personal administrativo">
                                    <h5>Lic. María Isabel Rincón</h5>
                                    <p> Directora General</p>
                                </div>
                                <div class="btn-opc-card mt-3">
                                    <a class="btn btn-primary pr-2" href="<?php echo PATH; ?>admin/editar_personal.php"><i class="fas fa-edit"></i> Editar</a>
                                    <a class="btn btn-danger pr-2" href="<?php echo PATH; ?>admin/eliminar_personal.php"><i class="fas fa-trash-alt"></i> Eliminar</a>
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