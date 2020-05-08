<?php session_start();

    require 'config.php';
    require '../functions.php';
    
    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $seccion = $_POST['seccion'];
        $mensaje = limpiarDatos($_POST['mensaje']);
        $mensaje_guardado = limpiarDatos($_POST['mensaje_guardado']);

        if($mensaje_guardado === $mensaje){
            header('Location:'.PATH.'admin/');
        }

        $statement = $conexion->prepare('UPDATE contenido_texto SET descripcion = :descripcion WHERE seccion = :seccion');
        $statement->execute(array(
            ':descripcion' => $mensaje,
            ':seccion' => "$seccion"
        ));    
       
        header('Location:'.PATH.'admin/'); 
    }else{
        /*getting message*/
        $init_msg = obt_contenido($conexion,'contenido_texto','sec-quienes-somos');

        if(!$init_msg){
            header('Location: error.php');
        } 
        
        $init_msg = $init_msg[0];
    }

    require '../views/editar_msj_qs.view.php';