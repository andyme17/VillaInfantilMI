<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }

    $personal = obt_personal($conexion);

    if(!$personal){
        header('Location: error.php');
    }

    require '../views/personal.view.php';
