<?php
namespace System\Model;
/*
*   REQUISITOS DE CLASS DE CONEXAO
*   extension=pdo.so
*   extension=pdo_mysql.so
*/

class Conexao {

    protected function _getConnect()
    {
        try {
            $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DBASE, DB_USER, DB_PSWD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

}