<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location:' . PATH . 'error.php');
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
        $food_msg = obt_contenido($conexion,'contenido_texto','sec-comida');

        if(!$food_msg){
            header('Location: error.php');
        }
        
        $food_msg = $food_msg[0];

        /*getting thumb*/
        $food_thumb = obt_contenido($conexion,'contenido_img','sec-comida');

        if(!$food_thumb){
            header('Location: error.php');
        }
        
        $food_thumb = $food_thumb[0];    
    }

    require '../views/editar_ser_comida.view.php';