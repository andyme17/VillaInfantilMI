<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location: error.php');
    }

    $id = limpiarDatos($_GET['id']);

    if (!$id) {
        header('Location: ' . PATH . 'admin/avisos.php');
    }

    /*getting thumb name*/
    $result = obt_thumb($conexion, 'aviso', $id);

    if (!$result) {
        header('Location: error.php');
    }

    /*removing instalation*/
    delete_item($conexion, 'aviso', $id);

    unlink('../img/' . $result['thumb']);

    header('Location: ' . PATH . 'admin/avisos.php');
