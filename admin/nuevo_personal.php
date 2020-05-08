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
        $cargo = limpiarDatos($_POST['cargo']);
        $thumb = $_FILES['thumb']['tmp_name'];

        $file_uploaded = '../'.$config_gestor['carpeta_img'].$_FILES['thumb']['name'];
        
        move_uploaded_file($thumb,$file_uploaded);
        
        $statement = $conexion->prepare(
            'INSERT INTO personal(id,nombre,cargo,thumb)
            VALUES (null,:nombre,:cargo,:thumb)'
        );

        $statement->execute(array(
            ':nombre' => $nombre,
            ':cargo' => $cargo,
            ':thumb' => $_FILES['thumb']['name']
        ));

        header('Location:'.PATH.'admin/personal_admin.php');         
    }

    require '../views/nuevo_personal.view.php';
