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
    <link rel="stylesheet" href="css/pgwslideshow.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require 'nav-bar.view.php'; ?>

    <section class="img-back-blue h-md-back-3 py-4">
        <div class="content-back-blue container mx-auto">
            <h2>¿Quiénes Somos?</h2>
            <hr>
            <p class="text-back-blue">
                Villa Infantil María Isabel somos un equipo de profesionales especializados en educación infantil,
                que tiene como <span>MISIÓN</span> lograr que los niños de edad preescolar desarrollen sus capacidades de forma
                integral, a fin de alcanzar un nivel óptimo de convivencia con su entorno y en su vida futura.
            </p>
        </div>
    </section>
    <section class="vision container py-4">
        <h2 class="text-center">Visión</h2>
        <hr>
        <div class="row mx-auto">
            <p class="text-vision">
                Ser una escuela con la mejor calidad, personal altamente calificado y la infraestructura adecuada,
                que permita brindar a los niños y niñas de edad preescolar las herramientas necesarias para desarrollar
                sus capacidades intelectuales, de autonomía y valores universales como el respeto, la responsabilidad,
                el bien común y la honestidad, siendo reconocida en la comunidad donde se desempeña.
            </p>
        </div>
    </section>
    <main class="img-back py-4">
        <h2 class="text-center">Nuestro Equipo</h2>
        <div class="content-nosotros container">
            <div class="img-nosotros">
                <img src="<?php echo PATH ?>img/imgp-kinder.jpg" class="img-nosotros img-fluid" alt="Imagen del personal del kinder">
            </div>
            <div class="text-nosotros">
                <p>
                    El Jardín de Niños Villa Infantil María Isabel se encuentra en un continuo
                    proceso de mejora, tanto en sus instalaciones como en sus planes de estudio
                    y mecánicas de trabajo, esto también incluye a padres de familia.
                </p>
            </div>
        </div>
        <div class="sec-admin container mx-auto pt-3 pt-md-5">
            <h3 class="text-center">Personal Administrativo</h3>
            <div class="row text-center pt-2">
                <div class="col-12 col-md-4 pb-4 pb-md-0">
                    <img src="<?php echo PATH; ?>img\imgp-directora-grnl.jpg" alt="Fotografía de personal administrativo">
                    <h5>Lic. María Isabel Rincón</h5>
                    <hr>
                    <p> Directora General</p>
                </div>
                <div class="col-12 col-md-4 pb-4 pb-md-0">
                    <img src="<?php echo PATH; ?>img\imgp-directora-admin.jpg" alt="Fotografía de personal administrativo">
                    <h5>M.B.A. Alba Selene Chávez</h5>                    
                    <hr>
                    <p> Directora Administrativa</p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="<?php echo PATH; ?>img\imgp-directora-tec.jpg" alt="Fotografía de personal administrativo">
                    <h5>Lic. Perla Susana Beltrán</h5>
                    <hr>
                    <p> Directora Técnica</p>
                </div>
            </div>
        </div>
    </main>
    <section class="sec-opinion py-4">
        <div class="container">
            <p class="mb-4">
                En la búsqueda de mejorar su experiencia con nosotros al final de cada ciclo
                escolar se realiza una encuesta para manifestar sus observaciones y sugerencias,
                de igual forma esto se puede realizar por este medio.
            </p>
            <button class="btn btn-outline-light" id="showFormOpinion">Dejar comentario o sugerencia ></button>
        </div>
    </section>
    <section class="sec-form-opinion img-back py-4">
        <form action="" class="form-opinion container">
            <div class="container mx-auto">
                <div class="group">
                    <input type="text" name="" id="" required><span class="barra"></span>
                    <label for="">Nombre completo:</label>
                </div>
                <div class="group">
                    <input type="email" name="" id="" required><span class="barra"></span>
                    <label for="">Correo electrónico:</label>
                </div>
                <div class="group">
                    <textarea name="" id="" rows="2" required></textarea><span class="barra"></span>
                    <label for="">Mensaje:</label>
                </div>
                <div class="text-md-right">
                    <button type="submit" class="btn btn-primary">Enviar comentario ></button>
                </div>
            </div>
        </form>
    </section>

    <?php require 'footer.view.php'; ?>

    <!--Archivos javascript para bootstrap -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/pgwslideshow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>