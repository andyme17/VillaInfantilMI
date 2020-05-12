<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }
    
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $nombre = limpiarDatos($_POST['nombre']);
        $votacion = limpiarDatos($_POST['votacion']);
        $mensaje = limpiarDatos($_POST['mensaje']);
        $id = $_POST['id'];

        $statement = $conexion->prepare('UPDATE testimonio SET nombre = :nombre, votacion = :votacion,  mensaje = :mensaje WHERE id = :id');
        $statement->execute(array(
            ':nombre' => $nombre,
            ':votacion' => $votacion,
            ':mensaje' => $mensaje,
            ':id' => $id
        )); 

        header('Location:'.PATH.'admin/testimonios.php');
    }else{
        /*getting information from staff*/
        $id_testimonio = obt_id($_GET['id']);
        if(empty($id_testimonio)){
            header('Location:'.PATH.'admin/testimonios.php');
        } 

        $testimonio = obt_testimonio_x_id($conexion,$id_testimonio);

        if(!$testimonio){
            header('Location:'.PATH.'admin/testimonios.php');
        }

        $testimonio = $testimonio[0];
    }

    require '../views/editar_testimonio.view.php';
