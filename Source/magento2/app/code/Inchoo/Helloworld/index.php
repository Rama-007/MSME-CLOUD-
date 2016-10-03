<?php
require_once("dompdf/dompdf_config.inc.php");
spl_autoload_register('DOMPDF_autoload');

function pdf_create($html,$filename, $paper , $orientation ,$stream=TRUE){
	$dompdf = new DOMPDF();
	$dompdf->set_paper($paper, $orientation);
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream($filename."pdf");
}

$filename = 'Quote';
$dompdf = new DOMPDF();
$html = file_get_contents('/var/www/html/magento2/app/code/Inchoo/Helloworld/view/frontend/templates/helloworld.phtml')
pdf_create($html,$filename,'A4' ,'portrait');

?>