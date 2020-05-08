<?php
   require 'admin/config.php';
   require 'functions.php';

   $conexion = conexion($bd_config);

   if(!$conexion){
      header('Location: error.php');
   }

   /*initial banner section*/
   $banner = obt_contenido($conexion,'contenido_img','modal-banner');

   if(!$banner){
      header('Location: error.php');
   }

   $banner = $banner[0];

   /*welcome message section*/
   $welcome_msg = obt_contenido($conexion,'contenido_texto','sec-bienvenida'); 

   if(!$welcome_msg){
      header('Location: error.php');
   }

   $welcome_msg = $welcome_msg[0];

  
   require 'views/index.view.php';

?>