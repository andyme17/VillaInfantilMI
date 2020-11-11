<?php require 'layouts/head.view.php'; ?> 
    <title>Gestor de contenido VillaMI | Instalaciones</title>
</head>
<?php require 'layouts/side_bar.view.php'; ?>
                <main class="container">
                    <h3 class="my-3 mt-xl-0 text-center">Instalaciones</h3>
                    <a href="<?php echo PATH; ?>admin/agregar_instalacion.php" class="btn btn-success mb-4 ml-4">
                        <i class="fas fa-plus-circle pr-2"></i><span>Agregar fotografía</span>
                    </a>
                    <div class="content-after-2 container">
                        <?php foreach ($imagenes as $imagen): ?>
                            <div class="item-extra-2 mb-3">
                                <img src="<?php echo PATH; ?>img/<?php echo $imagen['thumb']; ?>" class="img-fluid">
                                <div class="content-extra">
                                    <a class="btn btn-outline-danger pr-2" href="<?php echo PATH; ?>admin/eliminar_instalacion.php?id=<?php echo $imagen['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>                    
                </main>
                
                <section class="container paginacion">
                    <?php $numero_paginas = num_pag($config_gestor['items_x_pag'], $conexion); ?>
                    <ul>
                        <?php if (pagina_actual() === 1) : ?>
                            <li class="disabled"><i class="fas fa-angle-double-left"></i></li>
                        <?php else : ?>
                            <li><a href="instalaciones.php?p=<?php echo pagina_actual() - 1; ?>"><i class="fas fa-angle-double-left"></i></a></li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $numero_paginas; $i++) : ?>
                            <?php if (pagina_actual() === $i) : ?>
                                <li class="active"><?php echo $i; ?></li>
                            <?php else : ?>
                                <li><a href="instalaciones.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <?php if (pagina_actual() == $numero_paginas) : ?>
                            <li class="disabled"><i class="fas fa-angle-double-right"></i></li>
                        <?php else : ?>
                            <li><a href="instalaciones.php?p=<?php echo pagina_actual() + 1; ?>"><i class="fas fa-angle-double-right"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <?php require 'layouts/scripts.view.php'; ?>
  
    <!-- Custom javascript files -->
    <script src="<?php echo PATH;?>js/side-bar.js"></script>
</body>

</html>