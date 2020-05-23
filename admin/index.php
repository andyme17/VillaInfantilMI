<?php
    session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    require '../views/admin_index.view.php';

   
    

