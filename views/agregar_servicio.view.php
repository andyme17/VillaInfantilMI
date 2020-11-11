<?php require 'layouts/head.view.php'; ?> 
    <title>Gestor de contenido VillaMI | Agregar Servicio</title>
</head>
<?php require 'layouts/side_bar.view.php'; ?>
                <main class="container">
                    <div class="row">
                        <div class="col-12 offset-md-1 col-md-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="shadow mb-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Nuevo Servicio</h3>
                                <div class="group pb-2">
                                    <input type="text" name="servicio" id="servicio" autocomplete="off" required><span class="barra"></span>
                                    <label for="servicio" class="float-label">Servicio: <span class="text-danger">*</span></label>
                                    <div id="error-servicio"></div>
                                </div>
                                <div class="form-group pl-2">
                                    <label for="thumb">Imagen del servicio: <span class="text-danger">*</span></label>
                                    <input type="file" name="thumb" class="form-control-file" id="thumb" accept=".jpeg,.jpg" data-html="true" data-toggle="tooltip" data-placement="top" title="Formato válido:  <b>jpg / jpeg</b> Dimensiones:  <b>627 x 417 px</b> Tamaño:  <b>menor a 70 KB</b>" onchange="validaImagen(this);">
                                    <div id="error-thumb"></div>
                                </div>
                                <div class="text-left mt-3">
                                    <small class="text-secondary">* Todos los campos son obligatorios</small>
                                </div>
                                <div class="btn-opc">
                                    <input type="hidden" id="action" value="new">
                                    <button type="button" class="btn btn-secondary mr-2" id="btnCloseForm">Cancelar&nbsp;&nbsp;<i class="fas fa-times"></i></button>
                                    <button type="submit" name="submit" class="btn btn-primary" id="btnForm">Agregar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <?php require 'layouts/scripts.view.php'; ?>

    <!-- Custom javascript files -->
    <script src="<?php echo PATH;?>js/side-bar.js"></script>
    <script src="<?php echo PATH;?>js/form-servicio.js"></script>
    <script>
        $('#thumb').tooltip('show');
    </script>
</body>

</html>