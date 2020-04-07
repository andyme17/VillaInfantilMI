<?php
    session_start();

    require 'config.php';

    if(isset($_SESSION['admin'])){
        require '../views/admin_index.view.php';
    }else{
        header('Location: ../login.php');
    }
    
    

