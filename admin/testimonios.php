<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');   
    }

    $testimonios = obt_testimonio($conexion);

    if(!$testimonios){
        header('Location: error.php');
    }

    require '../views/testimonios.view.php';
