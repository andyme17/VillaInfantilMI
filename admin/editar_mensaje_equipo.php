<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $seccion = $_POST['seccion'];
        $mensaje = limpiarDatos($_POST['mensaje']);    
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

        /*modifying text*/
        update_content_text($conexion,$mensaje,$seccion);

        /*modifying thumb*/
        update_content_img($conexion,$thumb,$seccion);

        header('Location:'.PATH.'admin/');
    }else{
        /*getting text*/
        $team_msg = obt_contenido($conexion,'contenido_texto','sec-equipo');

        if(!$team_msg){
            header('Location: error.php');
        }
        
        $team_msg = $team_msg[0];

        /*getting thumb*/
        $team_thumb = obt_contenido($conexion,'contenido_img','sec-equipo');

        if(!$team_thumb){
            header('Location: error.php');
        }
        
        $team_thumb = $team_thumb[0];    
    }

    require '../views/editar_equipo.view.php';
