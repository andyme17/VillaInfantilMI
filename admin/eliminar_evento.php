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
        header('Location: '.PATH.'admin/eventos.php');
    }

    /*getting thumb name*/
    $result = obt_thumb($conexion, 'evento', $id);

    if (!$result) {
        header('Location: error.php');
    }
    
    /*removing event*/
    delete_item($conexion, 'evento', $id);
    
    unlink('../img/'.$result['thumb']);

    header('Location: '.PATH.'admin/eventos.php');