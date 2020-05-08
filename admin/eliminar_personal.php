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

    $statement = $conexion->prepare('SELECT thumb FROM personal WHERE id=:id');
    $statement->execute(array('id' => $id));
    $result = $statement->fetch();
    
    $statement1 = $conexion->prepare('DELETE FROM personal WHERE id=:id');
    $statement1->execute(array('id' => $id));

    unlink('../img/'.$result['thumb']);

    header('Location: '.PATH.'admin/personal_admin.php');
