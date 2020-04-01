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
            margin: 15px 0;
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

        .datos-nombre {
            border: 1px solid #363535;
            border-collapse: collapse;
        }

        .datos-nombre td {
            border: 1px solid #363535;
            text-align: center;
            padding: 5px;
            width: 210px;
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

        .w-380 {
            width: 380px;
        }

        .w-500 {
            width: 480px;
        }

        .campo {
            background-color: #f5d787;
            border: 1px solid #363535;
            text-align: center;
        }

        .salto-1 {
            background-color: #17a2b8;
            height: 50px;
        }

        .salto-2 {
            background-color: #f5d787;
            height: 20px;
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

    <?php var_dump($_POST); ?>

    <h2>SOLICITUD DE PRE-INSCRIPCIÓN</h2>

    <div class="container">
        <h4>Datos del alumno</h4>
        <div class="separador"></div>

        <table class="grado my-15">
            <tr>
                <td class="text-left">Inscripción a:</td>
                <td class="w-10"></td>
                <td>1° </td>
                <td class="w-20 campo">X</td>
                <td>2° Kinder</td>
                <td class="w-20 campo">X</td>
                <td>3° Kinder</td>
                <td class="w-20 campo">X</td>
            </tr>
        </table>

        <table class="datos-nombre my-15">
            <tr>
                <td>hola</td>
                <td>hola</td>
                <td>hola</td>
            </tr>
            <tr class="campo">
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Nombre(s)</td>
            </tr>
        </table>

        <table class="datos my-15">
            <tr>
                <td class="text-left">CURP:</td>
                <td class="campo w-180">VEGA780615HDFLML08</td>
                <td class="w-20"></td>
                <td>Edad:</td>
                <td class="campo w-40">19</td>
                <td class="w-1"></td>
                <td>Género:</td>
                <td class="w-15">F</td>
                <td class="campo w-15">X</td>
                <td class="w-15">M</td>
                <td class="campo w-15">X</td>
            </tr>
        </table>

        <table class="datos-2 my-15">
            <tr>
                <td>Lugar de nacimiento:</td>
                <td class="campo w-480">svaiyfbasu</td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td class="w-95">Tipo de sangre:</td>
                <td class="w-150 campo">AB positivo</td>
                <td class="w-25"></td>
                <td class="w-40">Religión:</td>
                <td class="w-150 campo">Musulmana</td>
            </tr>
        </table>

        <p class="p-10">Domicilio particular</p>

        <table class="datos-3 my-15">
            <tr>
                <td>Calle:</td>
                <td class="w-250 campo">asuiabsvaiyfbasu</td>
                <td>No. int:</td>
                <td class="w-60 campo">dsdsdubd</td>
                <td>No. ext:</td>
                <td class="w-60 campo">123556</td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Colonia:</td>
                <td class="w-200 campo">Soyaniquilpan de Juárez</td>
                <td>Alcaldía o Municipio:</td>
                <td class="w-180 campo">Soyaniquilpan de Juárez</td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Entidad Fedarativa:</td>
                <td class="w-250 campo">Soyaniquilpan de Juárez</td>
                <td>Código Postal: </td>
                <td class="w-60 campo">1520</td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>¿Ha estado inscrito en otra escuela?</td>
                <td class="w-10"></td>
                <td>No</td>
                <td class="campo w-20">X</td>
                <td class="w-10"></td>
                <td>Si</td>
                <td class="campo w-20">X</td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Nombre de la escuela de procedencia:</td>
                <td class="campo w-380">svaiyfbasu</td>
            </tr>
        </table>

        <h4 class="mt-40">Datos de la madre, padre o tutor</h4>
        <div class="separador"></div>

        <table class="datos-3 my-15">
            <tr>
                <td>Nombre del tutor:</td>
                <td class="campo w-380">sdnskandklsamfklsa smadklsam</td>
                <td>Edad:</td>
                <td class="campo w-40">15</td>
            </tr>
        </table>
    </div>
    <div class="container mt-40">
        <table class="datos-3 my-15">
            <tr>
                <td>Último grado de estudios</td>
                <td class="w-150 campo">Preparatoria o bachillerato</td>
                <td>Ocupación:</td>
                <td class="w-180 campo">Soyaniquilpan de Juárez</td>
            </tr>
        </table>
        <p class="p-10">Domicilio particular</p>

        <table class="datos-3 my-15">
            <tr>
                <td>Calle:</td>
                <td class="w-250 campo">asuiabsvaiyfbasu</td>
                <td>No. int:</td>
                <td class="w-60 campo">dsdsdubd</td>
                <td>No. ext:</td>
                <td class="w-60 campo">123556</td>
            </tr>
        </table>
        <table class="datos-3 my-15">
            <tr>
                <td>Colonia:</td>
                <td class="w-210 campo">Soyaniquilpan de Juárez</td>
                <td>Alcaldía o Municipio:</td>
                <td class="w-180 campo">Soyaniquilpan de Juárez</td>
            </tr>
        </table>

        <table class="datos-3 my-15">
            <tr>
                <td>Entidad Fedarativa:</td>
                <td class="w-250 campo">Soyaniquilpan de Juárez</td>
                <td>Código Postal:</td>
                <td class="w-60 campo">1520</td>
            </tr>
        </table>

        <p class="p-10">Datos de contacto</p>

        <table class="datos-3 my-15">
            <tr>
                <td>Teléfono fijo:</td>
                <td class="w-95 campo">1234567945612</td>
                <td class="w-1"></td>
                <td>Teléfono celular:</td>
                <td class="w-95 campo">1234567945612</td>
            </tr>
        </table>
        <table class="datos-3 my-15">
            <tr>
                <td>Tel. oficina:</td>
                <td class="w-95 campo">1234567945612</td>
                <td>Correo electrónico</td>
                <td class="w-250 campo">andy_me17133781@hotmail.com</td>
            </tr>
        </table>


    </div>




</body>

</html>