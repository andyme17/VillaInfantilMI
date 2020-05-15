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
                    <h3 class="mt-3 mt-xl-0 text-center">Avisos</h3>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <button type="button" class="btn btn-secondary mb-3 mb-md-4" id="btnBack"><i class="fas fa-caret-left"></i>&nbsp;&nbsp;Regresar</button>
                            <div class="cont-item shadow-lg px-2 px-sm-3">
                                <h5 class="mb-3"><?php echo $aviso['id']; ?> .- Aviso</h5>
                                <img src="<?php echo PATH; ?>img/<?php echo $aviso['thumb']; ?>" class="img-fluid">
                            </div>
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
    <script>
        document.getElementById("btnBack").addEventListener('click', function() {
            location.href = "avisos.php";
        });
    </script>
</body>

</html>