<?php
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location:'.PATH.'error.php');
    }

    $imagenes = obt_instal($conexion);

    if(!$imagenes){
        header('Location:'.PATH.'error.php');
    }

    require 'views/instalaciones.view.php';