<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);
    
    if(!$conexion){
        header('Location: error.php');
    }

    $imagenes = obt_items_gestor($config_gestor['items_x_pag'],$conexion,'galeria');

    if(!$imagenes){
       header('Location: error.php');
    }    

    require '../views/instal.view.php';
