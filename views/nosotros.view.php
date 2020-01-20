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

    <section class="sec-history py-4">
        <div class="content-history container mx-auto text-center">
            <div class="header-history mx-auto">
                <h2 class="">¿Quiénes Somos?</h2>
                <hr>
            </div>
            <p class="text-history">
                Villa Infantil María Isabel somos un equipo de profesionales especializados en educación infantil, 
                que tiene como <span>MISIÓN</span> lograr que los niños de edad preescolar desarrollen sus capacidades de forma
                integral, a fin de alcanzar un nivel óptimo de convivencia con su entorno y en su vida futura.
            </p>
        </div>
    </section>
    <section class="sec-mi-vi py-">
        <div class="content-mi-vi container">
            <h3>Visión</h3>
            <p>
                Ser una escuela con la mejor calidad, personal altamente calificado y la infraestructura adecuada, 
                que permita brindar a los niños y niñas de edad preescolar las herramientas necesarias para desarrollar
                sus capacidades intelectuales, de autonomía y valores universales como el respeto, la responsabilidad,
                el bien común y la honestidad, siendo reconocida en la comunidad donde se desempeña.
            </p>           
        </div>
    </section>
    <main class="sec-nosotros">
        <h2>Nuestro Equipo</h2>
        <div class="content-nosotros container">
            <img src="<?php echo PATH?>img/personal_jrf.jpg" alt="Imagen del personal del kinder">
            <div class="text-nosotros">
                <p>
                    El Jardín de Niños Villa Infantil María Isabel se encuentra
                    en un continuo proceso de mejora, tanto en sus instalaciones como en sus
                    planes de estudio y mecánicas de trabajo, esto incluye por supuesto a 
                    ustedes padres de familia. En la búsqueda de mejorar su experiencia con
                    nosotros le invitamos a manifestar sus observaciones y sugerencias a 
                    través de nuestra página.
                    (falta por definir)
                </p>
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