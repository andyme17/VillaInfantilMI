<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config); 

    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $thumb = $_FILES['thumb']['tmp_name'];

        $file_uploaded = '../'.$config_gestor['carpeta_img'].$_FILES['thumb']['name'];
        
        move_uploaded_file($thumb,$file_uploaded);
        
        $statement = $conexion->prepare(
            'INSERT INTO galeria (id,thumb)
            VALUES (null,:thumb)'
        );

        $statement->execute(array(
            ':thumb' => $_FILES['thumb']['name']
        ));

        header('Location:'.PATH.'admin/instalaciones.php');       
    }

    require '../views/agregar_instal.view.php';
