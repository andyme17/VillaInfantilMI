<?php session_start();

    $error = '';

    require 'admin/config.php';

    if(isset($_SESSION['admin'])){
        header('Location:' . PATH .'admin');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){//si los datos fueron enviados
        $usuario = limpiarDatos($_POST['usuario']);
        $pass = hash('sha512',$_POST['pass']); 

        if($usuario == $panel_admin['usuario'] && $pass == $panel_admin['password']){
            $_SESSION['admin'] = $panel_admin['usuario'];
            header('Location:' . PATH .'admin');
        }else{
            $error .= '<p>Datos incorrectos</p>';
        }

    }

    function limpiarDatos($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    require 'views/login.view.php';
    