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
                <div class="col-12 offset-lg-2 col-lg-8">
                    <form action="" method="post" class="f1 shadow" id="form-inscrip" novalidate>
                        <h4 class="text-center pb-3">Pre-registro</h4>
                        <p class="text-center pb-4">Completa el siguiente formulario:</p>
                        <div class="container">
                            <h5 class="pb-3"><i class="fas fa-caret-right"></i>&nbsp;&nbsp;Datos del alumno</h5>

                            <div class="form-radio">
                                <label>Inscripción a:</label>
                                <div class="form-row pt-2 text-center" id="campo-radio">
                                    <div class="col-6 col-sm-4">
                                        <input type="radio" id="primero" name="grado" value="1">
                                        <label for="primero">1° Kinder</label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <input type="radio" id="segundo" name="grado" value="2">
                                        <label for="segundo">2° Kinder</label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <input type="radio" id="tercero" name="grado" value="3">
                                        <label for="tercero">3° Kinder</label>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="form-row pt-1 pt-3">
                                <div class="group col-sm-6">
                                    <input type="text" name="ap-pat-alu" id="ap-pat-alu"  autocomplete="off" required><span class="barra"></span>
                                    <label for="ap-pat-alu" class="float-label" id="text-label">Apellido paterno:</label>                                    
                                </div>
                                <div class="group col-sm-6">
                                    <input type="text" name="ap-mat-alu" id="ap-mat-alu"  autocomplete="off" required><span class="barra"></span>
                                    <label for="ap-mat-alu" class="float-label" id="text-label-2">Apellido materno:</label>                                    
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="group col-sm-8">
                                    <input type="text" name="nombre-alu" id="nombre-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="nombre-alu" class="float-label" id="text-label-3">Nombre(s):</label>                                    
                                </div>
                                <div class="group col-sm-4">
                                    <input type="text" name="edad-alu" id="edad-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="edad-alu" class="float-label" id="text-label-4">Edad:</label>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="group col-12 col-sm-8">
                                    <input type="text" name="curp" id="curp" autocomplete="off" required><span class="barra"></span>
                                    <label for="curp" class="float-label" id="text-label-5">CURP:</label>                                    
                                </div>
                                <div class="form-radio col-12 col-sm-3 mt-2 mt-sm-0">
                                    <label>Género:</label>
                                    <div class="form-row pt-2 pt-sm-0 pb-sm-2 text-center" id="campo-radio-1">
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
                                        <select class="form-control form-control-sm" name="lugar-nac" id="lugar-nac">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Aguascalientes">Aguascalientes</option>
                                            <option value="Baja California">Baja California</option>
                                            <option value="Baja California Sur">Baja California Sur</option>
                                            <option value="CDMX">CDMX</option>
                                            <option value="Campeche">Campeche</option>
                                            <option value="Coahuila">Coahuila</option>
                                            <option value="Colima">Colima</option>
                                            <option value="Chiapas">Chiapas</option>
                                            <option value="Chihuahua">Chihuahua</option>
                                            <option value="Durango">Durango</option>
                                            <option value="Guanajuato">Guanajuato</option>
                                            <option value="Guerrero">Guerrero</option>
                                            <option value="Hidalgo">Hidalgo</option>
                                            <option value="Jalisco">Jalisco</option>
                                            <option value="Estado de Mexico">Estado de México</option>
                                            <option value="Michoacán">Michoacán</option>
                                            <option value="Morelos">Morelos</option>
                                            <option value="Nayarit">Nayarit</option>
                                            <option value="Nuevo León">Nuevo León</option>
                                            <option value="Oaxaca">Oaxaca</option>
                                            <option value="Puebla">Puebla</option>
                                            <option value="Queretaro">Querétaro</option>
                                            <option value="Quintana Roo">Quintana Roo</option>
                                            <option value="San Luis Potosí">San Luis Potosí</option>
                                            <option value="Sinaloa">Sinaloa</option>
                                            <option value="Sonora">Sonora</option>
                                            <option value="Tabasco">Tabasco</option>
                                            <option value="Tamaulipas">Tamaulipas</option>                                            
                                            <option value="Tlaxcala">Tlaxcala</option>
                                            <option value="	Veracruz">Veracruz</option>
                                            <option value="Yucatán">Yucatán</option>
                                            <option value="Zacatecas">Zacatecas</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="group col-12 col-sm-5 col-lg-4 form-line">
                                    <input type="text" name="religion" id="religion" autocomplete="off" required><span class="barra"></span>
                                    <label for="religion" class="float-label" id="text-label-6">Religion:</label>                                    
                                </div>
                                <div class="group col-12 col-sm-4 col-lg-3 ml-sm-1 ml-lg-0">
                                    <input type="text" name="tipo-s" id="tipo-sangre" autocomplete="off" required><span class="barra"></span>
                                    <label for="tipo-s" class="float-label" id="text-label-7">Tipo de sangre:</label>                                    
                                </div>
                            </div>
                            <p class="p-label">Domicilio particular:</p>
                            <div class="form-row mt-2">
                                <div class="group col-12 col-sm-7 col-md-6">
                                    <input type="text" name="calle-alu" id="calle-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="calle-alu" class="float-label" id="text-label-8">Calle:</label>                                    
                                </div>
                                <div class="group col-12 col-sm-5 col-md-3">
                                    <input type="text" name="num-int-alu" id="num-int-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="num-int-alu" class="float-label" id="text-label-9">No. interior:</label>                                 
                                </div>
                                <div class="group col-12 col-sm-5 col-md-3">
                                    <input type="text" name="num-ext-alu" id="num-ext-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="num-ext-alu" class="float-label" id="text-label-10">No. exterior:</label>                                   
                                </div>
                            </div>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-7">
                                    <input type="text" name="colonia-alu" id="colonia-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="colonia-alu" class="float-label" id="text-label-11">Colonia:</label>                                    
                                </div>
                                <div class="group col-12 col-sm-5">
                                    <input type="text" name="alcaldia-alu" id="alcaldia-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="alcaldia-alu" class="float-label" id="text-label-12">Alcaldía o municipio:</label>                                   
                                </div>
                            </div>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-8">
                                    <input type="text" name="entidad-alu" id="entidad-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="entidad-alu" class="float-label" id="text-label-13">Entidad federativa:</label>
                                    <div id="error-enti-alu"></div>
                                </div>
                                <div class="group col-12 col-sm-4">
                                    <input type="text" name="cp-alu" id="cp-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="cp-alu" class="float-label" id="text-label-14">Código Postal:</label>
                                    <div id="error-cp-alu"></div>
                                </div>
                            </div>
                            <div class="form-row mt-md-3">
                                <div class="col-12 col-md-6 col-lg-5 mt-2 mt-sm-0">
                                    <label>¿Estuvo inscrito en otra escuela? </label>
                                    <div class="form-row pt-2 pt-sm-0 pb-sm-2 text-center" id="campo-radio-2">
                                        <div class="col-6">
                                            <input type="radio" id="si-esc-proc" name="esc-proc" value="si">
                                            <label for="si-esc-proc">Si</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="radio" id="no-esc-proc" name="esc-proc" value="no">
                                            <label for="no-esc-proc">No</label>
                                        </div>                                        
                                    </div>                                 
                                </div>
                                <div class="group col-12 col-md-6 col-lg-7">
                                    <input type="text" name="esc-procedencia" id="esc-procedencia" autocomplete="off" required><span class="barra"></span>
                                    <label for="esc-procedencia" class="float-label" id="text-label-15">Escuela de procedencia:</label>
                                </div>
                            </div>

                            <h5 class="py-3"><i class="fas fa-caret-right"></i>&nbsp;&nbsp;Datos del padre, madre o tutor</h5>

                            <div class="form-row mt-1 mt-md-3">
                                <div class="group col-12 col-sm-6">
                                    <input type="text" name="ap-pat-tutor" id="ap-pat-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="ap-pat-tutor" class="float-label" id="text-label-16">Apellido paterno:</label>
                                </div>
                                <div class="group col-12 col-sm-6">
                                    <input type="text" name="ap-mat-tutor" id="ap-mat-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="ap-mat-tutor" class="float-label" id="text-label-17">Apellido materno:</label>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="group col-12 col-sm-8">
                                    <input type="text" name="nombre-tutor" id="nombre-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="nombre-tutor" class="float-label" id="text-label-18">Nombre(s):</label>
                                </div>
                                <div class="group col-12 col-sm-4">
                                    <input type="text" name="edad-tutor" id="edad-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="edad-tutor" class="float-label" id="text-label-19">Edad:</label>
                                </div>
                            </div>
                            <div class="form-row mt-2 mt-md-3">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group ml-1">
                                        <label for="grado-estudio" class="">Último grado de estudios:</label>
                                        <select class="form-control form-control-sm" id="grado-estudio">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Ninguno">Ninguno</option>
                                            <option value="Preescolar">Preescolar</option>
                                            <option value="Primaria">Primaria</option>
                                            <option value="Secundaria">Secundaria</option>
                                            <option value="Preparatoria o bachillerato">Preparatoria o bachillerato</option>
                                            <option value="Carrera tecnica">Carrera técnica</option>
                                            <option value="Licenciatura">Licenciatura</option>
                                            <option value="Maestría o Doctorado">Maestría o Doctorado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="group col-12 col-sm-6">
                                    <input type="text" name="ocupacion" id="ocupacion" required><span class="barra"></span>
                                    <label for="ocupacion" class="float-label" id="text-label-20">Ocupación:</label>
                                </div>
                            </div>
                            <p class="p-label">Domicilio particular:</p>
                            <div class="form-row">
                                <div class="group col-12 col-sm-7 col-md-6">
                                    <input type="text" name="calle-tutor" id="calle-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="calle-tutor" class="float-label" id="text-label-21">Calle:</label>
                                </div>
                                <div class="group col-12 col-sm-5 col-md-3">
                                    <input type="text" name="num-int-tutor" id="num-int-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="num-int-tutor" class="float-label" id="text-label-22">No. interior:</label>
                                </div>
                                <div class="group col-12 col-sm-5 col-md-3">
                                    <input type="text" name="num-ext-tutor" id="num-ext-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="num-ext-tutor" class="float-label" id="text-label-23">No. exterior:</label>
                                </div>
                            </div>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-7">
                                    <input type="text" name="colonia-tutor" id="colonia-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="colonia-tutor" class="float-label" id="text-label-24">Colonia:</label>
                                </div>
                                <div class="group col-12 col-sm-5">
                                    <input type="text" name="alcaldia-tutor" id="alcaldia-tutor" required><span class="barra"></span>
                                    <label for="alcaldia-tutor" class="float-label" id="text-label-25">Alcaldía o municipio:</label>
                                </div>
                            </div>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-8">
                                    <input type="text" name="entidad-tutor" id="entidad-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="entidad-tutor" class="float-label" id="text-label-26">Entidad federativa:</label>
                                </div>
                                <div class="group col-12 col-sm-4">
                                    <input type="text" name="cp-tutor" id="cp-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="cp-tutor" class="float-label" id="text-label-27">Código Postal:</label>
                                </div>
                            </div>
                            <p class="p-label">Datos de contacto:</p>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-6 col-md-4">
                                    <input type="text" name="tel-fijo" id="tel-fijo" autocomplete="off" required><span class="barra"></span>
                                    <label for="tel-fijo" class="float-label" id="text-label-28">Teléfono Fijo:</label>
                                </div>
                                <div class="group col-12 col-sm-6 col-md-4">
                                    <input type="text" name="tel-cel" id="tel-cel" autocomplete="off" required><span class="barra"></span>
                                    <label for="tel-cel" class="float-label" id="text-label-29">Teléfono Celular:</label>
                                </div>
                                <div class="group col-12 col-sm-6 col-md-4">
                                    <input type="text" name="tel-ofi" id="tel-ofi" autocomplete="off" required><span class="barra"></span>
                                    <label for="tel-ofi" class="float-label" id="text-label-30">Teléfono de Oficina:</label>
                                </div>
                                <div class="group col-12 col-md-8">
                                    <input type="text" name="email-tutor" id="email-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="email-tutor" class="float-label" id="text-label-31">Correo Electrónico:</label>
                                </div>
                            </div>
                            <div class="f1-button">
                                <button type="submit" class="btn btn-form-primary" id="btnForm" name="submit" value="enviar">Enviar ></button>
                            </div>
                        </div>                        
                    </form>
                    <div class="col-12 offset-md-1 col-md-10 text-center shadow" id="list-doc">
                        <h4 class="pb-4">Acude a nuestras instalaciones</h4>
                        <p class="p-3">
                            Una vez concluido el formulario de Pre-Registro, acude a nuestras instalaciones
                            para concluir con el proceso de inscripción presentando la documentación solicitada
                            en el siguiente documento:
                        </p>
                        <a href="<?php echo PATH; ?>pdf/Requisitos-Villa.pdf" class="link-pdf" download="documentacion_requerida.pdf">
                            <i class="far fa-file-pdf"></i>
                            <small>Da click en la imagen para descargar</small>
                        </a>
                        <div class="f1-buttons">
                            <a class="btn btn-primary" href="<?php echo PATH;?>inscripciones.php">Enviar ></a>                       
                        </div>
                    </div>    
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
    <script src="js/form-inscripcion.js"></script>
    <script>
    $(document).ready(function (){
        $('#esc-procedencia').attr('disabled', 'disabled');
    
        $('input[name="esc-proc"]').on('click', function () {
            if ($(this).val() == 'si') {
            $('#esc-procedencia').removeAttr('disabled');
            $('#esc-procedencia').focus();
            } else {
            $('#esc-procedencia').attr('disabled', 'disabled');
            }
        })

    });
    </script>
    </body>

    </html>