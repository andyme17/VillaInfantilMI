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
           
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-bars pr-1"></i>
                    <span>Menú</span>
                </button>
                <h1 class="my-5 text-center">Bienvenido</h1>
                <div class="img-init">
                    <img src="<?php echo PATH; ?>img/logo-kinder.png" class="img-fluid">
                    <img src="<?php echo PATH; ?>img/logo-mascota-kinder.png" class="img-fluid">
                </div>
            

        </div>
    </div>


    <!-- JavaScript files for Bootstrap 4 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/headroom.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                
                
            });
            $('#dismiss').on('click', function () {
                $('#sidebar').removeClass('active');                            
            });
            


        });
    </script>
</body>

</html>