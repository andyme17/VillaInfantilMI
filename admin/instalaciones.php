<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);
    
    if(!$conexion){
        header('Location:'.PATH.'error.php');
    }

    $imagenes = obt_instal_gestor($config_gestor['items_x_pag'],$conexion);

    if(!$imagenes){
       header('Location:'.PATH.'error.php');
    }    

    require '../views/instal.view.php';
