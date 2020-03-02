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

    <main class="img-back py-3 py-md-4">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-1 col-lg-10">
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
                                <h5><i class="fas fa-caret-right"></i>&nbsp;&nbsp;Datos del alumno</h5>
                                <!--  grade  -->
                                <p class="p-label">Inscripción a:</p>
                                <div class="form-row text-center">
                                    <div class="col-6 col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="grado" id="k1" value="k1">
                                            <p class="form-check-label" for="k1">1°Kinder</p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="grado" id="k2" value="k2">
                                            <p class="form-check-label" for="k2">2°Kinder</p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="grado" id="k3" value="k3">
                                            <p class="form-check-label" for="k3">3°Kinder</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mt-4">
                                    <div class="group col-md-6">
                                        <input type="text" name="ap-paterno" id="ap-paterno" required><span class="barra"></span>
                                        <label for="ap-paterno">Apellido paterno:</label>
                                    </div>
                                    <div class="group col-md-6">
                                        <input type="text" name="ap-materno" id="ap-materno" required><span class="barra"></span>
                                        <label for="ap-materno">Apellido materno:</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="group col-md-8">
                                        <input type="text" name="nombre-alu" id="nombre-alu" required><span class="barra"></span>
                                        <label for="nombre-alu">Nombre(s):</label>
                                    </div>
                                    <div class="group col-md-4">
                                        <input type="text" name="edad-alu" id="edad-alu" required><span class="barra"></span>
                                        <label for="edad-alu">Edad:</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="group col-12 col-md-9">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">CURP:</label>
                                    </div>
                                    <!-- gender -->
                                    <div class="col-12 col-md-3 py-3 py-md-0">
                                        <div class="form-row pl-2 pl-md-1">
                                            <div class="col-6 col-md-12 pb-2">
                                                <p class="p-label2">Género:</p>
                                            </div>
                                            <div class="col-6 col-md-12 pl-md-2">
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <P class="form-check-label" for="inlineRadio1">F</P>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <P class="form-check-label" for="inlineRadio2">M</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-md-7 col-lg-5">
                                        <div class="form-group">
                                            <p for="exampleFormControlSelect1" class="p-label">Lugar de nacimiento</p>
                                            <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                                <option>selecciona una opción</option>
                                                <option>CDMX</option>
                                                <option>Estado de México</option>
                                                <option>Otro</option>
                                                <option>Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="group col-12 col-md-5 col-lg-4">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Religion:</label>
                                    </div>
                                    <div class="group col-12 col-md-4 col-lg-3">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Tipo de sangre:</label>
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-row pl-2 pl-md-1">
                                            <div class="col-6 col-md-12 pb-2">
                                                <p class="p-label2">¿Ha estado inscrito en otra escuela?</p>
                                            </div>
                                            <div class="col-6 col-md-12 pl-md-2">
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <P class="form-check-label" for="inlineRadio1">Si</P>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <P class="form-check-label" for="inlineRadio2">No</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group col-12 col-md-6">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Escuela de procedencia:</label>
                                    </div>
                                </div>
                                <p class="p-label">Domicilio particular:</p>
                                <div class="form-row mt-2">
                                    <div class="group col-12 col-md-6">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Calle:</label>
                                    </div>
                                    <div class="group col-12 col-md-3">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Número interior:</label>
                                    </div>
                                    <div class="group col-12 col-md-3">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Número exterior:</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="group col-12 col-md-6">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Colonia:</label>
                                    </div>
                                    <div class="group col-12 col-md-6">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Alcaldía o municipio:</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="group col-12 col-md-6">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Entidad federativa:</label>
                                    </div>
                                    <div class="group col-12 col-md-6">
                                        <input type="text" name="" id="" required><span class="barra"></span>
                                        <label for="">Código Postal:</label>
                                    </div>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-primary btn-next">Siguiente ></button>
                                </div>
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
                                <button type="button" class="btn btn-secondary btn-previous">
                                    < Anterior</button> <button type="button" class="btn btn-primary btn-next">Enviar >
                                </button>
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
                                <button type="button" class="btn btn-secondary btn-previous">
                                    < Anterior</button> </div> </fieldset> </form> </div> </div> </div> </main> <?php require 'footer.view.php'; ?> <!--Archivos javascript para bootstrap -->
                                        <script src="js/jquery-3.4.1.min.js"></script>
                                        <script src="js/popper.min.js"></script>
                                        <script src="js/bootstrap.min.js"></script>
                                        <script src="js/headroom.min.js"></script>
                                        <script src="js/main.js"></script>
                                        <script src="js/step-form.js"></script>
</body>

</html>