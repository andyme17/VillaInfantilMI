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
        $thumb_guardada = $_POST['thumb-guardada'];
        $thumb = $_FILES['thumb'];    
        
        if(empty($thumb['name'])){
           $thumb = $thumb_guardada;                       
        }else{
            $file_uploaded = '../'.$config_gestor['carpeta_img'].$_FILES['thumb']['name'];
           
            move_uploaded_file($_FILES['thumb']['tmp_name'],$file_uploaded);
            unlink('../img/'.$thumb_guardada);

            $thumb = $_FILES['thumb']['name'];            
        } 

        /*modifying thumb*/
        update_content_img($conexion,$thumb,$seccion);
      
        header('Location:'.PATH.'admin/');
    }else{
        /*getting banner*/
        $banner = obt_contenido($conexion,'contenido_img','modal-banner');

        if(!$banner){
            header('Location: error');
        }

        $banner = $banner[0];        
    }

    require '../views/editar_banner.view.php';