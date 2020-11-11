<?php require 'layouts/head.view.php'; ?> 
    <title>Gestor de contenido VillaMI | Agregar Instalación</title>
</head>
<?php require 'layouts/side_bar.view.php'; ?>
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
                                <div class="btn-opc">
                                    <button type="button" class="btn btn-secondary mr-2" id="btnCloseForm">Cancelar&nbsp;&nbsp;<i class="fas fa-times"></i></button>
                                    <button type="submit" name="submit" class="btn btn-primary" id="btnForm">Actualizar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
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
    <script src="<?php echo PATH;?>js/form-instal.js"></script>
    <script>
        $(document).ready(function() {
            $('#thumb').tooltip('show');           
        });
    </script>
</body>

</html>