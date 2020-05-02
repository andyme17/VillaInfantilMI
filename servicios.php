<?php
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location:'.PATH.'error.php');
    }

    $servicios = obt_serv_after($conexion);

    if(!$servicios){
        header('Location:'.PATH.'error.php');
    }

    require 'views/servicios.view.php';