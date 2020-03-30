<?php
    session_start();

    require 'admin/config.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){//si los datos fueron enviados
        $usuario = limpiarDatos($_POST['usuario']);
        $pass = limpiarDatos($_POST['password']); 

        if($usuario == $panel_admin['usuario'] && $pass == $panel_admin['password']){
            $_SESSION['admin'] = $panel_admin['usuario'];
            header('Location:' . PATH .'admin');
        }

    }

    function limpiarDatos($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    require 'views/login.view.php';
    