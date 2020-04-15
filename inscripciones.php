<?php
require 'admin/config.php';
require __DIR__ . '/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

function validarText($dato)
{
    $dato = trim($dato);
    $dato = quitar_tildes($dato);
    $dato = filter_var(($dato), FILTER_SANITIZE_STRING);
    return $dato;
}

function quitar_tildes($cadena)
{
    $no_permitidas = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "À", "Ã", "Ì", "Ò", "Ù", "Ã™", "Ã ", "Ã¨", "Ã¬", "Ã²", "Ã¹", "ç", "Ç", "Ã¢", "ê", "Ã®", "Ã´", "Ã»", "Ã‚", "ÃŠ", "ÃŽ", "Ã”", "Ã›", "ü", "Ã¶", "Ã–", "Ã¯", "Ã¤", "«", "Ò", "Ã", "Ã„", "Ã‹");
    $permitidas = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "n", "N", "A", "E", "I", "O", "U", "a", "e", "i", "o", "u", "c", "C", "a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "u", "o", "O", "i", "a", "e", "U", "I", "A", "E");
    $texto = str_replace($no_permitidas, $permitidas, $cadena);
    return $texto;
}

function validar($dato)
{
    $dato = trim($dato);
    $dato = htmlspecialchars($dato);
    $dato = stripslashes($dato);
    return $dato;
}

if (isset($_POST['submit'])) {
    $grado = validar($_POST['grado']);
    $ap_pat_alu = validarText($_POST['ap-pat-alu']);
    $ap_mat_alu = validarText($_POST['ap-mat-alu']);
    $nombre_alu = validarText($_POST['nombre-alu']);
    $edad_alu = validar($_POST['edad-alu']);
    $curp = validarText($_POST['curp']);
    $genero = validarText($_POST['genero']);
    $lugar_nac = validarText($_POST['lugar-nac']);
    $religion = validarText($_POST['religion']);
    $tipo_s = validarText($_POST['tipo-s']);
    $calle_alu = validarText($_POST['calle-alu']);
    $num_int_alu = validarText($_POST['num-int-alu']);
    $num_ext_alu = validarText($_POST['num-ext-alu']);
    $colonia_alu = validarText($_POST['colonia-alu']);
    $alcaldia_alu = validarText($_POST['alcaldia-alu']);
    $entidad_alu = validarText($_POST['entidad-alu']);
    $cp_alu = validar($_POST['cp-alu']);
    $esc_proc = validar($_POST['esc-proc']);
    $esc_procedencia = !empty($_POST['esc-procedencia']) ? validarText($_POST['esc-procedencia'])  : 'NO APLICA';
    $ap_pat_tutor = validarText($_POST['ap-pat-tutor']);
    $ap_mat_tutor = validarText($_POST['ap-mat-tutor']);
    $nombre_tutor = validarText($_POST['nombre-tutor']);
    $edad_tutor = validar($_POST['edad-tutor']);
    $grado_estudio = validarText($_POST['grado-estudio']);
    $ocupacion = validarText($_POST['ocupacion']);
    $calle_tutor = validarText($_POST['calle-tutor']);
    $num_int_tutor = validarText($_POST['num-int-tutor']);
    $num_ext_tutor = validarText($_POST['num-ext-tutor']);
    $colonia_tutor = validarText($_POST['colonia-tutor']);
    $alcaldia_tutor = validarText($_POST['alcaldia-tutor']);
    $entidad_tutor = validarText($_POST['entidad-tutor']);
    $cp_tutor = validar($_POST['cp-tutor']);
    $tel_fijo = validar($_POST['tel-fijo']);
    $tel_cel = validar($_POST['tel-cel']);
    $tel_ofi = validar($_POST['tel-ofi']);
    $email_tutor = validar($_POST['email-tutor']);


    if (
        !empty($grado) && !empty($ap_pat_alu) && !empty($ap_mat_alu) && !empty($nombre_alu) && !empty($edad_alu) && !empty($curp) &&
        !empty($genero) && !empty($lugar_nac) && !empty($tipo_s) && !empty($religion) && !empty($calle_alu) && !empty($num_int_alu) &&
        !empty($num_ext_alu) && !empty($colonia_alu) && !empty($alcaldia_alu) && !empty($entidad_alu) && !empty($cp_alu) &&
        !empty($esc_proc) && !empty($esc_procedencia) && !empty($ap_pat_tutor) && !empty($ap_mat_tutor) && !empty($nombre_tutor) &&
        !empty($edad_tutor) && !empty($grado_estudio) && !empty($ocupacion) && !empty($calle_tutor) && !empty($num_int_tutor) &&
        !empty($num_ext_tutor) && !empty($colonia_tutor) && !empty($alcaldia_tutor) && !empty($entidad_tutor) && !empty($cp_tutor) &&
        !empty($tel_fijo) && !empty($tel_cel) && !empty($tel_ofi) && !empty($email_tutor)
    ) {

        //recogiendo el contenido del otro fichero 
        ob_start(); //buffer que recoge el contenido del fichero de abajo
        require_once 'pre_reg_form.view.php'; //archivo que contiene el html del pdf
        $html = ob_get_clean(); //el contenido del buffer se guarda en una variable

        $html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF8');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($html);
        $html2pdf->output('inscrip.pdf', 'D');
        /*
            $email_to = "zunosan.ricardo506@gmail.com";
            $subject = "Solicitud de Pre-Inscripción de ". $nombre_alu. " ".$ap_pat_alu." ".$ap_mat_alu;
            
            $message = "<p>Consulte el archivo adjunto.</p>";
            $separator = md5(time());
            $eol = PHP_EOL;
            $filename = $nombre_alu."_".$ap_pat_alu."_".$ap_mat_alu.".pdf";
            
            $pdfdoc = $html2pdf->output('', 'S');
            $attachment = chunk_split(base64_encode($pdfdoc));
        
            $headers = "From: " . $email_tutor . $eol;
            $headers .= "MIME-Version: 1.0" . $eol;
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;
        
            $body = '';
        
            $body .= "Content-Transfer-Encoding: 7bit" . $eol;
            $body .= "This is a MIME encoded message." . $eol; //had one more .$eol
        
        
            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
            $body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
            $body .= $message . $eol;
        
        
            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
            $body .= "Content-Disposition: attachment" . $eol . $eol;
            $body .= $attachment . $eol;
            $body .= "--" . $separator . "--";
        
            if (mail($email_to, $subject, $body, $headers)) {
                header('Location: recibe.php');                
            } else {        
                header('Location: error.php');
            }       */
    }
}

require 'views/inscripciones.view.php';
