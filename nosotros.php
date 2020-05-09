<?php
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location:' . PATH . 'error.php');
    }

    /**start message section */
    $init_msg = obt_contenido($conexion, 'contenido_texto', 'sec-quienes-somos');

    if (!$init_msg) {
        header('Location:' . PATH . 'error.php');
    }

    $init_msg = $init_msg[0];

    /**vision message section */
    $vision_msg = obt_contenido($conexion, 'contenido_texto', 'sec-vision');

    if (!$vision_msg) {
        header('Location:' . PATH . 'error.php');
    }

    $vision_msg = $vision_msg[0];

    /**our team message section */
    $team_msg = obt_contenido($conexion, 'contenido_texto', 'sec-equipo');

    if (!$team_msg) {
        header('Location:' . PATH . 'error.php');
    }

    $team_msg = $team_msg[0];

    /**our team message section */
    $team_thumb = obt_contenido($conexion, 'contenido_img', 'sec-equipo');

    if (!$team_thumb) {
        header('Location:' . PATH . 'error.php');
    }

    $team_thumb = $team_thumb[0];

    /**administrative staff section*/
    $personal = obt_personal($conexion);

    if (!$personal) {
        header('Location:' . PATH . 'error.php');
    }

    require 'views/nosotros.view.php';
