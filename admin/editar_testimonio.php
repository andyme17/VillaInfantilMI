<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }

    $testimonio = obt_testimonio($conexion);

    if(!$testimonio){
        header('Location: error.php');
    }

    require '../views/editar_testimonio.view.php';
