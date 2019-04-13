<?php
namespace System\Controller;

use System\Model\Estrutura as Html;

class Home {

    function __construct(){
        $this->mountWindow();
    }

    private function mountWindow()
    {
        //estrutura
        Html::renderHeader( "Home", [BASEURI.'lib/theme/main.css','//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'], ['https://code.jquery.com/jquery-1.12.4.js','https://code.jquery.com/ui/1.12.1/jquery-ui.js'] );
        Html::requireView( "home.php" );
    }

}