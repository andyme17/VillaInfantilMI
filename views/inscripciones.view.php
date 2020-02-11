<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Villa Infantil María Isabel</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'nav-bar.view.php'; ?>

    <section class="img-back-blue h-md-back-2 py-4">
        <div class="content-back-blue container mx-auto">
            <h2>Proceso de Inscripción</h2>
            <hr>
            <p class="text-back-blue">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, et nam tenetur reiciendis minus nesciunt rem
                amet impedit nulla qui, fugiat earum perferendis iusto vitae.(definir).
            </p>
        </div>
    </section>

    <main class="py-3 py-md-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">
                    <form role="form" action="" method="post" class="f1 shadow">
                        <div class="f1-steps pb-4">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon">1</div>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon">2</div>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon">3</div>
                            </div>
                        </div>

                        <fieldset>
                            <h4 class="text-center pb-3">Pre-registro</h4>
                            <p class="text-center pb-4">Completa el siguiente formulario:</p>
                            <div class="container mx-auto">
                                <p>Datos del alumno</p>
                                <div class="group">
                                    <input type="text" name="" id="" required><span class="barra"></span>
                                    <label for="">Nombre completo:</label>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="two-group">
                                            <input type="text" name="" id="" required><span class="barra"></span>
                                            <label for="">Edad:</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="two-group">
                                            <input type="text" name="" id="" required><span class="barra"></span>
                                            <label for="">CURP:</label>
                                        </div>                 
                                    </div>                                    
                                </div>
                                <div class="group">
                                    <input type="text" name="" id="" required><span class="barra"></span>
                                    <label for="">Escuela de procedencia:</label>
                                </div>
                                <div class="group">
                                    <input type="text" name="" id="" required><span class="barra"></span>
                                    <label for="">Tipo de sangre:</label>
                                </div>                                
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-primary btn-next">Siguiente ></button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h4 class="text-center pb-3">Pre-registro</h4>
                            <p class="text-center pb-4">Completa el siguiente formulario:</p>
                            <p>Datos del padre o tutor</p>
                                <div class="group">
                                    <input type="text" name="" id="" required><span class="barra"></span>
                                    <label for="">Nombre completo:</label>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="two-group">
                                            <input type="text" name="" id="" required><span class="barra"></span>
                                            <label for="">Edad:</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="two-group">
                                            <input type="text" name="" id="" required><span class="barra"></span>
                                            <label for="">Ocupación:</label>
                                        </div>                 
                                    </div>                                    
                                </div>
                                <div class="group">
                                    <input type="text" name="" id="" required><span class="barra"></span>
                                    <label for="">Tel. y ext. de oficina:</label>
                                </div>
                                <div class="group">
                                    <input type="text" name="" id="" required><span class="barra"></span>
                                    <label for="">Tel. Celular:</label>
                                </div>
                                <div class="group">
                                    <input type="email" name="" id="" required><span class="barra"></span>
                                    <label for="">Correo electrónico:</label>
                                </div>

                            <div class="f1-buttons">
                                <button type="button" class="btn btn-secondary btn-previous">< Anterior</button>
                                <button type="button" class="btn btn-primary btn-next">Enviar ></button>
                            </div>

                        </fieldset>

                        <fieldset class="list-doc">
                            <h4 class="text-center pb-4">Acude a nuestras instalaciones</h4>
                            <p class="pb-3">
                                Una vez concluido con el Pre-Registro, acude a nuestras instalaciones
                                para concluir con el proceso de inscripción presentando la siguiente documentación:    
                            </p>
                            <ol>
                                <li>Acta de nacimiento del niño</li>
                                <li>Identificación oficial del padre o tutor (INE)</li>
                                <li>Fotografías del niño</li>
                                <li>Comprobante de domicilio</li>
                            </ol>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-secondary btn-previous">< Anterior</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php require 'footer.view.php'; ?>

    <!--Archivos javascript para bootstrap -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>