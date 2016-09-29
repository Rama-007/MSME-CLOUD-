<?php

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$domdpf = new Dompdf();
$html=file_get_contents("view/frontend/templates/helloworld.phtml");
$domdpf = loadHtml($html);
$domdpf->setPaper('A4','landscape');
$domdpf->render();

$domdpf->stream('codexworld',array('Attachment'=>0));
?>
