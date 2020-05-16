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
        header('Location: '.PATH.'admin/instalaciones.php');
    }

    /*getting thumb name*/
    $result = obt_thumb($conexion, 'galeria', $id);

    if (!$result) {
        header('Location: error.php');
    }
    
    /*removing instalation*/
    delete_item($conexion, 'galeria', $id); 
    
    unlink('../img/'.$result['thumb']);

    header('Location: '.PATH.'admin/instalaciones.php');