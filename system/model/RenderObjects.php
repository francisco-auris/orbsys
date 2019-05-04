<?php
//render objects new in open
namespace System\Model;

class RenderObjects {


    /****************************************************
     *               RENDER OBJECTS DE INPUT            *
     ****************************************************/
    protected function renderInput( $token, $obj = array(), $value = null ) : string
    {
        $input = '';
        $input .= '<div class="col-md-'.$obj[4].'">';
            $input .= '<label>'.$obj[1].'</label>';
            $input .= '<input type="'.$obj[2].'" class="form-control form-control-sm" placeholder="'.$obj[3].'" value="'.($value ?? '').'" />';
        $input .= '</div>';
        return $input;
    }
    protected function renderInputTable( $token, $obj = array(), $value = null ){}
    

}