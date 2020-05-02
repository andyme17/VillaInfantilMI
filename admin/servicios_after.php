<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location:'.PATH.'error.php');
    }

    $servicios = obt_serv_after_gestor($config_gestor['items_x_pag'],$conexion);

    if(!$servicios){
        -header('Location:'.PATH.'error.php');
    }

    require '../views/servicios_after.view.php';
