            <?php require 'side_bar.view.php'; ?>
                <main class="container">
                    <h3 class="my-4 my-md-5 mt-xl-0 text-center">Últimos Eventos</h3>
                    <div class="row mb-4">
                        <div class="col-12 col-md-3 col-xl-2">
                            <a href="<?php echo PATH; ?>admin/nuevo_evento.php" id="btnAgregar" class="btn btn-success">
                                <i class="fas fa-plus-circle pr-2"></i><span>Agregar</span>
                            </a>
                        </div>
                        <div class="col-12 col-md-9 col-xl-10">
                            <p class="text-center text-md-left mt-3 mt-md-0 text-danger">Recuerda que sólo se permite publicar <b>3 eventos</b>,
                                para añadir un nuevo evento debes eliminar alguno de los existentes.</p>
                        </div>
                    </div>
                    <div class="row" id="content-card">
                        <?php foreach ($eventos as $evento) : ?>
                            <div class="col-12 col-md-6 col-xl-4 pb-3">
                                <article class="card shadow">
                                    <img src="<?php echo PATH; ?>img/<?php echo $evento['thumb']; ?>" class="card-img-top" alt="Imagen ilustrativa del evento">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <h5><?php echo $evento['titulo']; ?></h5>
                                            <hr>
                                        </div>
                                        <p class="card-text"><?php echo nl2br($evento['descripcion']); ?></p>
                                        <p class="card-text text-right pt-3">
                                            <small class="text-muted"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;Publicado en <?php echo fecha($evento['fecha']); ?></small>
                                        </p>
                                        <div class="btn-opc-card">
                                            <a class="btn btn-primary mr-1" href="<?php echo PATH; ?>admin/editar_evento.php?id=<?php echo $evento['id']; ?>"><i class="fas fa-edit"></i> Editar</a>
                                            <a class="btn btn-danger" href="<?php echo PATH; ?>admin/eliminar_evento.php?id=<?php echo $evento['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </main>    
            </div>
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