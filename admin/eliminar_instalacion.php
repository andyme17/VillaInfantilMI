<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config); 

    if(!$conexion){
        header('Location:'.PATH.'error.php');
    }

    $id = limpiarDatos($_GET['id']);

    if(!$id){
        header('Location: '.PATH.'admin/instalaciones.php');
    }

    $statement = $conexion->prepare('DELETE FROM galeria WHERE id=:id');
    $statement->execute(array('id' => $id));

    header('Location: '.PATH.'admin/instalaciones.php');