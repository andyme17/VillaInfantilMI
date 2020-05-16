<?php
   require 'admin/config.php';
   require 'functions.php';

   $conexion = conexion($bd_config);

   if (!$conexion) {
      header('Location: error.php');
   }

   /*initial banner section*/
   $banner = obt_contenido($conexion, 'contenido_img', 'modal-banner');

   if (!$banner) {
      header('Location: error.php');
   }

   $banner = $banner[0];

   /*welcome message section*/
   $welcome_msg = obt_contenido($conexion, 'contenido_texto', 'sec-bienvenida');

   if (!$welcome_msg) {
      header('Location: error.php');
   }

   $welcome_msg = $welcome_msg[0];

   /*testimonials section*/
   $testimonios = obt_rows_3($conexion,'testimonio');

   if (!$testimonios) {
      header('Location: error.php');
   }

   /*announcement section*/
   $avisos = obt_all($conexion,'aviso');

   if (!$avisos) {
      header('Location: error.php');
   }
   
   /*events section*/
   $eventos = obt_evento($conexion,'evento');

   if (!$eventos) {
      header('Location: error.php');
   }

   require 'views/index.view.php';
