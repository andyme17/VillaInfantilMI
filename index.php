<?php
   require 'admin/config.php';
   require 'functions.php';

   $conexion = conexion($bd_config);

  /*  if(!$conexion){
      header('Location: error.php');
   } */

   //obtenerInstalaciones();

   require 'views/index.view.php';

?>