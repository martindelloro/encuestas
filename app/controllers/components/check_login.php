<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class checkLoginComponent extends Object {

    function initialize(&$controller){
        $this->Controller = &$controller;

    }

    function check() {
            try {
                    $usuario = Login::getOUsuario();
                    if($usuario) {
                        $this->Controller->userData = $this->Controller->Session->read("DatosUsuario");
                        if($this->Controller->userData == null){
                            
                        }
                        
                    }
                }
                catch(LoginException $e){
                    if($this->Controller->RequestHandler->isAjax()){
                        $this->Controller->Session->setFlash("Necesita estar logueado en el sistema para poder acceder a esta sección",
                                    'mensaje_sistema',null,'mensaje_sistema');
                        $this->Controller->redirect(array('controller'=>'pages','action'=>'display','salir'),null,true);
                    }
                    $this->Controller->Session->setFlash("Necesita estar logueado en el sistema para poder acceder a esta sección",
                                    'mensaje_sistema',null,'mensaje_sistema');
                    $this->Controller->redirect(array('controller'=>'pages','action'=>'display', 'inicio'),null,true);
                }
    }
}
?>
