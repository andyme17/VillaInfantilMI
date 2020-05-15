<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');   
    }

    $avisos = obt_items_gestor($config_gestor['items_x_pag'],$conexion,'aviso');

    if(!$avisos){
        header('Location: error.php'); 
    }

    require '../views/avisos.view.php';
