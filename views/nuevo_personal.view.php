<?php require 'layouts/head.view.php'; ?> 
    <title>Gestor de contenido VillaMI | Nuevo Miembro</title>
</head>
<?php require 'layouts/side_bar.view.php'; ?>
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
                    <div class="row">
                        <div class="col-12 offset-md-1 col-md-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="shadow mb-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Nuevo Miembro</h3>
                                <div class="group pb-2">
                                    <input type="text" name="nombre" id="nombre" autocomplete="off" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Ejemplo: <b>Lic. Juan Pérez</b>" required><span class="barra"></span>
                                    <label for="nombre" class="float-label">Nombre completo: <span class="text-danger">*</span></label>
                                    <div id="error_nombre"></div>
                                </div>
                                <div class="group pb-2">
                                    <input type="text" name="cargo" id="cargo" autocomplete="off" required><span class="barra"></span>
                                    <label for="cargo" class="float-label">Cargo: <span class="text-danger">*</span></label>
                                    <div id="error_cargo"></div>
                                </div>                                
                                <div class="form-group">
                                    <label for="thumb">Fotografía: <span class="text-danger">*</span></label>
                                    <input type="file" name="thumb" class="form-control-file mb-3" id="thumb" accept=".jpeg,.jpg" data-html="true" data-toggle="tooltip" data-placement="top" title="Formato válido:  <b>jpg / jpeg</b> Dimensiones:  <b>300 x 360 px</b> Tamaño:  <b>menor a 35 KB</b>" onchange="validaImagen(this);">
                                    <div id="error-thumb"></div>
                                </div>
                                <div class="text-left">
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
    <script src="<?php echo PATH;?>js/form-personal.js"></script>
    <script>
        $(document).ready(function() {
            $('#thumb').tooltip('show');
            $('#nombre').tooltip('show');
        });       
    </script>
</body>

</html>