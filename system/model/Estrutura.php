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
        $render .= '</body>';
        $render .= '</html>';
        echo $render;
    }


}