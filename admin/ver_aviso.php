<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location: error.php');
    }

    $id_aviso = limpiarDatos($_GET['id']);
    
    if(!$id_aviso){
        header('Location: '.PATH.'admin/avisos.php');
    }
 
    $aviso = obt_item_x_id($conexion,'aviso',$id_aviso);

    if(!$aviso){
        header('Location: '.PATH.'admin/avisos.php');
    }

    $aviso = $aviso[0];

    require '../views/ver_aviso.view.php';    
    