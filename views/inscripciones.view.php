<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Villa Infantil María Isabel</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'nav-bar.view.php'; ?>

    <section class="img-back-blue h-md-back-2 py-4">
        <div class="content-back-blue container mx-auto">
            <h2>Proceso de Inscripción</h2>
            <hr>
            <p class="text-back-blue">
                A continuación vamos a guíarlo paso a paso a tráves del proceso de inscripción:
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
                                <h5 class="pb-3"><i class="fas fa-caret-right"></i>&nbsp;&nbsp;Datos del alumno</h5>

                                <div class="form-radio">
                                    <label>Inscripción a:</label>
                                    <div class="form-row pt-2 text-center">
                                        <div class="col-6 col-sm-4">
                                            <input type="radio" id="primero" name="grado" value="primero">
                                            <label for="primero">1° Kinder</label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <input type="radio" id="segundo" name="grado" value="segundo">
                                            <label for="segundo">2° Kinder</label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <input type="radio" id="tercero" name="grado" value="tercero">
                                            <label for="tercero">3° Kinder</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row pt-1 pt-3">
                                    <div class="group col-sm-6">
                                        <input type="text" name="ap-pat-alu" id="ap-pat-alu" required><span class="barra"></span>
                                        <label for="ap-pat-alu" class="float-label">Apellido paterno:</label>
                                    </div>
                                    <div class="group col-sm-6">
                                        <input type="text" name="ap-mat-alu" id="ap-mat-alu" required><span class="barra"></span>
                                        <label for="ap-mat-alu" class="float-label">Apellido materno:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="group col-sm-8">
                                        <input type="text" name="nombre-alu" id="nombre-alu" required><span class="barra"></span>
                                        <label for="nombre-alu" class="float-label">Nombre(s):</label>
                                    </div>
                                    <div class="group col-sm-4">
                                        <input type="text" name="edad-alu" id="edad-alu" required><span class="barra"></span>
                                        <label for="edad-alu" class="float-label">Edad:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="group col-12 col-sm-8">
                                        <input type="text" name="curp" id="curp" required><span class="barra"></span>
                                        <label for="curp" class="float-label">CURP:</label>
                                    </div>
                                    <div class="form-radio col-12 col-sm-3 mt-2 mt-sm-0">
                                        <label>Género:</label>
                                        <div class="form-row pt-2 pt-sm-0 pb-sm-2 text-center">
                                            <div class="col-6">
                                                <input type="radio" id="f" name="genero" value="f">
                                                <label for="f">F</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="radio" id="m" name="genero" value="m">
                                                <label for="m">M</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-2 mt-md-3">
                                    <div class="col-12 col-sm-7 col-lg-5">
                                        <div class="form-group ml-2">
                                            <label for="lugar-nac">Lugar de nacimiento</label>
                                            <select class="form-control form-control-sm" id="lugar-nac">
                                                <option>Selecciona una opción</option>
                                                <option>CDMX</option>
                                                <option>Estado de México</option>
                                                <option>Otro</option>
                                                <option>Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="group col-12 col-sm-5 col-lg-4 form-line">
                                        <input type="text" name="religion" id="religion" required><span class="barra"></span>
                                        <label for="religion" class="float-label">Religion:</label>
                                    </div>
                                    <div class="group col-12 col-sm-4 col-lg-3 ml-sm-1 ml-lg-0">
                                        <input type="text" name="tipo-s" id="tipo-s" required><span class="barra"></span>
                                        <label for="tipo-s" class="float-label">Tipo de sangre:</label>
                                    </div>
                                </div>
                                <p class="p-label">Domicilio particular:</p>
                                <div class="form-row mt-2">
                                    <div class="group col-12 col-sm-7 col-md-6">
                                        <input type="text" name="calle-alu" id="calle-alu" required><span class="barra"></span>
                                        <label for="calle-alu" class="float-label">Calle:</label>
                                    </div>
                                    <div class="group col-12 col-sm-5 col-md-3">
                                        <input type="text" name="num-int-alu" id="num-int-alu" required><span class="barra"></span>
                                        <label for="num-int-alu" class="float-label">No. interior:</label>
                                    </div>
                                    <div class="group col-12 col-sm-5 col-md-3">
                                        <input type="text" name="num-ext-alu" id="num-ext-alu" required><span class="barra"></span>
                                        <label for="num-ext-alu" class="float-label">No. exterior:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-md-2">
                                    <div class="group col-12 col-sm-7">
                                        <input type="text" name="colonia-alu" id="colonia-alu" required><span class="barra"></span>
                                        <label for="colonia-alu" class="float-label">Colonia:</label>
                                    </div>
                                    <div class="group col-12 col-sm-5">
                                        <input type="text" name="alcaldia-alu" id="alcaldia-alu" required><span class="barra"></span>
                                        <label for="alcaldia-alu" class="float-label">Alcaldía o municipio:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-md-2">
                                    <div class="group col-12 col-sm-8">
                                        <input type="text" name="entidad-alu" id="entidad-alu" required><span class="barra"></span>
                                        <label for="entidad-alu" class="float-label">Entidad federativa:</label>
                                    </div>
                                    <div class="group col-12 col-sm-4">
                                        <input type="text" name="cp-alu" id="cp-alu" required><span class="barra"></span>
                                        <label for="cp-alu" class="float-label">Código Postal:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-md-3">
                                    <div class="col-12 col-md-6 col-lg-5 mt-2 mt-sm-0">
                                        <label>¿Estuvo inscrito en otra escuela? </label>
                                        <div class="form-row pt-2 pt-sm-0 pb-sm-2 text-center">
                                            <div class="col-6"> 
                                                <input type="radio" id="si-esc-proc" name="esc-proc" value="si-esc-proc">
                                                <label for="si-esc-proc">Si</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="radio" id="no-esc-proc" name="esc-proc" value="no-esc-proc">
                                                <label for="no-esc-proc">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group col-12 col-md-6 col-lg-7">
                                        <input type="text" name="esc-procedencia" id="esc-procedencia" required><span class="barra"></span>
                                        <label for="esc-procedencia" class="float-label">Escuela de procedencia:</label>
                                    </div>
                                </div>
                                <div class="f1-button">
                                    <button type="button" class="btn btn-secondary btn-next">Siguiente ></button>
                                </div>
                            </div> 
                        </fieldset>

                        <fieldset>
                            <h4 class="text-center pb-3">Pre-registro</h4>
                            <p class="text-center pb-4">Completa el siguiente formulario:</p>

                            <div class="container mx-auto">
                                <h5 class="pb-3"><i class="fas fa-caret-right"></i>&nbsp;&nbsp;Datos del padre, madre o tutor</h5>

                                <div class="form-row mt-1 mt-md-3">
                                    <div class="group col-12 col-sm-6">
                                        <input type="text" name="ap-pat-tutor" id="ap-pat-tutor" required><span class="barra"></span>
                                        <label for="ap-pat-tutor" class="float-label">Apellido paterno:</label>
                                    </div>
                                    <div class="group col-12 col-sm-6">
                                        <input type="text" name="ap-mat-tutor" id="ap-mat-tutor" required><span class="barra"></span>
                                        <label for="ap-mat-tutor" class="float-label">Apellido materno:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="group col-12 col-sm-8">
                                        <input type="text" name="nombre-tutor" id="nombre-tutor" required><span class="barra"></span>
                                        <label for="nombre-tutor" class="float-label">Nombre(s):</label>
                                    </div>
                                    <div class="group col-12 col-sm-4">
                                        <input type="text" name="edad-tutor" id="edad-tutor" required><span class="barra"></span>
                                        <label for="edad-tutor" class="float-label">Edad:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-2 mt-md-3">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group ml-1">
                                            <label for="grado-estudio" class="">Último grado de estudios:</label>
                                            <select class="form-control form-control-sm" id="grado-estudio">
                                                <option value="0">Selecciona una opción</option>
                                                <option value="1">Ninguna</option>
                                                <option value="2">Preescolar</option>
                                                <option value="3">Primaria</option>
                                                <option value="4">Secundaria</option>
                                                <option value="5">Preparatoria o bachillerato</option>
                                                <option value="6">Carrera técnica con preparatoria terminada</option>
                                                <option value="7">Licenciatura</option>
                                                <option value="87">Maestría o Doctorado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="group col-12 col-sm-6">
                                        <input type="text" name="ocupacion" id="ocupacion" required><span class="barra"></span>
                                        <label for="ocupacion" class="float-label">Ocupación:</label>
                                    </div>
                                </div>
                                <p class="p-label">Domicilio particular:</p>
                                <div class="form-row">
                                    <div class="group col-12 col-sm-7 col-md-6">
                                        <input type="text" name="calle-tutor" id="calle-tutor" required><span class="barra"></span>
                                        <label for="calle-tutor" class="float-label">Calle:</label>
                                    </div>
                                    <div class="group col-12 col-sm-5 col-md-3">
                                        <input type="text" name="num-int-tutor" id="num-int-tutor" required><span class="barra"></span>
                                        <label for="num-int-tutor" class="float-label">No. interior:</label>
                                    </div>
                                    <div class="group col-12 col-sm-5 col-md-3">
                                        <input type="text" name="num-ext-tutor" id="num-ext-tutor" required><span class="barra"></span>
                                        <label for="num-ext-tutor" class="float-label">No. exterior:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-md-2">
                                    <div class="group col-12 col-sm-7">
                                        <input type="text" name="colonia-tutor" id="colonia-tutor" required><span class="barra"></span>
                                        <label for="colonia-tutor" class="float-label">Colonia:</label>
                                    </div>
                                    <div class="group col-12 col-sm-5">
                                        <input type="text" name="alcaldia-tutor" id="alcaldia-tutor" required><span class="barra"></span>
                                        <label for="alcaldia-tutor" class="float-label">Alcaldía o municipio:</label>
                                    </div>
                                </div>
                                <div class="form-row mt-md-2">
                                    <div class="group col-12 col-sm-8">
                                        <input type="text" name="entidad-tutor" id="entidad-tutor" required><span class="barra"></span>
                                        <label for="entidad-tutor" class="float-label">Entidad federativa:</label>
                                    </div>
                                    <div class="group col-12 col-sm-4">
                                        <input type="text" name="cp-tutor" id="cp-tutor" required><span class="barra"></span>
                                        <label for="cp-tutor" class="float-label">Código Postal:</label>
                                    </div>
                                </div>
                                <p class="p-label">Datos de contacto:</p>
                                <div class="form-row mt-md-2">
                                    <div class="group col-12 col-sm-6 col-md-4">
                                        <input type="text" name="tel-fijo" id="tel-fijo" required><span class="barra"></span>
                                        <label for="tel-fijo" class="float-label">Teléfono Fijo:</label>
                                    </div>
                                    <div class="group col-12 col-sm-6 col-md-4">
                                        <input type="text" name="tel-cel" id="tel-cel" required><span class="barra"></span>
                                        <label for="tel-cel" class="float-label">Teléfono Celular:</label>
                                    </div>
                                    <div class="group col-12 col-sm-6 col-md-4">
                                        <input type="text" name="tel-ofi" id="tel-ofi" required><span class="barra"></span>
                                        <label for="tel-ofi" class="float-label">Teléfono de Oficina:</label>
                                    </div>
                                    <div class="group col-12 col-md-8">
                                        <input type="text" name="email-tutor" id="email-tutor" required><span class="barra"></span>
                                        <label for="email-tutor" class="float-label">Correo Electrónico:</label>
                                    </div>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-primary btn-previous">< Anterior</button>
                                    <button type="button" class="btn btn-secondary btn-next">Siguiente ></button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="list-doc">
                            <div class="container mx-auto">
                                <div class="row">
                                    <div class="col-12 offset-md-1 col-md-10 text-center">
                                        <h4 class="pb-4">Acude a nuestras instalaciones</h4>
                                        <p class="p-3">
                                            Una vez concluido el formulario de Pre-Registro, acude a nuestras instalaciones
                                            para concluir con el proceso de inscripción presentando la documentación solicitada
                                            en el siguiente documento:
                                        </p>
                                        <a href="pdf/documentacion_requerida.pdf" class="link-pdf" download="documentacion_requerida.pdf">
                                            <i class="far fa-file-pdf"></i>
                                            <small>Da click en la imagen para descargar</small>    
                                        </a>                                                                                                                                                
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-primary btn-previous">< Anterior</button>
                                            <button type="button" class="btn btn-secondary btn-next">Finalizar ></button>
                                        </div>                
                                    </div>
                                </div>
                            </div>                                       
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <?php require 'footer.view.php'; ?> 
    
    <!-- JavaScript files for Bootstrap 4 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/nav-bar.js"></script>

    <!-- Custom javascript files -->
    <script src="js/main.js"></script>
    <script src="js/step-form.js"></script>
</body>

</html>