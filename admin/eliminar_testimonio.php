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
        header('Location: '.PATH.'admin/testimonios.php');
    }

    /*removing testimonial*/
    delete_item($conexion,'testimonio',$id);

    header('Location: '.PATH.'admin/testimonios.php');