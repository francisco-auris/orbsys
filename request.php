<?php
//read read via ajax ou js
//este request so tem acesso direto a objetos controllers
/***
 * 
 *  @author Auris maciel
 * 
 * 
 */
session_start();
ini_set( 'display_errors', true );
error_reporting( E_ALL );

include_once ("confg.php");
include_once ("router.php");

if( $_SERVER['REQUEST_METHOD'] == "POST" AND isset( $_SESSION[USR_LOGIN] ) )
{

    $tipo = (isset($_POST['type']) and strlen(str_replace(" ","",$_POST['type']) and ( $_POST['type'] == 'system' or $_POST['type'] == 'modules' ) ) > 0) ? strtolower($_POST['type']) : null;
    if( $tipo == 'system' )
    {
        //direction system
        spl_autoload_register( ['Autoloader', 'autoloadSystem'] );
        //variaveis
        $obj = (isset($_POST['obj']) and strlen(str_replace(" ","",$_POST['obj'])) > 0) ? $_POST['obj'] : null;
        $act = (isset($_POST['act']) and strlen(str_replace(" ","",$_POST['act'])) > 0) ? $_POST['act'] : null;
        //vef variaveis
        if( $obj == null OR $act == null )
        {
            echo 'Obj ou Act não foram encontrados'; exit;
        }
        else
        {
            $class = "System\\Controller\\".ucfirst($obj);
            $var = new $class; //new instance
            $var->$act(); //exec action
        }

    }
    else if( $tipo == 'modules' )
    {
        //direction modules
    }
    else 
    {
        //direction refused
        echo 'Tipo de direction nao reconhecida'; exit;
    }

}
else 
{
    echo 'Conexao não aceita';
}
