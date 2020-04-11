<?php
    require 'admin/config.php';
    require __DIR__ . '/vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    function validarText($dato)
    {
        $dato = trim($dato);
        $dato = filter_var(($dato), FILTER_SANITIZE_STRING);
        return $dato;
    }

    function validarNum($dato)
    {
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = stripslashes($dato);
        return $dato;
    }

    if (isset($_POST['submit'])) {
        $grado = $_POST['grado'];
        $ap_pat_alu = validarText($_POST['ap-pat-alu']);
        $ap_mat_alu = validarText($_POST['ap-mat-alu']);
        $lugar_nac = $_POST['lugar-nac'];
        $tipo_s = $_POST['tipo-s'];
        $religion = validarText($_POST['religion']);
        $esc_proc = $_POST['esc-proc'];
        $esc_procedencia = !empty($_POST['esc-procedencia']) ? $_POST['esc-procedencia']  : 'NO APLICA';
        $email_tutor = "villa.infantil.mi@live.com.mx";

        if (
            !empty($grado) && !empty($ap_pat_alu) && !empty($ap_pat_alu) && !empty($lugar_nac) && !empty($tipo_s) &&
            !empty($religion) && !empty($esc_proc) && !empty($esc_procedencia) //&& !empty($email_tutor)
        ) {

            //recogiendo el contenido del otro fichero 
            ob_start(); //buffer que recoge el contenido del fichero de abajo
            require_once 'pre_reg_form.view.php'; //archivo que contiene el html del pdf
            $html = ob_get_clean(); //el contenido del buffer se guarda en una variable

            $html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF8');
            $html2pdf->setDefaultFont('Arial');
            $html2pdf->writeHTML($html);

            $email_to = "villa.infantil.mi@live.com.mx";
            $subject = "Solicitud de Pre-Inscripción desde villainfantilmi.edu.mx";
            
            $message = "<p>Consulte el archivo adjunto.</p>";
            $separator = md5(time());
            $eol = PHP_EOL;
            $filename = "pre_inscripcion.pdf";
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
        
                $msgsuccess = 'Email enviado Correctamente';
                
            } else {
        
                $msgerror = 'Email no ha sido enviado';
            }
            
            header('Location: recibe.php');        
        }
    }

    require 'views/inscripciones.view.php';
