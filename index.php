<?php
/***
 * 
 *  @author Auris maciel
 * 
 * 
 */
session_start();
ini_set( 'display_errors', false );
error_reporting( E_ALL );

include_once ("confg.php");
include_once ("router.php");

if( !isset( $_SESSION[USR_LOGIN] ) )
{
    $class = "System\\Controller\\Login";
}

$var = new $class;