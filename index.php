<?php

   
/* if (isset($_POST['submit'])) {
   $nombre = $_POST['nombre'];
   $email  = $_POST['email'];
   $votacion = $_POST['votacion'];
   $mensaje = $_POST['mensaje'];

   echo json_encode($_POST);

   if (!empty($nombre)) {
      $nombre = filter_var(trim($nombre), FILTER_SANITIZE_STRING);
   } else {
      $error_nombre = 'Por favor ingresa un nombre <br/>';
   }

   if (!empty($email)) {
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $error_email = 'Por favor, ingresa un correo válido <br/>';
      }
   } else {
      $error_email = 'Por favor, ingresa un correo <br/>';
   }

   if (!empty($votacion)) {
      $votacion = trim($votacion);
      $votacion .= htmlspecialchars($votacion);
      $votacion .= stripslashes($votacion);
   } else {
      $error_votacion = 'Por favor, califica nuestros servicios <br/>';
   }

   if (!empty($mensaje)) {
      $mensaje = htmlspecialchars($mensaje);
      $mensaje = trim($mensaje);
      $mensaje = stripslashes($mensaje);
   } else {
      $error_mensaje = 'Por favor, ingresa el mensaje';
   }

   if (!$error_nombre && !$error_email && !$error_mensaje) {
      $email_to = "ame171337@gmail.com";
      $email_subject = "Comentario o sugerencia del servicio del Jardín de Niños Villa Infantil MI";
      $email_message = "Contenido del mensaje: \n\n";
      $email_message .= "Nombre: " . $nombre;
      $email_message .= "\n Correo: " . $email;
      $email_message .= "\n Calificación: " . $votacion . "estrellas";
      $email_message .= "\n Comentario o sugerencia: " . $mensaje;

      $header = "De: " . $email . "\r\n";
      $header .= "X-Mailer: PHP/" . phpversion();

      $enviado = true;

      if (mail($email_to, $email_subject, $email_message, $header)) {
        
      } else {
         $enviado = false;
      } 
   } */

require 'admin/config.php';
require 'views/index.view.php';
