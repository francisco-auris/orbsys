<?php
function __autoload( $request )
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