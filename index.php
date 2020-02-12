<?php
   //comentary form 
   $error_nombre = '';
   $error_email = '';
   $error_mensaje = '';
   $enviado = '';

   if(isset($_POST['submit'])){
       $nombre = $_POST['nombre'];
       $email  = $_POST['email'];
       $mensaje = $_POST['mensaje'];    

       if(!empty($nombre)){
           $nombre = filter_var(trim($nombre),FILTER_SANITIZE_STRING);
       }else{
           $error_nombre= 'Por favor ingresa un nombre <br/>';    
       }

       if(!empty($email)){
           $email = filter_var($email,FILTER_SANITIZE_EMAIL);
           
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
               $error_email = 'Por favor, ingresa un correo válido <br/>';
           }
       }else{
           $error_email = 'Por favor, ingresa un correo <br/>';    
       }

       if(!empty($mensaje)){
           $mensaje = htmlspecialchars($mensaje);
           $mensaje = trim($mensaje);
           $mensaje = stripslashes($mensaje);
       }else{
           $error_mensaje = 'Por favor, ingresa un comentario o sugerencia';
       }

       if(!$error_nombre && !$error_email && !$error_mensaje){
           $enviar_a = 'andy_me17133781@hotmail.com';
           $asunto = 'Comentario sobre el servicio enviado desde página villainfantilmi.edu.mx';
           $mensaje_enviado = "De: $nombre \n";
           $mensaje_enviado .= "Correo: $email \n";
           $mensaje_enviado .= "Mensaje: ". $mensaje; 

           // mail($enviar_a, $asunto, $mensaje_enviado);
           $enviado = true;
       }
   }

   require 'admin/config.php';
   require 'views/index.view.php';

