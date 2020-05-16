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
    
    function obt_contenido($conexion,$tabla,$seccion){
        $statement = $conexion->prepare("SELECT * FROM $tabla WHERE seccion = :seccion LIMIT 1");
        $statement->execute(array(':seccion'=> "$seccion"));
        $resultado = $statement->fetchAll();
        return ($resultado) ? $resultado : false; 
    }  
    
    function update_content_text($conexion,$mensaje,$seccion){
        $statement = $conexion->prepare('UPDATE contenido_texto SET descripcion = :descripcion WHERE seccion = :seccion');
        $statement->execute(array(
            ':descripcion' => $mensaje,
            ':seccion' => "$seccion"
        ));       
    }
    
    function update_content_img($conexion,$thumb,$seccion){
        $statement = $conexion->prepare('UPDATE contenido_img SET thumb = :thumb WHERE seccion = :seccion');
        $statement->execute(array(
            ':thumb' => $thumb,
            ':seccion' => "$seccion"
        ));       
    }

    function obt_items_gestor($items_x_pag, $conexion,$tabla){
        $inicio = (pagina_actual() > 1) ? (pagina_actual() * $items_x_pag) - $items_x_pag : 0;
        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM $tabla LIMIT $inicio,$items_x_pag");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    function num_pag($items_x_pag,$conexion){
        $total = $conexion->prepare('SELECT FOUND_ROWS() as total');
        $total->execute();
        $total = $total->fetch()['total']; 

        $numero_paginas = ceil($total/$items_x_pag);
        return $numero_paginas;
    }

    function obt_item_x_id($conexion,$tabla,$id){
        $resultado = $conexion->query("SELECT * FROM $tabla WHERE id = $id LIMIT 1");
        $resultado = $resultado->fetchAll();
        return ($resultado) ? $resultado : false;
    }

    function obt_all($conexion,$tabla){
        $sentencia = $conexion->prepare("SELECT * FROM $tabla");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    function obt_rows_3($conexion,$tabla){
        $statement = $conexion->prepare("SELECT * FROM $tabla LIMIT 3");
        $statement->execute();
        return $statement->fetchAll();
    }

    function num_items($conexion){
        $total = $conexion->prepare('SELECT FOUND_ROWS() as total_items');
        $total->execute();
        $total = $total->fetch()['total_items'];         
        return $total;
    }

    function obt_evento($conexion){
        $statement = $conexion->prepare("SELECT * FROM evento ORDER BY fecha DESC LIMIT 3");
        $statement->execute();
        return $statement->fetchAll();
    }

    function obt_thumb($conexion,$tabla,$id){
        $statement = $conexion->prepare("SELECT thumb FROM $tabla WHERE id=:id");
        $statement->execute(array('id'=> $id));
        $resultado = $statement->fetch();
        return ($resultado) ? $resultado : false;
    }

    function delete_item($conexion,$tabla,$id){
        $statement = $conexion->prepare("DELETE FROM $tabla WHERE id=:id");
        $statement->execute(array('id' => $id));
    }