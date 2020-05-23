            <?php require 'side_bar.view.php'; ?>
                <main class="container">
                    <div class="row">
                        <div class="col-12 offset-xl-1 col-xl-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="shadow mb-sm-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-5 text-center">Editar imagen de banner</h3>
                                <input type="hidden" name="seccion" value="<?php echo $banner['seccion'];?>">
                                <div class="form-group">
                                    <label for="thumb">Imagen:<span class="text-danger">*</span></label>
                                    <input type="file" name="thumb" class="form-control-file" id="thumb" accept=".jpeg,.jpg,.png" data-html="true" data-toggle="tooltip" data-placement="top" title="Formato: <b>jpg/jpeg/png</b> Dimensiones:  <b>1280 x 558 px</b> Tamaño:  <b>menor a 490 KB</b>" onchange="validaImagen(this);">
                                    <input type="hidden" name="thumb-guardada" value="<?php echo $banner['thumb'];?>">
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

    <!-- JavaScript files for Bootstrap 4 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/headroom.min.js"></script>
    <script src="../js/side-bar.js"></script>

    <!-- Custom javascript files -->
    <script src="../js/form-banner.js"></script>
    <script>
        $(document).ready(function() {
            $('#thumb').tooltip('show');
        });           
    </script>
</body>

</html>