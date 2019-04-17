<?php
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

spl_autoload_register( ['Autoloader', 'autoloadSystem'] );

if( !isset( $_SESSION[USR_LOGIN] ) )
{
    $class = "System\\Controller\\Login";
}
else {
    $class = "System\\Controller\\Home";
}

$var = new $class;