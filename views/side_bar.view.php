    <nav id="sidebar">
        <div id="dismiss">
            <p><i class="fas fa-arrow-left pr-1"></i> Ocultar</p>
        </div>

        <div class="sidebar-header">
            <i class="fas fa-user-circle"></i>
            <p>Administrador</p>
        </div>

        <ul>
            <li class="">
                <a href="<?php echo PATH; ?>admin"><i class="fas fa-home"></i> Inicio</i></a>
            </li>
            <p>Páginas</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="pl-2 fas fa-file-invoice"></i> Index</a>
                <ul class="collapse" id="homeSubmenu">
                    <li>
                        <a href="<?php echo PATH; ?>admin/editar_mensaje_bienvenida.php">Mensaje de bienvenida</a>
                    </li>
                    <li>
                        <a href="<?php echo PATH; ?>admin/editar_avisos.php">Avisos</a>
                    </li>
                    <li>
                        <a href="<?php echo PATH; ?>admin/testimonios.php">Testimonios</a>
                    </li>
                    <li>
                        <a href="<?php echo PATH; ?>admin/eventos.php">Eventos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> Nosotros</a>
                <ul class="collapse" id="pageSubmenu">
                    <li>
                        <a href="<?php echo PATH; ?>admin/editar_mensaje_nosotros.php">Mensaje de inicio</a>
                    </li>
                    <li>
                        <a href="<?php echo PATH; ?>admin/editar_vision.php">Visión</a>
                    </li>
                    <li>
                        <a href="<?php echo PATH; ?>admin/editar_mensaje_equipo.php">Nuestro equipo</a>
                    </li>
                    <li>
                        <a href="<?php echo PATH; ?>admin/personal_admin.php">Personal Administrativo</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageServicios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-tasks"></i> Servicios</a>
                <ul class="collapse" id="pageServicios">
                    <li>
                        <a href="<?php echo PATH; ?>admin/servicios_after.php">Servicios Afterschool</a>
                    </li>
                    <li>
                        <a href="<?php echo PATH; ?>admin/servicio_comida.php">Servicio de comida</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo PATH; ?>admin/instalaciones.php"><i class="fas fa-school"></i> Instalaciones</a>
            </li>
            <li class="cerrar">
                <a href="<?php echo PATH; ?>cerrar.php">Cerrar sesión <i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
    </nav>