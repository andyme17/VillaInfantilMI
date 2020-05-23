            <?php require 'side_bar.view.php'; ?>
                <main class="container">
                    <div class="row">
                        <div class="col-12 offset-xl-1 col-xl-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="shadow mb-sm-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Editar Sección: Nuestro Equipo</h3>
                                <input type="hidden" name="seccion" value="<?php echo $team_msg['seccion']; ?>">
                                <div class="group pt-3 pt-md-4">
                                    <textarea name="mensaje" id="mensaje" rows="3" required="" autocomplete="off" onpaste="countChar();" onkeyup="countChar();" onkeypress="return limita(290);"><?php echo $team_msg['descripcion']; ?></textarea><span class="barra"></span>
                                    <label for="mensaje" class="float-label">Mensaje: <span class="text-danger">*</span></label>
                                    <div id="res" class="text-secondary text-right">0 caracter/s, te quedan 290</div>
                                    <div id="error-msj"></div>
                                </div>
                                <div class="form-group">
                                    <label for="thumb">Fotografía: <span class="text-danger">*</span></label>
                                    <input type="file" name="thumb" class="form-control-file" id="thumb" accept=".jpeg,.jpg" data-html="true" data-toggle="tooltip" data-placement="top" title="Formato válido:  <b>jpg / jpeg</b> Dimensiones:  <b>958 x 627 px</b> Tamaño:  <b>menor a 170 KB</b>" onchange="validaImagen(this);">
                                    <input type="hidden" name="thumb-guardada" value="<?php echo $team_thumb['thumb'];?>">
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
    <script src="../js/form-equipo.js"></script>
    <script>
        $(document).ready(function() {
            $('#thumb').tooltip('show');
        });           
    </script>
</body>

</html>