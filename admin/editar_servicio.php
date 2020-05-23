<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);
   
    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $nombre = limpiarDatos($_POST['servicio']);       
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

        $statement = $conexion->prepare('UPDATE servicio_after SET nombre = :nombre, thumb = :thumb WHERE id = :id');
        $statement->execute(array(
            ':nombre' => $nombre,
            ':thumb' => $thumb,
            ':id' => $id
        ));

        header('Location:'.PATH.'admin/servicios_afterschool.php');
    }else{
        /*getting information from staff*/
        $id_servicio = obt_id($_GET['id']);
        if(empty($id_servicio)){
            header('Location:'.PATH.'admin/servicios_afterschool.php');
        } 

        $servicio = obt_item_x_id($conexion,'servicio_after',$id_servicio);
        
        if(!$servicio){
            header('Location:'.PATH.'admin/servicios_afterschool.php');
        }

        $servicio = $servicio[0];        
    }

    require '../views/editar_servicio.view.php';
