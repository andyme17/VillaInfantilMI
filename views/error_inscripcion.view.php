<?php require 'layouts/head.view.php'; ?> 
  <title>Villa Infantil María Isabel | Error en la inscripción</title>
</head>
<?php require 'layouts/nav-bar.view.php'; ?>

<main class="img-back py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-2 col-lg-8">
                <div class="col-12 offset-md-1 col-md-10 text-center shadow" id="list-doc">
                    <h2 class="py-4 text-center text-danger">Error de conexión</h2>
                    <h3 class="text-center text-danger">Por favor inténtelo más tarde.</h3>
                    <img src="<?php echo PATH; ?>img/icono-error.jpg" alt="Imagen de error" class="img-fluid icono-error">
                    <div class="f1-buttons">
                        <a class="btn btn-primary mb-3" href="<?php echo PATH; ?>inscripciones.php">Regresar al formulario&nbsp;&nbsp;<i class="fas fa-undo-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'layouts/footer.view.php'; ?>

<?php require 'layouts/scripts.view.php'; ?>

<!-- Custom javascript files -->
<script src="<?php echo PATH;?>js/nav-bar.js"></script>

</body>

</html>