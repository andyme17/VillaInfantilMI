<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');   
    }

    $eventos = obt_evento($conexion);
   
    if(!$eventos){
        header('Location: error.php');
    }

    require '../views/eventos.view.php';
