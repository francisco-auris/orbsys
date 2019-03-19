<?php
namespace System\Controller;

use System\Model\Estrutura as Html;

class Login {

    function __construct(){
        $this->mountWindow();
    }

    private function mountWindow(){

        Html::renderHeader( "Login", [BASEURI.'lib/theme/login.css'] );
        Html::requireView( "login.php" );

    }

}