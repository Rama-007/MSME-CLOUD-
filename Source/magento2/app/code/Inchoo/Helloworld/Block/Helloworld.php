<?php
namespace Inchoo\Helloworld\Block;

//include_once 'dompdf/dompdf_config.inc.php';
//spl_autoload_register('DOMPDF_autoload');
 
class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }
/*    public function printAction(){
	$html=file_get_contents("view/frontend/templates/helloworld.phtml");
	$dompdf = new DOMPDF();
            $dompdf->load_html($html);
            $dompdf->render();
            $dompdf->stream("sample.pdf");

	}*/	
}
