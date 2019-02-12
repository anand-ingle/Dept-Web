<?php

$request = array('id'=> $_POST['id']);

ob_start();
require_once('Dwnld_Syllabus.php');
$template=ob_get_clean();

require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class

$dompdf = new Dompdf();
//$page=file_get_contents("dwnld_syllabus.php");
                                
$dompdf->loadHtml($template);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'Portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();

$dompdf->stream("syllabus.pdf", array("Attachment"=>0));
?>
=". $row['courseid']. "''>Download</a> ";
                                 