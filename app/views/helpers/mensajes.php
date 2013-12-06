<?php

class MensajesHelper extends AppHelper{
    var $helpers = array('Session');

    function mostrar(){
        $mensaje = $this->Session->flash("mensaje_sistema");
        $return  = null;
        if(!empty($mensaje)){
           $return  = "<script type='text/javascript'>"; 
           $return .= "$('.mensaje-sistema .mensaje-contenido').html('$mensaje');";
           $return .= "$('.mensaje-sistema').modal()";
           $return .= "</script>";
        }
        return $return;
    }

}

?>
