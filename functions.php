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

    function comprobarSession(){
        if(!isset($_SESSION['admin'])){
            header('Location: ../login.php');
        }
    }

    function fecha($fecha){
        $timestamp = strtotime($fecha);
        $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

        $mes = date('m',$timestamp)-1;
        $anio = date('Y',$timestamp);
        
        $fecha = $meses[$mes].' '.$anio; 
        return $fecha;
    }

    function obt_id($id){
        return (int)limpiarDatos($id);
    }

    function pagina_actual(){
        return isset($_GET['p']) ? (int)$_GET['p'] : 1;
    }
    
    function obt_instal_gestor($items_x_pag, $conexion){
        $inicio = (pagina_actual() > 1) ? (pagina_actual() * $items_x_pag) - $items_x_pag : 0;
        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM galeria LIMIT $inicio,$items_x_pag");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
    
    function num_pag_instal($items_x_pag,$conexion){
        $total_img = $conexion->prepare('SELECT FOUND_ROWS() as total_instal');
        $total_img->execute();
        $total_img = $total_img->fetch()['total_instal']; 

        $numero_paginas = ceil($total_img/$items_x_pag);
        return $numero_paginas;
    }

    function obt_instal($conexion){
        $sentencia = $conexion->prepare("SELECT * FROM galeria");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    function obt_serv_after($conexion){
        $sentencia = $conexion->prepare("SELECT * FROM servicio_after");
        $sentencia->execute();
        return $sentencia->fetchAll(); 
    }

    function obt_serv_after_gestor($items_x_pag,$conexion){
        $inicio = (pagina_actual() > 1) ? (pagina_actual() * $items_x_pag) - $items_x_pag : 0;
        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM servicio_after LIMIT $inicio,$items_x_pag");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    function num_pag_serv($items_x_pag,$conexion){
        $total_img = $conexion->prepare('SELECT FOUND_ROWS() as total_serv');
        $total_img->execute();
        $total_img = $total_img->fetch()['total_serv']; 

        $numero_paginas = ceil($total_img/$items_x_pag);
        return $numero_paginas;
    }

    function obt_personal($conexion){
        $sentencia = $conexion->prepare("SELECT * FROM personal");
        $sentencia->execute();
        return $sentencia->fetchAll(); 
    }
    
    function obt_personal_x_id($conexion,$id){
        $resultado = $conexion->query("SELECT * FROM personal WHERE id = $id LIMIT 1");
        $resultado = $resultado->fetchAll();
        return ($resultado) ? $resultado : false;
    }

    function obt_contenido($conexion,$tabla,$seccion){
        $statement = $conexion->prepare("SELECT * FROM $tabla WHERE seccion = :seccion LIMIT 1");
        $statement->execute(array(':seccion'=> "$seccion"));
        $resultado = $statement->fetchAll();
        return ($resultado) ? $resultado : false; 
    }        
?>