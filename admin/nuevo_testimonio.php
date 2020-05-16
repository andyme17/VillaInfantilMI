<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');   
    } 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = limpiarDatos($_POST['nombre']);
        $votacion = limpiarDatos($_POST['votacion']);
        $mensaje = limpiarDatos($_POST['mensaje']);

        obt_all($conexion,'testimonio');
        $num_rows = num_items($conexion);

        if($num_rows < 3){
            $statement = $conexion->prepare(
                'INSERT INTO testimonio(id,nombre,votacion,mensaje)
                VALUES (null,:nombre,:votacion,:mensaje)'
            );
    
            $statement->execute(array(
                ':nombre' => $nombre,
                ':votacion' => $votacion,
                ':mensaje' => $mensaje
            ));           
        }else{
            header('Location: error.php');         
        }
        
        header('Location:'.PATH.'admin/testimonios.php');         
    }

    require '../views/nuevo_testimonio.view.php';
