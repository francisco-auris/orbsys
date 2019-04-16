<?php
/*function __autoload( $request )
{
    //variables
    $path_access   = ['system']; //pastas acessiveis
    $exp_request   = explode( "\\", strtolower($request) );

    if( count( $exp_request ) > 1 )
    {

        if( in_array( $exp_request[0], $path_access ) )
        {
            $path_file = $exp_request[0];

            for( $i=1; $i < count($exp_request); $i++ ){
                $path_file .= ( $i == (count($exp_request)-1) ) ? '/'.ucfirst($exp_request[$i]).'.php' : '/'.$exp_request[$i];
            }

            if( file_exists( $path_file ) ){
                require_once $path_file;
            }
            else {
                throw new Exception("Not find file in uri ".$path_file, 1);
            }
        }
        else {
            throw new Exception("Namespace path not find {$exp_request[0]}", 1);
        }

    }

}
*/
class Autoloader {

    const router = BASEROOT."/routers.json";

    public static function autoloadSystem( $e )
    {
        //read file routers json
        $routers = self::readRouters();
        $explode = explode( '\\', $e );
        $path    = "system/";
        $namespace = strtolower( $explode[1] );
        $seach = false;

        $path .= strtolower($explode[1])."/".$explode[2].".php";
        //vef acessibilidade do arquivo ou existencai
        for( $i=0; $i < count( $routers['system'][$namespace] ); $i++ ){
            if( $routers['system'][$namespace][$i] == $explode[2] ){
                $seach = true;
            }
        }

        if( $seach === true )
        {   
            if( file_exists( $path ) ){
                require_once $path;
            }
            else {
                throw new Exception("Arquivo nao encontrado ".$path, 1);
            }
        }
        else 
        {
            echo $path." não encontrado ou não esta acessivel."; exit;
        }

    }

    public static function autoloadModule( $e )
    {

    }

    //read file routers json
    private static function readRouters() : array
    {
        $arquivo = file_get_contents( self::router );
        $json    = json_decode( $arquivo, true );
        return $json;
    }

}