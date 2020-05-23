            <?php require 'side_bar.view.php'; ?>
                <main class="container">
                    <div class="row">
                        <div class="col-12 offset-md-1 col-md-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="shadow mb-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Editar Miembro</h3>
                                <input type="hidden" name="id" value="<?php echo $personal['id'];?>">
                                <div class="group pb-2">
                                    <input type="text" name="nombre" id="nombre" autocomplete="off" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Ejemplo: <b>Lic. Juan Pérez</b>" value="<?php echo $personal['nombre'];?>" required><span class="barra"></span>
                                    <label for="nombre" class="float-label">Nombre completo: <span class="text-danger">*</span></label>
                                    <div id="error_nombre"></div>
                                </div>
                                <div class="group pb-2">
                                    <input type="text" name="cargo" id="cargo" autocomplete="off" value="<?php echo $personal['cargo'];?>" required><span class="barra"></span>
                                    <label for="cargo" class="float-label">Cargo: <span class="text-danger">*</span></label>
                                    <div id="error_cargo"></div>
                                </div>                                
                                <div class="form-group">
                                    <label for="thumb">Fotografía: <span class="text-danger">*</span></label>
                                    <input type="file" name="thumb" class="form-control-file mb-3" id="thumb" accept=".jpeg,.jpg" data-html="true" data-toggle="tooltip" data-placement="top" title="Formato válido:  <b>jpg / jpeg</b> Dimensiones:  <b>300 x 360 px</b> Tamaño:  <b>menor a 35 KB</b>" onchange="validaImagen(this);">
                                    <input type="hidden" name="thumb-guardada" value="<?php echo $personal['thumb'];?>">
                                    <div id="error-thumb"></div>
                                </div>
                                <div class="text-left">
                                    <small class="text-secondary">* Todos los campos son obligatorios</small>
                                </div>
                                <div class="btn-opc">
                                    <input type="hidden" id="action" value="edit">
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

    <!-- JavaScript files for Bootstrap 4 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/headroom.min.js"></script>
    <script src="../js/side-bar.js"></script>
  
    <!-- Custom javascript files -->
    <script src="../js/form-personal.js"></script>
    <script>
        $(document).ready(function() {
            $('#thumb').tooltip('show');
            $('#nombre').tooltip('show');
        });       
    </script>
</body>

</html>