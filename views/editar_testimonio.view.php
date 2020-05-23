            <?php require 'side_bar.view.php'; ?>
                <main class="container">
                    <div class="row">
                        <div class="col-12 offset-md-1 col-md-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="shadow mb-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Editar Testimonio</h3>
                                <input type="hidden" name="id" value="<?php echo $testimonio['id']; ?>">
                                <div class="group pb-2">
                                    <input type="text" name="nombre" id="nombre" autocomplete="off" value="<?php echo $testimonio['nombre']; ?>" required><span class="barra"></span>
                                    <label for="nombre" class="float-label">Nombre: <span class="text-danger">*</span></label>
                                    <div id="error_nombre"></div>
                                </div>
                                <div class="form-star">
                                    <label for="">Calificación: <span class="text-danger">*</span></label>
                                    <p class="clasificacion">
                                        <!-- first star -->
                                        <input id="radio1" class="input-star" type="radio" name="votacion" value="5" <?php if($testimonio['votacion'] == "5") echo "checked"?>>
                                        <label for="radio1" class="label-star">&#9733;</label>
                                        <!-- second star -->
                                        <input id="radio2" class="input-star" type="radio" name="votacion" value="4" <?php if($testimonio['votacion'] == "4") echo "checked"?>>
                                        <label for="radio2" class="label-star">&#9733;</label>
                                        <!-- third star -->
                                        <input id="radio3" class="input-star" type="radio" name="votacion" value="3" <?php if($testimonio['votacion'] == "3") echo "checked"?>>
                                        <label for="radio3" class="label-star">&#9733;</label>
                                        <!-- fourth star -->
                                        <input id="radio4" class="input-star" type="radio" name="votacion" value="2" <?php if($testimonio['votacion'] == "2") echo "checked"?>>
                                        <label for="radio4" class="label-star">&#9733;</label>
                                        <!-- fifth star -->
                                        <input id="radio5" class="input-star" type="radio" name="votacion" value="1" <?php if($testimonio['votacion'] == "1") echo "checked"?>>
                                        <label for="radio5" class="label-star">&#9733;</label>
                                    </p>
                                </div>
                                <div id="error-vot"></div>
                                <div class="group pt-3 pt-md-4">
                                    <textarea name="mensaje" id="mensaje" rows="3" required="" autocomplete="off" onpaste="countChar();" onkeyup="countChar();" onkeypress="return limita(200);" title="No se requiere indicar comillas dobles"><?php echo $testimonio['mensaje']; ?></textarea><span class="barra"></span>
                                    <label for="mensaje" class="float-label">Mensaje: <span class="text-danger">*</span></label>
                                    <div id="res" class="text-secondary text-right">0 caracter/s, te quedan 200</div>
                                    <div id="error-msj"></div>
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
    <script src="../js/form-testimonio.js"></script>
    <script>
        $(document).ready(function() {
            $('#mensaje').tooltip('show');
        });           
    </script>
</body>

</html>