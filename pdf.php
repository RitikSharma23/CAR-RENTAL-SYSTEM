<?php

define("DOMPDF_ENABLE_REMOTE", false);

$a=$_REQUEST['a'];

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$dompdf->set_base_path(basename(__DIR__));

$html = file_get_contents('http://localhost/pdf/jalaram_invoice.php?a='.$a); 
$dompdf->loadHtml($html); 

// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'potrait'); 

// Render the HTML as PDF 
$dompdf->render(); 

// Output the generated PDF (1 = download and 0 = preview) 
$dompdf->stream("INVOICE_".$a, array("Attachment" => 1));

?>
