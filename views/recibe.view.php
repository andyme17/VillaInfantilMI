<?php require 'nav-bar.view.php'; ?>

<main class="img-back py-3 py-md-4">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-2 col-lg-8">
                <div class="col-12 offset-md-1 col-md-10 text-center shadow" id="list-doc">
                    <h4 class="pb-4">¡Bienvenido!</h4>
                    <p class="p-3">
                        Una vez llenado el formato de pre-registro, debes concluir tu proceso de inscripción.
                        Para ello, envía la documentación solicitada en el siguiente documento PDF a villa.infantil.mi@live.com.mx:
                    </p>
                    <a href="<?php echo PATH; ?>pdf/Requisitos-Villa.pdf" class="link-pdf" download="documentacion_requerida.pdf">
                        <i class="far fa-file-pdf"></i>
                        <small>Da click en la imagen para descargar</small>
                    </a>
                    <div class="f1-buttons">
                        <a class="btn btn-primary" href="<?php echo PATH; ?>index.php">Finalizar ></a>
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