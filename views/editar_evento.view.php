            <?php require 'side_bar.view.php'; ?>
                <main class="container">
                    <div class="row">
                        <div class="col-12 offset-md-1 col-md-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="shadow mb-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Editar Evento</h3>
                                <input type="hidden" name="id" value="<?php echo $evento['id'];?>">
                                <div class="group pb-2">
                                    <input type="text" name="titulo" id="titulo" autocomplete="off" value="<?php echo $evento['titulo'];?>" required><span class="barra"></span>
                                    <label for="titulo" class="float-label">Título del evento: <span class="text-danger">*</span></label>
                                    <div id="error-titulo"></div>
                                </div>
                                <div class="group pt-3 pt-md-4">
                                    <textarea name="descripcion" id="descripcion" rows="4" required="" autocomplete="off" onpaste="countChar();" onkeyup="countChar();" onkeypress="return limita(300);"><?php echo $evento['descripcion'];?></textarea><span class="barra"></span>
                                    <label for="descripcion" class="float-label">Breve descripción: <span class="text-danger">*</span></label>
                                    <div id="res" class="text-secondary text-right">0 caracter/s, te quedan 300</div>
                                    <div id="error-desc"></div>
                                </div>
                                <div class="group pb-2">
                                    <label for="fecha" class="ml-2 mr-3">Fecha del evento: <span class="text-danger">*</span></label>
                                    <input type="date" name="fecha" id="fecha" autocomplete="off"  value="<?php echo $evento['fecha'];?>" required><span class="barra"></span>                                   
                                    <div id="error-fecha"></div>
                                </div>
                                <div class="form-group ml-2">
                                    <label for="thumb">Fotografía del evento: <span class="text-danger">*</span></label>
                                    <input type="file" name="thumb" class="form-control-file" id="thumb" accept=".jpeg,.jpg" data-html="true" data-toggle="tooltip" data-placement="top" title="Formato válido:  <b>jpg / jpeg</b> Dimensiones:  <b>960 x 720 px</b> Tamaño:  <b>menor a 250 KB</b>" onchange="validaImagen(this);">
                                    <input type="hidden" name="thumb-guardada" value="<?php echo $evento['thumb'];?>">
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
    <script src="../js/form-evento.js"></script>   
    <script>
        $('#thumb').tooltip('show');
    </script>
</body>

</html>