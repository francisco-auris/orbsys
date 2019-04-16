<?php
namespace System\Controller;

use System\Model\Estrutura as Html;

class Studio {

    function __construct(){
        $this->mountWindow();
    }

    private function mountWindow(){

        $scripts = ['https://code.jquery.com/jquery-1.12.4.js','https://code.jquery.com/ui/1.12.1/jquery-ui.js', BASEURI.'/js/variables.js', BASEURI.'/js/efeitos.js'];
        Html::renderHeader( 'Studio', [BASEURI.'lib/theme/main.css','//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css','https://fonts.googleapis.com/css?family=Roboto'], $scripts );
        Html::requireView( 'studio.php' );
        Html::renderFooter( [BASEURI.'/js/studio.js'] );

    }

}