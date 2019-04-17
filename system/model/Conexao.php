<?php
namespace System\Model;
/*
*   REQUISITOS DE CLASS DE CONEXAO
*   extension=pdo.so
*   extension=pdo_mysql.so
*/
use \PDO as PDO;

class Conexao {

    public static function settConnection( $conn ){ 
        $_SESSION[USR_CONNECT] = $conn; 
    }

    protected function _getConnect()
    {
        try {
            $conn = new PDO('mysql:host='.DB_HOST.';dbname='.$_SESSION[USR_CONNECT], DB_USER, DB_PSWD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } 
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

}