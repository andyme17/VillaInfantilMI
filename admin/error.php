<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    require '../views/error_gestor.view.php';