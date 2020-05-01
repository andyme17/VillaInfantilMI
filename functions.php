<?php

    function conexion($bd_config){
        try {
            $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['base_datos'], $bd_config['usuario'], $bd_config['pass']);
            return $conexion;
        } catch (PDOException $e) {
            return false;
        }
    }

    function limpiarDatos($dato){
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = stripslashes($dato);
        return $dato;
    }

    function fecha($fecha){
        $timestamp = strtotime($fecha);
        $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

        $mes = date('m',$timestamp)-1;
        $anio = date('Y',$timestamp);
        
        $fecha = $meses[$mes].' '.$anio; 
        return $fecha;
    }

    function pagina_actual(){
        return isset($_GET['p']) ? (int)$_GET['p'] : 1;
    }
    
    function obt_instal_gestor($img_x_pagina, $conexion){
        $inicio = (pagina_actual() > 1) ? (pagina_actual() * $img_x_pagina) - $img_x_pagina : 0;
        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM galeria LIMIT $inicio,$img_x_pagina");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
    
    function numero_paginas($img_x_pagina,$conexion){
        $total_img = $conexion->prepare('SELECT FOUND_ROWS() as total');
        $total_img->execute();
        $total_img = $total_img->fetch()['total']; 

        $numero_paginas = ceil($total_img/$img_x_pagina);
        return $numero_paginas;
    }

    function obt_instal($conexion){
        $sentencia = $conexion->prepare("SELECT * FROM galeria");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    function comprobarSession(){
        if(!isset($_SESSION['admin'])){
            header('Location: ../login.php');
        }
    }
?>