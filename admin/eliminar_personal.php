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
        header('Location: '.PATH.'admin/personal.php');
    }

    /*getting thumb name*/
    $result = obt_thumb($conexion, 'personal', $id);

    if (!$result) {
        header('Location: error.php');
    }
        
    /*removing person*/
    delete_item($conexion,'personal', $id);

    unlink('../img/'.$result['thumb']);

    header('Location: '.PATH.'admin/personal_admin.php');
