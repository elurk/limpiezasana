<?php
/**
 *
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      URKO KORTA
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

    // get the HTML
    ob_start();
    include('test2.php?id=40');
    $content = ob_get_clean();

    // convert to PDF
    require_once('pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('output/exemple04.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
