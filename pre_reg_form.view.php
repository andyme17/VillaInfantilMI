<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato de Pre-Inscripcion</title>
    <style>
        html {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .encabezado {
            width: 100%;
            position: relative;
        }

        img {
            width: 115px;
            position: absolute;
            top: 10;
            left: 30;
        }

        .foto {
            border: 1px solid #363535;
            width: 105px;
            height: 115px;
            position: absolute;
            top: 10;
            right: 30;
            text-align: center;
        }

        .foto p {
            margin: 35px 10px;
            line-height: 2.5;
            font-size: 12px;
        }

        h2 {
            color: #03224e;
            margin: 20px 0 30px;
            text-align: center;
        }

        h4 {
            color: #03224e;
        }

        .separador {
            background-color: #17a2b8;
            height: 2.5px;
            margin: 3px 0;
        }


        .container {
            margin-left: 30px;
            margin-right: 30px;
        }

        .my-15 {
            margin: 13px 0;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .p-10 {
            padding: 10px;
            font-weight: bold;
        }

        .grado td {
            text-align: right;
            width: 100px;
            padding: 5px;
        }

        .text-left {
            text-align: left;
        }

        .fuente-campo{
            font-size: 12px;
            padding: 5px 0;
        }

        .datos td {
            text-align: right;
            padding: 5px;
            width: 35px;
        }

        .datos-2 td {
            text-align: left;
            padding: 5px 8px;
            width: 125px;
        }

        .datos-3 td {
            padding: 5px 10px;
            text-align: left;
        }

        .w-5 {
            width: 5px;
        }
        
        .w-15 {
            width: 15px;
        }

        .w-10 {
            width: 10px;
        }

        .w-20 {
            width: 20px;
        }

        .w-25 {
            width: 25px;
        }

        .w-40 {
            width: 40px;
        }

        .w-60 {
            width: 60px;
        }

        .w-95 {
            width: 95px;
        }

        .w-150 {
            width: 150px;
        }

        .w-180 {
            width: 180px;
        }

        .w-250 {
            width: 250px;
        }

        .w-200 {
            width: 200px;
        }

        .w-210 {
            width: 210px;
        }

        .w-280 {
            width: 280px;
        }

        .w-380 {
            width: 380px;
        }

        .w-480 {
            width: 480px;
        }

        .campo {
            background-color: #f5d787;
            border: 1px solid #363535;
            text-align: center;
        }
       
    </style>
</head>

<body>
    <div class="encabezado">
        <img src="img/logo-kinder.png" alt="Logo de la escuela">
        <div class="foto">
            <p>FOTO DEL ALUMNO</p>
        </div>
    </div>

    <h2>SOLICITUD DE PRE-INSCRIPCIÓN</h2>

    <div class="container">
        <h4>Datos del alumno</h4>
        <div class="separador"></div>

        <table class="grado my-15">
            <tr>
                <td class="text-left">Inscripción a:</td>
                <td class="w-10"></td>
                <td>1° </td>
                <td class="w-20 campo"><?php if (($grado == 1)) echo 'X'; ?></td>
                <td>2° Kinder</td>
                <td class="w-20 campo"><?php if (($grado == 2)) echo 'X'; ?></td>
                <td>3° Kinder</td>
                <td class="w-20 campo"><?php if (($grado == 3)) echo 'X'; ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Apellido paterno:</td>
                <td class="w-180 campo"><?php if (($ap_pat_alu)) echo strtoupper($ap_pat_alu); ?></td>
                <td>Apellido materno:</td>
                <td class="w-180 campo"><?php if (($ap_mat_alu)) echo strtoupper($ap_mat_alu); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Nombre:</td>
                <td class="campo w-380"><?php if (($lugar_nac)) echo strtoupper($nombre_alu); ?></td>
            </tr>
        </table>

        <table class="datos my-15">
            <tr>
                <td class="text-left">CURP:</td>
                <td class="campo w-180"><?php if (($curp)) echo strtoupper($curp); ?></td>
                <td class="w-20"></td>
                <td>Edad:</td>
                <td class="campo w-40"><?php if (($edad_alu)) echo $edad_alu; ?></td>
                <td class="w-1"></td>
                <td>Género:</td>
                <td class="w-15">F</td>
                <td class="campo w-15"><?php if (($genero == 'f')) echo 'X'; ?></td>
                <td class="w-15">M</td>
                <td class="campo w-15"><?php if (($genero == 'm')) echo 'X'; ?></td>
            </tr>
        </table>

        <table class="datos-2 my-15">
            <tr>
                <td>Lugar de nacimiento:</td>
                <td class="campo w-280"><?php if (($lugar_nac)) echo strtoupper($lugar_nac); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Tipo de sangre:</td>
                <td class="w-180 campo"><?php if (($tipo_s)) echo strtoupper($tipo_s); ?></td>
                <td class="w-10"></td>
                <td class="w-40">Religión:</td>
                <td class="w-180 campo"><?php if (($religion)) echo strtoupper($religion); ?></td>
            </tr>
        </table>

        <p class="p-10">Domicilio particular</p>

        <table class="datos-3 my-15">
            <tr>
                <td>Calle:</td>
                <td class="campo w-380"><?php if (($calle_alu)) echo strtoupper($calle_alu); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>No. int:</td>
                <td class="w-210 campo"><?php if (($num_int_alu)) echo strtoupper($num_int_alu); ?></td>
                <td class="w-10"></td>
                <td>No. ext:</td>
                <td class="w-210 campo"><?php if (($num_ext_alu)) echo strtoupper($num_ext_alu); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Colonia:</td>
                <td class="w-210 campo"><?php if (($colonia_alu)) echo strtoupper($colonia_alu); ?></td>
                <td>Alcaldía o Municipio:</td>
                <td class="w-180 campo"><?php if (($alcaldia_alu)) echo strtoupper($alcaldia_alu); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Entidad Fedarativa:</td>
                <td class="w-250 campo"><?php if (($entidad_alu)) echo strtoupper($entidad_alu); ?></td>
                <td class="w-5"></td>
                <td>Código Postal: </td>
                <td class="w-60 campo"><?php if (($cp_alu)) echo $cp_alu; ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>¿Ha estado inscrito en otra escuela?</td>
                <td class="w-10"></td>
                <td>Si</td>
                <td class="campo w-20"><?php if (($esc_proc == 'si')) echo 'X'; ?></td>
                <td class="w-10"></td>
                <td>No</td>
                <td class="campo w-20"><?php if (($esc_proc == 'no')) echo 'X'; ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Nombre de la escuela de procedencia:</td>
                <td class="campo w-380"><?php if (($esc_procedencia)) echo strtoupper($esc_procedencia); ?></td>
            </tr>
        </table>
    </div>

    <div class="container mt-40">
        <h4>Datos de la madre, padre o tutor</h4>
        <div class="separador"></div>

        <table class="datos-3 my-15">
            <tr>
                <td>Apellido paterno:</td>
                <td class="w-180 campo"><?php if (($ap_pat_tutor)) echo strtoupper($ap_pat_tutor); ?></td>
                <td>Apellido materno:</td>
                <td class="w-180 campo"><?php if (($ap_mat_tutor)) echo strtoupper($ap_mat_tutor); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Nombre:</td>
                <td class="campo w-380"><?php if (($nombre_tutor)) echo strtoupper($nombre_tutor); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Edad:</td>
                <td class="w-40 campo"><?php if (($edad_tutor)) echo $edad_tutor; ?></td>
                <td class="w-15"></td>
                <td>Último grado de estudios</td>
                <td class="w-280 campo"><?php if (($grado_estudio)) echo strtoupper($grado_estudio); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Ocupación:</td>
                <td class="w-250 campo"><?php if (($ocupacion)) echo strtoupper($ocupacion); ?></td>
            </tr>
        </table>

        <p class="p-10">Domicilio particular</p>

        <table class="datos-3 my-15">
            <tr>
                <td>No. int:</td>
                <td class="w-210 campo"><?php if (($num_int_tutor)) echo strtoupper($num_int_tutor); ?></td>
                <td class="w-10"></td>
                <td>No. ext:</td>
                <td class="w-210 campo"><?php if (($num_ext_tutor)) echo strtoupper($num_ext_tutor); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Colonia:</td>
                <td class="w-210 campo"><?php if (($colonia_tutor)) echo strtoupper($colonia_tutor); ?></td>
                <td>Alcaldía o Municipio:</td>
                <td class="w-180 campo"><?php if (($alcaldia_tutor)) echo strtoupper($alcaldia_tutor); ?></td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Entidad Fedarativa:</td>
                <td class="w-250 campo"><?php if (($entidad_tutor)) echo strtoupper($entidad_tutor); ?></td>
                <td class="w-5"></td>
                <td>Código Postal: </td>
                <td class="w-60 campo"><?php if (($cp_tutor)) echo $cp_tutor; ?></td>
            </tr>
        </table>
        
        <p class="p-10">Datos de contacto</p>

        <table class="datos-3 my-15">
            <tr>
                <td>Teléfono fijo:</td>
                <td class="w-95 campo"><?php if (($tel_fijo)) echo ($tel_fijo); ?></td>
                <td class="w-1"></td>
                <td>Teléfono celular:</td>
                <td class="w-95 campo"><?php if (($tel_cel)) echo ($tel_cel); ?></td>
            </tr>
        </table>
        <table class="datos-3 my-15">
            <tr>
                <td>Teléfono oficina:</td>
                <td class="w-95 campo"><?php if (($tel_ofi)) echo ($tel_ofi); ?></td>
                <td>Correo electrónico</td>
                <td class="w-250 campo"><?php if (($email_tutor)) echo strtolower($email_tutor); ?></td>
            </tr>
        </table>
    </div>
</body>

</html>