<?php
    define('PATH','http://localhost/VillaInfantilMI/');

    $panel_admin = array(
        'usuario' => 'admin',
        'password' => hash('sha512','123')
    );

    $config_gestor = array(
        'img_x_pagina' => '6',
        'carpeta_img' => 'img/'
    );

    $bd_config = array(
        'base_datos' => 'villa',
        'usuario' => 'root',
        'pass' => ''
    );