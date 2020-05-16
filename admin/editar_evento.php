<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }
    
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $titulo = limpiarDatos($_POST['titulo']);
        $descripcion = limpiarDatos($_POST['descripcion']);
        $fecha = $_POST['fecha'];
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
        
        $statement = $conexion->prepare('UPDATE evento SET titulo = :titulo, descripcion = :descripcion,  fecha = :fecha, thumb = :thumb WHERE id = :id');
        $statement->execute(array(
            ':titulo' => $titulo,
            ':descripcion' => $descripcion,
            ':fecha' => $fecha,
            ':thumb' => $thumb,
            ':id' => $id
        ));

        header('Location:'.PATH.'admin/eventos.php');
    }else{
        /*getting information from events*/
        $id_evento = obt_id($_GET['id']);
        if(empty($id_evento)){
            header('Location:'.PATH.'admin/eventos.php');
        } 

        $evento = obt_item_x_id($conexion,'evento',$id_evento);

        if(!$evento){
            header('Location:'.PATH.'admin/eventos.php');
        }

        $evento = $evento[0];
    }

    require '../views/editar_evento.view.php';
