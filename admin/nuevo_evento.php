<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $titulo = limpiarDatos($_POST['titulo']);
        $descripcion = limpiarDatos($_POST['descripcion']);
        $fecha = $_POST['fecha'];
        $thumb = $_FILES['thumb']['tmp_name'];

        $file_uploaded = '../'.$config_gestor['carpeta_img'].$_FILES['thumb']['name'];
        
        move_uploaded_file($thumb,$file_uploaded);

        obt_all($conexion,'evento');
        $num_rows = num_items($conexion);

        if($num_rows < 3){
            $statement = $conexion->prepare(
                'INSERT INTO evento(id,titulo,descripcion,fecha,thumb)
                VALUES (null,:titulo,:descripcion,:fecha,:thumb)'
            );
    
            $statement->execute(array(
                ':titulo' => $titulo,
                ':descripcion' => $descripcion,
                ':fecha' => $fecha,
                ':thumb' => $_FILES['thumb']['name']
            ));
        }else{
            header('Location: error.php');         
        }
        
        header('Location:'.PATH.'admin/eventos.php');         
    }   

    require '../views/nuevo_evento.view.php';
