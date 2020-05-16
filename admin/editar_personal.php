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
        $cargo = limpiarDatos($_POST['cargo']);
        $thumb_guardada = $_POST['thumb-guardada'];
        $thumb = $_FILES['thumb'];
        $id = $_POST['id'];

        if(empty($thumb['name'])){
            $thumb = $thumb_guardada;            
        }else{
            $file_uploaded = '../'.$config_gestor['carpeta_img'].$_FILES['thumb']['name'];
        
            move_uploaded_file($_FILES['thumb']['tmp_name'],$file_uploaded);
            unlink('../img/'.$thumb_guardada);

            $thumb = $_FILES['thumb']['name'];
        }

        $statement = $conexion->prepare('UPDATE personal SET nombre = :nombre, cargo = :cargo, thumb = :thumb WHERE id = :id');
        $statement->execute(array(
            ':nombre' => $nombre,
            ':cargo' => $cargo,
            ':thumb' => $thumb,
            ':id' => $id
        ));

        header('Location:'.PATH.'admin/personal_admin.php');
    }else{
        /*getting information from staff*/
        $id_personal = obt_id($_GET['id']);
        if(empty($id_personal)){
            header('Location:'.PATH.'admin/personal_admin.php');
        } 

        $personal = obt_item_x_id($conexion,'personal',$id_personal);

        if(!$personal){
            header('Location:'.PATH.'admin/personal_admin.php');
        }

        $personal = $personal[0];
    }

    require '../views/editar_personal.view.php';
