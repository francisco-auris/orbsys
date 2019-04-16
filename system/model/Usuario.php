<?php
namespace System\Model;

use System\Model\Conexao as Conexao;

class Usuario extends Conexao {

    private $conn;
    private $id;
    private $name;
    private $login;
    private $senha;

    function __construct(){
        $this->conn = $this->_getConnect(); //instance dbConnect
    }
    function __set( $atb, $vl ){ $this->$atb = $vl; }
    function __get( $atb ){ return $this->$atb; }

    protected function actionInsert(){}
    protected function actionUpdate(){}
    protected function actionDelete(){}
    
    //functions is the public access
    public function listAll( $filter = null ){} //lista all users
    public function validateUser( $login, $password ) : boolean {}

}