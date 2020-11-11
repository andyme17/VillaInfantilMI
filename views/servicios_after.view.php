<?php require 'layouts/head.view.php'; ?> 
    <title>Gestor de contenido VillaMI | Servicios</title>
</head>
<?php require 'layouts/side_bar.view.php'; ?> 
                <main class="container">
                    <h3 class="my-3 text-center">Servicios AfterSchool</h3>
                    <a href="<?php echo PATH; ?>admin/agregar_servicio.php" class="btn btn-success mb-4 ml-3 ml-sm-4">
                        <i class="fas fa-plus-circle pr-2"></i><span>Agregar servicio</span>
                    </a>
                    <div class="content-after-2 container">
                        <?php foreach ($after_service as $service) : ?>
                            <div class="item-extra-2 mb-3">
                                <img src="<?php echo PATH; ?>img/<?php echo $service['thumb']; ?>" alt="Imagen ilustrativa de <?php echo $service['nombre']; ?>" class="img-fluid">
                                <div class="content-extra-2">
                                    <h5 class="mt-5 mt-sm-4 mt-md-5"><?php echo $service['nombre']; ?></h5>
                                    <div class="cont-btn">
                                        <a class="btn btn-outline-light mr-2" href="<?php echo PATH; ?>admin/editar_servicio.php?id=<?php echo $service['id']; ?>"><i class="fas fa-edit"></i> Editar</a>
                                        <a class="btn btn-outline-danger" href="<?php echo PATH; ?>admin/eliminar_servicio.php?id=<?php echo $service['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </main>
                <section class="container paginacion">
                    <?php $numero_paginas = num_pag($config_gestor['items_x_pag'], $conexion); ?>
                    <?php if ($numero_paginas > 1) : ?>
                        <ul>
                            <?php if (pagina_actual() === 1) : ?>
                                <li class="disabled"><i class="fas fa-angle-double-left"></i></li>
                            <?php else : ?>
                                <li><a href="servicios_afterschool.php?p=<?php echo pagina_actual() - 1; ?>"><i class="fas fa-angle-double-left"></i></a></li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $numero_paginas; $i++) : ?>
                                <?php if (pagina_actual() === $i) : ?>
                                    <li class="active"><?php echo $i; ?></li>
                                <?php else : ?>
                                    <li><a href="servicios_afterschool.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php if (pagina_actual() == $numero_paginas) : ?>
                                <li class="disabled"><i class="fas fa-angle-double-right"></i></li>
                            <?php else : ?>
                                <li><a href="servicios_afterschool.php?p=<?php echo pagina_actual() + 1; ?>"><i class="fas fa-angle-double-right"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </section>
            </div>
        </div>
    </div>

    <?php require 'layouts/scripts.view.php'; ?>
   
    <!-- Custom javascript files -->
    <script src="<?php echo PATH;?>js/side-bar.js"></script>
</body>

</html>