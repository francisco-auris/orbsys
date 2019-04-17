<?php
namespace System\Model;

use System\Model\Conexao as Conexao;
use \PDO as PDO;

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
    public function listAll( $filter = null ){
        //variaveis
        $sql_normal = "SELECT * FROM suser WHERE status_sys='Y'";
        $sql_filter = "SELECT * FROM suser WHERE ".$filter;
        $sql = ($filter != null) ? $sql_filter : $sql_normal;
        $query = $this->conn->query( $sql );

        if( $query and $query->rowCount() > 0 ){
            $obj = $query->fetchAll( PDO::FETCH_OBJ );
            return $obj;
        }
        else {
            return null;
        }

    } //lista all users
    public function validateUser( $login, $password ) : bool {
        $sql_consulta = "SELECT * FROM suser WHERE login_user= :login AND senha_user= :senha";
        $query = $this->conn->prepare( $sql_consulta );
        //bindagem de parametros
        $query->bindParam(":login", $login, PDO::PARAM_STR);
        $query->bindParam(":senha", $password, PDO::PARAM_STR);
        try {
            $query->Execute();
            if( $query->rowCount() > 0 )  
            {
                return true;
            }
            else {
                return false;
            }
        }
        catch( PDOException $e ){
            throw new Exception($e->getMessage(), 1);
        }
    }

}