<?php
   /*  require __DIR__.'/vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf; */

    function limpiarDatos($dato){
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);

        return $dato;
    }

    
    #false por defecto, nos evitará 5 líneas de código innecesarias
    $respuesta=false;
    
    if(isset($_POST['submit'])){

        $datos=array(
            'grado' => limpiarDatos($_POST['grado']),
            'ap_pat_alu' => limpiarDatos($_POST['ap_pat_alu']),
            'ap_mat_alu' => limpiarDatos($_POST['ap_mat_alu']),
            'nombre_alu' => limpiarDatos($_POST['nombre_alu']),
            'edad_alu' => limpiarDatos($_POST['edad_alu']),
            'curp' => limpiarDatos($_POST['curp']),
            'genero' => limpiarDatos($_POST['genero']),
            'lugar_nac' => limpiarDatos($_POST['lugar_nac']),
            'religion' => limpiarDatos($_POST['religion']),
            'tipo_sangre' => limpiarDatos($_POST['tipo_sangre']),
            'calle_alu' => limpiarDatos($_POST['calle_alu']),
            'num_int_alu' => limpiarDatos($_POST['num_int_alu']),
            'num_ext_alu' => limpiarDatos($_POST['num_ext_alu']),
            'colonia_alu' => limpiarDatos($_POST['colonia_alu']),
            'alcaldia_alu' => limpiarDatos($_POST['alcaldia_alu']),
            'entidad_alu' => limpiarDatos($_POST['entidad_alu']),
            'cp_alu' => limpiarDatos($_POST['cp_alu']),
            'esc_procedencia' => limpiarDatos($_POST['esc_procedencia']),
            'ap_pat_tutor' => limpiarDatos($_POST['ap_pat_tutor']),
            'ap_mat_tutor' => limpiarDatos($_POST['ap_mat_tutor']),
            'nombre_tutor' => limpiarDatos($_POST['nombre_tutor']),
            'edad_tutor' => limpiarDatos($_POST['edad_tutor']),
            'grado_estudios' => limpiarDatos($_POST['grado_estudios']),
            'ocupacion' => limpiarDatos($_POST['ocupacion']),
            'calle_tutor' => limpiarDatos($_POST['calle_tutor']),
            'num_int_tutor' => limpiarDatos($_POST['num_int_tutor']),
            'num_ext_tutor' => limpiarDatos($_POST['num_ext_tutor']),
            '$colonia_tutor' => limpiarDatos($_POST['colonia_tutor']),
            '$alcaldia_tutor' => limpiarDatos($_POST['alcaldia_tutor']),
            '$entidad_tutor' => limpiarDatos($_POST['entidad_tutor']),
            '$cp_tutor' => limpiarDatos($_POST['cp_tutor']),
            '$tel_fijo' => limpiarDatos($_POST['tel_fijo']),
            '$tel_cel' => limpiarDatos($_POST['tel_cel']),
            '$tel_ofi' => limpiarDatos($_POST['tel_ofi']),
            '$email_tutor' => limpiarDatos($_POST['email_tutor'])
        );
        if(count($datos) > 0){
            $respuesta = true;          
        }     
    }  

    echo json_encode(array("respuesta"=>$respuesta));