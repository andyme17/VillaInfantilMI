<?php require 'nav-bar.view.php'; ?>

<main class="img-back py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-2 col-lg-8">
                <div class="col-12 offset-md-1 col-md-10 text-center shadow" id="list-doc">
                    <h2 class="py-4 text-center text-danger">Error de conexión</h2>
                    <h3 class="text-center text-danger">Por favor inténtelo más tarde.</h3>
                        <img src="<?php echo PATH; ?>img/icono-error.jpg" alt="Imagen de error" class="img-fluid icono-error">
                    <div class="f1-buttons">
                        <a class="btn btn-primary mb-3" href="<?php echo PATH; ?>inscripciones.php">Regresar al formulario ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'footer.view.php'; ?>

<!-- JavaScript files for Bootstrap 4 -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/nav-bar.js"></script>

</body>

</html>