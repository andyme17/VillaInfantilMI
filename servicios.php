<?php
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location:'.PATH.'error.php');
    }

    /*afterschool services section */
    $after_service = obt_serv_after($conexion);

    if(!$after_service){
        header('Location:'.PATH.'error.php');
    }

    /**
     * food service section
     */

    //text
    $food_service = obt_contenido($conexion,'contenido_texto','sec-comida');

    if(!$food_service){
        header('Location:'.PATH.'error.php');
    }

    $food_service = $food_service[0];    

    //thumb
    $img_food_service = obt_contenido($conexion,'contenido_img','sec-comida');
    
    if(!$img_food_service){
        header('Location:'.PATH.'error.php');
    }

    $img_food_service = $img_food_service[0];   

    require 'views/servicios.view.php';