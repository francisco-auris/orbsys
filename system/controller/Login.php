<?php
namespace System\Controller;

use System\Model\Estrutura as Html;
use System\Model\Conexao as Conexao;
use System\Model\Usuario as MUsuario;

class Login {

    public $message;

    function __construct(){

        if( isset($_POST['sign']) )
        {
            $this->entrar();
        }
        else if( isset($_POST['obj']) and strtolower($_POST['obj']) == 'login' ){
            
        }
        else {
            $this->mountWindow();
        }

    }

    function __set( $atb, $vl ){ $this->$atb = $vl; }
    function __get( $atb ){ return $this->$atb; }

    private function mountWindow(){

        Html::renderHeader( "Login", [BASEURI.'lib/theme/login.css'] );
        Html::requireView( "login.php" );

    }

    public function sair(){
        //destro sessao
        session_destroy();
        echo '_success_';
    }
    private function entrar()
    {
        //variaveis
        $login = (isset($_POST['login_user']) and strlen(str_replace(" ","",$_POST['login_user'])) > 0) ? $_POST['login_user'] : null;
        $senha = (isset($_POST['senha_user']) and strlen(str_replace(" ","",$_POST['senha_user'])) > 0) ? $_POST['senha_user'] : null;
        $base  = (isset($_POST['base_connect']) and strlen(str_replace(" ","",$_POST['base_connect'])) > 0) ? $_POST['base_connect'] : null;
        //vef variaveis
        if( $login == null OR $senha == null OR $base == null )
        {   
            $this->message = Html::renderAlert( 'info', 'Favor verifique campos de login ou senha' );
            $this->mountWindow();
        }
        else 
        {
            $user = new MUsuario();
            Conexao::settConnection( $base );
            //validar usuario
            $validaUsuario = $user->validateUser( $login, $senha );
            if( $validaUsuario === true ){
                //capturar dados de usuario da base
                $dados = $user->listAll( 'login_user="'.$login.'" AND senha_user="'.$senha.'"' );
                //init session de usuario
                $_SESSION[USR_NOME] = $dados[0]->name;
                $_SESSION[USR_LOGIN] = $dados[0]->login_user;
                //redirect / reload
                header("Location:.");
            }
            else {
                $this->message = Html::renderAlert('danger', 'Usuário ou Senha incorreta');
                $this->mountWindow();
            }
        }
    }

}