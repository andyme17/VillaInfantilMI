<?php
    require __DIR__.'/vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    //recogiendo el contenido del otro fichero 
    ob_start();//buffer que recoge el contenido del fic◙4ero de abajo
    require_once 'pre_reg_form.view.php';//archivo que contiene el html del pdf
    $html = ob_get_clean();//el contenido del buffer se guarda en una variable

    $html2pdf = new Html2Pdf('P','A4','es','true','UTF8');
    $html2pdf->writeHTML($html);
    $html2pdf->output("pre_inscripcion.pdf");
?>