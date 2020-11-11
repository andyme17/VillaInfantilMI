<?php require 'layouts/head.view.php'; ?> 
    <title>Gestor de contenido VillaMI | Testimonios</title>
</head>
<?php require 'layouts/side_bar.view.php'; ?>  
                <main class="container">
                    <h3 class="my-4 my-md-5 mt-xl-0 text-center">Testimonios</h3>
                    <div class="row mb-4">
                        <div class="col-12 col-md-3 col-xl-2">
                            <a href="<?php echo PATH; ?>admin/nuevo_testimonio.php" id="btnAgregar" class="btn btn-success">
                                <i class="fas fa-plus-circle pr-2"></i><span>Agregar</span>
                            </a>
                        </div>
                        <div class="col-12 col-md-9 col-xl-10">
                            <p class="text-center text-md-left mt-3 mt-md-0 text-danger">Recuerda que sólo se permite publicar <b>3 testimonios</b>,
                                para añadir un nuevo testimonio debes eliminar alguno de los existentes.</p>
                        </div>
                    </div>
                    <div class="row" id="content-card">
                        <?php foreach ($testimonios as $testimonio) : ?>
                            <div class="col-12 col-md-6 col-xl-4 pb-3">
                                <div class="card text-center shadow">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5 class="card-title"><?php echo $testimonio['nombre']; ?></h5>
                                            <hr>
                                        </div>
                                        <blockquote class="card-text"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;<?php echo $testimonio['mensaje']; ?>&nbsp;&nbsp;<i class="fas fa-quote-right"></i></blockquote>
                                        <div class="calificacion text-center">
                                            <?php for ($i = 0; $i < $testimonio['votacion']; $i++) : ?>
                                                <i class="fas fa-star"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <div class="btn-opc-card">
                                            <a class="btn btn-primary mr-1" href="<?php echo PATH; ?>admin/editar_testimonio.php?id=<?php echo $testimonio['id']; ?>"><i class="fas fa-edit"></i> Editar</a>
                                            <a class="btn btn-danger" href="<?php echo PATH; ?>admin/eliminar_testimonio.php?id=<?php echo $testimonio['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        <?php endforeach; ?>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <?php require 'layouts/scripts.view.php'; ?>

    <!-- Custom javascript files -->
    <script src="<?php echo PATH;?>js/side-bar.js"></script>
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