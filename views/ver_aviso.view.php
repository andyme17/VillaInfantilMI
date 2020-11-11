<?php require 'layouts/head.view.php'; ?> 
    <title>Gestor de contenido VillaMI | Ver aviso</title>
</head>
<?php require 'layouts/side_bar.view.php'; ?>  
                <main class="container">
                    <h3 class="mt-3 mt-xl-0 text-center">Avisos</h3>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <button type="button" class="btn btn-secondary mb-3 mb-md-4" id="btnBack"><i class="fas fa-caret-left"></i>&nbsp;&nbsp;Regresar</button>
                            <div class="cont-item shadow-lg px-2 px-sm-3">
                                <h5 class="mb-3"><?php echo $aviso['id']; ?> .- Aviso</h5>
                                <img src="<?php echo PATH; ?>img/<?php echo $aviso['thumb']; ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <?php require 'layouts/scripts.view.php'; ?>

    <!-- Custom javascript files -->
    <script src="<?php echo PATH;?>js/side-bar.js"></script>
    <script>
        document.getElementById("btnBack").addEventListener('click', function() {
            location.href = "avisos.php";
        });
    </script>
</body>

</html>