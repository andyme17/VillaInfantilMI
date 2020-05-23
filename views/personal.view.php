            <?php require 'side_bar.view.php'; ?>
                <main class="container">
                    <h3 class="my-4 my-md-5 mt-xl-0 text-center">Personal Administrativo</h3>
                    <div class="row mb-4 mb-md-5">
                        <div class="col-12 col-md-3 col-xl-2">
                            <a href="<?php echo PATH; ?>admin/nuevo_personal.php" id="btnAgregar" class="btn btn-success">
                                <i class="fas fa-plus-circle pr-2"></i><span>Agregar</span>
                            </a>
                        </div>
                        <div class="col-12 col-md-9 col-xl-10">
                            <p class="text-center text-md-left mt-3 mt-md-0 text-danger">Recuerda que sólo se permite publicar <b>3 miembros del personal administrativo</b>,
                                para añadir a un nuevo miembro debes eliminar alguno de los existentes.</p>
                        </div>
                    </div>
                    <div class="row" id="content-card">
                        <?php foreach ($personal as $persona) : ?>
                            <div class="col-12 col-md-6 col-xl-4 pb-3" id="card">
                                <div class="card p-3 shadow">
                                    <div class="cont-card">
                                        <img src="<?php echo PATH; ?>img/<?php echo $persona['thumb']; ?>" alt="Fotografía de personal administrativo">
                                        <h5><?php echo $persona['nombre']; ?></h5>
                                        <p><?php echo $persona['cargo']; ?></p>
                                    </div>
                                    <div class="btn-opc-card">
                                        <a class="btn btn-primary mr-2" href="<?php echo PATH; ?>admin/editar_personal.php?id=<?php echo $persona['id']; ?>"><i class="fas fa-edit"></i> Editar</a>
                                        <a class="btn btn-danger" href="<?php echo PATH; ?>admin/eliminar_personal.php?id=<?php echo $persona['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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
    <script>
        var contenedor = document.getElementById('content-card');        

        if(contenedor.childElementCount >= 3){
            $('#btnAgregar').addClass('disabled');            
        }else{
            $('#btnAgregar').removeClass('disabled');           
        } 
    </script>
</body>

</html>