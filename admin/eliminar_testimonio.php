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
    $statement = $conexion->prepare('DELETE FROM testimonio WHERE id=:id');
    $statement->execute(array('id' => $id));

    header('Location: '.PATH.'admin/testimonios.php');