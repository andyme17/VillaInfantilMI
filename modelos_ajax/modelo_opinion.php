<?php

    header("Content-type: application/json; charset=utf-8");

    #false por defecto, nos evitará 5 líneas de código innecesarias
    $respuesta=false;

    if (isset($_POST['submit'])) {
        $nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING);
        $email  = $_POST['email'];
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $votacion = $_POST['votacion'];
        $mensaje = htmlspecialchars($_POST['mensaje']);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje); 

        #Definimos $respuesta en el if evitando el else interior
        if (!empty($nombre) && !empty($email) && !empty($votacion) && !empty($mensaje)) {
            $email_to = "villainfantilmariaisabel@gmail.com";
            $email_subject = "Comentario o sugerencia del servicio del Jardín de Niños Villa Infantil MI";
            $email_message = "Contenido del mensaje: \n\n";
            $email_message .= " Nombre: " . $nombre;
            $email_message .= "\n Correo: " . $email;
            $email_message .= "\n Calificación: " . $votacion . " estrellas";
            $email_message .= "\n Comentario o sugerencia: " . $mensaje;

            $header = "De: " . $email . "\r\n";

            if(mail($email_to, $email_subject, $email_message, $header)){
                $respuesta =  true;
            }            
        }
    }
    
    echo json_encode( array("respuesta"=>$respuesta) );