<?php

    if (isset($_POST['submit'])) {
        $nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING);
        $email  = $_POST['email'];
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $email .= filter_var($email, FILTER_VALIDATE_EMAIL);
        $votacion = $_POST['votacion'];
        $mensaje = htmlspecialchars($_POST['mensaje']);
        $mensaje .= trim($mensaje);
        $mensaje .= stripslashes($mensaje);

        if (!empty($nombre) && !empty($email) && !empty($votacion) && !empty($mensaje)) {
            $email_to = "ame171337@gmail.com";
            $email_subject = "Comentario o sugerencia del servicio del Jardín de Niños Villa Infantil MI";
            $email_message = "Contenido del mensaje: \n\n";
            $email_message .= "Nombre: " . $nombre;
            $email_message .= "\n Correo: " . $email;
            $email_message .= "\n Calificación: " . $votacion . "estrellas";
            $email_message .= "\n Comentario o sugerencia: " . $mensaje;
      
            $header = "De: " . $email . "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion();
      
          /*   if (mail($email_to, $email_subject, $email_message, $header)) {
                $respuesta = array(
                    'nombre' => 'enviado',
                    'email' => $email
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }  */

            $respuesta = array(
                "respuesta" => true
            );
        }else{
            $respuesta = array(
                "respuesta" => false
            );
        }
        
        echo json_encode($respuesta);
    }
   
    