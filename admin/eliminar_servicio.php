<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);
    
    if(!$conexion){
        header('Location: error.php');
    }

    $id = limpiarDatos($_GET['id']);

    if(!$id){
        header('Location: '.PATH.'admin/servicios_afterschool.php');
    }

    /*getting thumb name*/
    $result = obt_thumb($conexion,'servicio_after', $id);

    if (!$result) {
        header('Location: error.php');
    }

    /*removing service*/
    delete_item($conexion,'servicio_after', $id);

    unlink('../img/'.$result['thumb']);

    header('Location: '.PATH.'admin/servicios_afterschool.php');
