<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }

    /*showing afterschool services*/
    $after_service = obt_items_gestor($config_gestor['items_x_pag'],$conexion,'servicio_after');

    if(!$after_service){
        header('Location: error.php');
    }

    require '../views/servicios_after.view.php';
