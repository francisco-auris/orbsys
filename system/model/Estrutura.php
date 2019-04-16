<?php
namespace System\Model;

class Estrutura {

    public static function requireView( $file ){
        if( file_exists( BASEROOT.'/system/view/'.$file ) ){
            require_once BASEROOT.'/system/view/'.$file;
        }
        else {
            echo "View não encontrada [".BASEROOT.'/system/view/$file]'; exit;
        }
    }

    public static function renderHeader( $title, $style=null, $script=null )
    {
        $render = '';
        $render .= '<!doctype html>';
        $render .= '<html lang="pt-br">';
        $render .= '<head>';
        $render .= '    <meta charset="utf-8">';
        $render .= '    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
        $render .= '    <link rel="stylesheet" href="'.BASEURI.'lib/bootstrap/css/bootstrap.min.css">';
        if( $style != null ){
            for( $i=0; $i < count($style); $i++ ){
                $render .= '<link rel="stylesheet" href="'.$style[$i].'" />';
            }
        }
        $render .= '    <title>'.$title.'</title>';
        
        if( $script != null ){
            for( $i=0; $i < count($script); $i++ ){
                $render .= '<script src="'.$script[$i].'"></script>';
            }
        }
        $render .= '</head>';
        $render .= '<body>';
        echo $render;
    }

    public static function renderFooter( $script = null )
    {
        $render = '';
        //$render .= '    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';
        //$render .= '    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>';
        $render .= '    <script src="'.BASEURI.'lib/bootstrap/js/bootstrap.js"></script>';
        if( $script != null ){
            for( $i=0; $i < count($script); $i++ ){
                $render .= '<script src="'.$script[$i].'"></script>';
            }
        }
        $render .= '</body>';
        $render .= '</html>';
        echo $render;
    }


}