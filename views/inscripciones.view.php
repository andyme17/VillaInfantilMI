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
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="f1 shadow" id="form-inscrip" novalidate>
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
                                <div id="error-grado"></div>
                            </div>
                            <div class="form-row pt-1 pt-3">
                                <div class="group col-sm-6">
                                    <input type="text" name="ap-pat-alu" id="ap-pat-alu" autocomplete="off" title="Introduce el apelido paterno" required><span class="barra"></span>
                                    <label for="ap-pat-alu" class="float-label">Apellido paterno:</label>
                                    <div id="error-ape-1"></div>                                                                 
                                </div>
                                <div class="group col-sm-6">
                                    <input type="text" name="ap-mat-alu" id="ap-mat-alu"  autocomplete="off" title="Introduce el apellido materno" required><span class="barra"></span>
                                    <label for="ap-mat-alu" class="float-label">Apellido materno:</label> 
                                    <div id="error-ape-2"></div>                                    
                                </div>
                            </div>               
                            <div class="form-row mt-2">
                                <div class="group col-sm-8">
                                    <input type="text" name="nombre-alu" id="nombre-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="nombre-alu" class="float-label">Nombre(s):</label>
                                    <div id="error-nombre-1"></div>                                    
                                </div>
                                <div class="group col-sm-4">
                                    <input type="text" name="edad-alu" id="edad-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="edad-alu" class="float-label">Edad:</label>
                                    <div id="error-edad-1"></div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="group col-12 col-sm-8">
                                    <input type="text" name="curp" id="curp" autocomplete="off" required><span class="barra"></span>
                                    <label for="curp" class="float-label">CURP:</label>   
                                    <div id="error-curp"></div>                                 
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
                                    <div id="error-genero"></div>                                  
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
                                        <div id="error-lugar"></div>                                     
                                    </div>
                                </div>
                                <div class="group col-12 col-sm-5 col-lg-4 form-line">
                                    <input type="text" name="religion" id="religion" autocomplete="off" required><span class="barra"></span>
                                    <label for="religion" class="float-label">Religion:</label>
                                    <div id="error-religion"></div>                                    
                                </div>
                                <div class="group col-12 col-sm-4 col-lg-3 ml-sm-1 ml-lg-0">
                                    <input type="text" name="tipo-s" id="tipo-s" autocomplete="off" required><span class="barra"></span>
                                    <label for="tipo-s" class="float-label">Tipo de sangre:</label>  
                                    <div id="error-tipo"></div>                                  
                                </div>
                            </div>
                            
                            <p class="p-label">Domicilio particular:</p>
                            <div class="form-row mt-2">
                                <div class="group col-12 col-sm-7 col-md-6">
                                    <input type="text" name="calle-alu" id="calle-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="calle-alu" class="float-label">Calle:</label>
                                    <div id="error-calle-1"></div>                                    
                                </div>
                                <div class="group col-12 col-sm-5 col-md-3">
                                    <input type="text" name="num-int-alu" id="num-int-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="num-int-alu" class="float-label">No. interior:</label>
                                    <div id="error-int-1"></div>                                  
                                </div>
                                <div class="group col-12 col-sm-5 col-md-3">
                                    <input type="text" name="num-ext-alu" id="num-ext-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="num-ext-alu" class="float-label">No. exterior:</label>
                                    <div id="error-ext-1"></div>                                    
                                </div>
                            </div>                            
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-7">
                                    <input type="text" name="colonia-alu" id="colonia-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="colonia-alu" class="float-label">Colonia:</label>
                                    <div id="error-colonia-1"></div>                                    
                                </div>
                                <div class="group col-12 col-sm-5">
                                    <input type="text" name="alcaldia-alu" id="alcaldia-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="alcaldia-alu" class="float-label">Alcaldía o municipio:</label> 
                                    <div id="error-alca-1"></div>                                  
                                </div>
                            </div>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-8">
                                    <input type="text" name="entidad-alu" id="entidad-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="entidad-alu" class="float-label">Entidad federativa:</label>
                                    <div id="error-enti-1"></div>
                                </div>
                                <div class="group col-12 col-sm-4">
                                    <input type="text" name="cp-alu" id="cp-alu" autocomplete="off" required><span class="barra"></span>
                                    <label for="cp-alu" class="float-label">Código Postal:</label>
                                    <div id="error-cp-1"></div>
                                </div>
                            </div>
                            <div class="form-row mt-md-3">
                                <div class="col-12 col-md-6 col-lg-5 mt-2 mt-sm-0">
                                    <label>¿Estuvo inscrito en otra escuela? </label>
                                    <div class="form-row pt-2 pt-sm-0 pb-sm-2 text-center" id="campo-radio-2">
                                        <div class="col-6">
                                            <input type="radio" id="si" name="esc-proc" value="si">
                                            <label for="si">Si</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="radio" id="no" name="esc-proc" value="no">
                                            <label for="no">No</label>
                                        </div>                                        
                                    </div>    
                                    <div id="error-esc"></div>                             
                                </div>
                                <div class="group col-12 col-md-6 col-lg-7">
                                    <input type="text" name="esc-procedencia" id="esc-procedencia" autocomplete="off" required><span class="barra"></span>
                                    <label for="esc-procedencia" class="float-label">Escuela de procedencia:</label>
                                    <div id="error-proc"></div>
                                </div>
                            </div>
                          
                            <h5 class="py-3"><i class="fas fa-caret-right"></i>&nbsp;&nbsp;Datos del padre, madre o tutor</h5>

                            <div class="form-row mt-1 mt-md-3">
                                <div class="group col-12 col-sm-6">
                                    <input type="text" name="ap-pat-tutor" id="ap-pat-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="ap-pat-tutor" class="float-label">Apellido paterno:</label>
                                    <div id="error-ape-3"></div> 
                                </div>
                                <div class="group col-12 col-sm-6">
                                    <input type="text" name="ap-mat-tutor" id="ap-mat-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="ap-mat-tutor" class="float-label">Apellido materno:</label>
                                    <div id="error-ape-4"></div> 
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="group col-12 col-sm-8">
                                    <input type="text" name="nombre-tutor" id="nombre-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="nombre-tutor" class="float-label">Nombre(s):</label>
                                    <div id="error-nombre-2"></div>
                                </div>
                                <div class="group col-12 col-sm-4">
                                    <input type="text" name="edad-tutor" id="edad-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="edad-tutor" class="float-label">Edad:</label>
                                    <div id="error-edad-2"></div>
                                </div>
                            </div>                                    
                            <div class="form-row mt-2 mt-md-3">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group ml-1">
                                        <label for="grado-estudio" class="">Último grado de estudios:</label>
                                        <select class="form-control form-control-sm"  name="grado-estudio" id="grado-estudio">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Ninguno">Ninguno</option>
                                            <option value="Preescolar">Preescolar</option>
                                            <option value="Primaria">Primaria</option>
                                            <option value="Secundaria">Secundaria</option>
                                            <option value="Preparatoria o Bachillerato">Preparatoria o Bachillerato</option>
                                            <option value="Carrera tecnica">Carrera técnica</option>
                                            <option value="Licenciatura">Licenciatura</option>
                                            <option value="Maestria o Doctorado">Maestría o Doctorado</option>
                                        </select>
                                        <div id="error-estudio"></div>  
                                    </div>
                                </div>
                                <div class="group col-12 col-sm-6">
                                    <input type="text" name="ocupacion" id="ocupacion" autocomplete="off" required><span class="barra"></span>
                                    <label for="ocupacion" class="float-label">Ocupación:</label>
                                    <div id="error-ocupacion"></div>
                                </div>
                            </div> 
                            <p class="p-label">Domicilio particular:</p>
                            <div class="form-row">
                                <div class="group col-12 col-sm-7 col-md-6">
                                    <input type="text" name="calle-tutor" id="calle-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="calle-tutor" class="float-label">Calle:</label>
                                    <div id="error-calle-2"></div> 
                                </div>
                                <div class="group col-12 col-sm-5 col-md-3">
                                    <input type="text" name="num-int-tutor" id="num-int-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="num-int-tutor" class="float-label">No. interior:</label>
                                    <div id="error-int-2"></div> 
                                </div>
                                <div class="group col-12 col-sm-5 col-md-3">
                                    <input type="text" name="num-ext-tutor" id="num-ext-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="num-ext-tutor" class="float-label">No. exterior:</label>
                                    <div id="error-ext-2"></div>   
                                </div>
                            </div>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-7">
                                    <input type="text" name="colonia-tutor" id="colonia-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="colonia-tutor" class="float-label">Colonia:</label>
                                    <div id="error-colonia-2"></div>   
                                </div>
                                <div class="group col-12 col-sm-5">
                                    <input type="text" name="alcaldia-tutor" id="alcaldia-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="alcaldia-tutor" class="float-label">Alcaldía o municipio:</label>
                                    <div id="error-alca-2"></div>
                                </div>
                            </div>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-8">
                                    <input type="text" name="entidad-tutor" id="entidad-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="entidad-tutor" class="float-label">Entidad federativa:</label>
                                    <div id="error-enti-2"></div>
                                </div>
                                <div class="group col-12 col-sm-4">
                                    <input type="text" name="cp-tutor" id="cp-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="cp-tutor" class="float-label">Código Postal:</label>
                                    <div id="error-cp-2"></div>
                                </div>
                            </div>
                            <p class="p-label">Datos de contacto:</p>
                            <div class="form-row mt-md-2">
                                <div class="group col-12 col-sm-6 col-md-4">
                                    <input type="text" name="tel-fijo" id="tel-fijo" autocomplete="off" required><span class="barra"></span>
                                    <label for="tel-fijo" class="float-label">Teléfono Fijo:</label>
                                    <div id="error-tel-1"></div>
                                </div>
                                <div class="group col-12 col-sm-6 col-md-4">
                                    <input type="text" name="tel-cel" id="tel-cel" autocomplete="off" required><span class="barra"></span>
                                    <label for="tel-cel" class="float-label">Teléfono Celular:</label>
                                    <div id="error-tel-2"></div>
                                </div>
                                <div class="group col-12 col-sm-6 col-md-4">
                                    <input type="text" name="tel-ofi" id="tel-ofi" autocomplete="off" required><span class="barra"></span>
                                    <label for="tel-ofi" class="float-label">Teléfono de Oficina:</label>
                                    <div id="error-tel-3"></div>
                                </div>
                                <div class="group col-12 col-md-8">
                                    <input type="text" name="email-tutor" id="email-tutor" autocomplete="off" required><span class="barra"></span>
                                    <label for="email-tutor" class="float-label">Correo Electrónico:</label>
                                    <div id="error-email"></div>
                                </div>
                            </div>
                            <p id="mensajeError"></p>
                            <div class="f1-button">
                                <button type="submit" class="btn btn-primary" id="btnForm" name="submit" value="enviar">Enviar ></button>
                            </div>
                        </div>                        
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
    <script src="js/form-inscripcion.js"></script>
    </body>

    </html>