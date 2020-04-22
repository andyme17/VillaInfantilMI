<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="x7i-1eQfu-xEuD6jxgrEJD3LJAi5do0R7iRzlfy9Y_4" />
    <title>Gestor de contenido VillaMI</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="login">
    <div class="wrapper">
        <?php require 'side_bar.view.php'; ?>
        <div id="content">
            <div class="content-1">
                <div class="cont-h">
                    <button type="button" id="sidebarCollapse" class="btn btn-info btn-side-bar">
                        <i class="fas fa-bars pr-1"></i>
                        <span>Menú</span>
                    </button>
                    <div class="img-init-2">
                        <img src="<?php echo PATH; ?>img/logo-kinder.png" class="img-fluid">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 offset-xl-1 col-xl-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="shadow mb-sm-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Editar Visión</h3>
                                <div class="group pt-3 pt-md-4">
                                    <textarea name="mensaje" id="mensaje" rows="5" required="" autocomplete="off" onpaste="countChar();" onkeyup="countChar();" onkeypress="return limita(400);"></textarea><span class="barra"></span>
                                    <label for="mensaje" class="float-label">Mensaje: <span class="text-danger">*</span></label>
                                    <div id="res" class="text-secondary text-right">0 caracter/s, te quedan 400</div>
                                    <div id="error-msj"></div>
                                </div>
                                <div class="btn-right">
                                    <button type="submit" name="submit" class="btn btn-primary" id="btnForm">Actualizar ></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript files for Bootstrap 4 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/headroom.min.js"></script>
    <script src="../js/side-bar.js"></script>
    
    <script>
        var mensaje = document.getElementById('mensaje');

        function countChar() {
            var total = 400;

            setTimeout(function() {
                var respuesta = document.getElementById('res');
                var cantidad = mensaje.value.length;

                respuesta.innerHTML = cantidad + ' caractere/s, te quedan ' + (total - cantidad);
                if (cantidad >= total) {
                    respuesta.classList.remove('text-secondary');
                    respuesta.classList.add('text-danger');
                } else {
                    respuesta.classList.remove('text-danger');
                    respuesta.classList.add('text-secondary');
                }
            }, 10);

        }

        function limita(maximoCaracteres) {
            if (mensaje.value.length >= maximoCaracteres) {
                return false;
            } else {
                return true;
            }
        }

        document.getElementById("btnForm").addEventListener('click', validar, false);

        function validaMensaje(campo) {
            if (campo.value.trim() == "") {
                document.getElementById("error-msj").textContent = "Ingrese el mensaje.";
                document.getElementById("error-msj").className = "error";
                campo.focus();
                return false;
            } else if (campo.value.trim().length > 400) {
                document.getElementById("error-msj").textContent = "El mensaje sólo puede tener máximo 400 caracteres.";
                document.getElementById("error-msj").className = "error";
                campo.focus();                
                return false;
            }else{
                document.getElementById("error-msj").textContent = "";
                document.getElementById("error-msj").className = "";
            }
            return true;
        }

        function validar(e) {           
            if (validaMensaje(mensaje) && confirm("Pulsa aceptar para actualizar el mensaje")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        }
    </script>
</body>

</html>