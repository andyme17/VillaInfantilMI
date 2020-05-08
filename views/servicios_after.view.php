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
                    <h3 class="mt-1 mb-2 text-center">Servicios</h3>
                    <a href="<?php echo PATH; ?>admin/agregar_servicio.php" class="btn btn-success mb-4 ml-4">
                        <i class="fas fa-plus-circle pr-2"></i><span>Agregar servicio</span>
                    </a>
                    <div class="content-after-2 container">
                        <?php foreach ($after_service as $service) : ?>
                            <div class="item-extra-2 mb-3">
                                <img src="<?php echo PATH; ?>img/<?php echo $service['thumb']; ?>" alt="Imagen ilustrativa de <?php echo $service['name']; ?>" class="img-fluid">
                                <div class="content-extra-2">
                                    <h5 class="mt-5 mt-sm-4 mt-md-5"><?php echo $service['nombre']; ?></h5>
                                    <div class="cont-btn">
                                        <a class="btn btn-outline-danger pr-2" href="<?php echo PATH; ?>admin/eliminar_servicio.php?id=<?php echo $service['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </main>

                <section class="container paginacion">
                    <?php $numero_paginas = num_pag_serv($config_gestor['items_x_pag'], $conexion); ?>
                    <?php if ($numero_paginas > 1) : ?>
                        <ul>
                            <?php if (pagina_actual() === 1) : ?>
                                <li class="disabled"><i class="fas fa-angle-double-left"></i></li>
                            <?php else : ?>
                                <li><a href="servicios_after.php?p=<?php echo pagina_actual() - 1; ?>"><i class="fas fa-angle-double-left"></i></a></li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $numero_paginas; $i++) : ?>
                                <?php if (pagina_actual() === $i) : ?>
                                    <li class="active"><?php echo $i; ?></li>
                                <?php else : ?>
                                    <li><a href="servicios_after.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php if (pagina_actual() == $numero_paginas) : ?>
                                <li class="disabled"><i class="fas fa-angle-double-right"></i></li>
                            <?php else : ?>
                                <li><a href="servicios_after.php?p=<?php echo pagina_actual() + 1; ?>"><i class="fas fa-angle-double-right"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </section>
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