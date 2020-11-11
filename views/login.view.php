<?php require 'layouts/head.view.php'; ?> 
    <title>Villa Infantil María Isabel | Gestor de contenido</title>
</head>
<body id="login">
    <main class="img-back-blue h-total">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-sm-2 col-sm-8 offset-md-3 col-md-6 offset-lg-4 col-lg-4">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-login shadow-lg" id="form-login" novalidate>
                        <div class="container mx-auto">
                            <div class="group">
                                <input type="text" name="usuario" id="usuario" required="" autocomplete="off"><span class="barra"></span>
                                <label for="usuario" class="float-label">Usuario: <span class="text-danger">*</span></label>
                                <div id="error-usuario"></div>
                            </div>       
                            <div class="group">
                                <input type="password" name="pass" id="pass" required="" autocomplete="off"><span class="barra"></span>
                                <label for="nombre" class="float-label">Contraseña: <span class="text-danger">*</span></label>
                                <div id="error-pass"></div>
                            </div>                     
                            <div class="text-left">
                                <small class="text-secondary">* Todos los campos son obligatorios</small>
                            </div>

                            <?php if(!empty($error)):?>
                                <div class="text-center error-login"><?php echo $error;?></div>
                            <?php endif;?>

                            <div class="text-md-right mt-4">
                                <button type="submit" name="submit" class="btn btn-form-primary" id="btnLogin">Entrar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
                            </div>                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php require 'layouts/scripts.view.php'; ?>
    
    <!-- Custom javascript files -->
    <script src="<?php echo PATH;?>js/form-login.js"></script>
</body>

</html>