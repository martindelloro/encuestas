<?php 

class UsuariosController extends AppController {
    var $uses = array("Usuario");
    var $userData = array();
    //var $components = array("checkLogin");
    
    /**
     * Tipos de sexos para el select
     * @var Array
     */
 
    
    
    /**
     * Carga el formulario de No Respuesta
     * 
     * @param integer $id El id de la encuesta
     * @param boolean $desde_ver_estado Da una señal indicando si se accedio desde la vista ver_estado (verdadero) o desde el listar (false)
     */
    function crear_usuario(){
        
        if(!empty($this->data)){
            if($this->data['Usuario']['password']==$this->data['Usuario']['password_rep']){

                 
                
               if($this->Usuario->save($this->data)){ //SI GUARDA
                    $this->Session->setFlash("El usuario se ha guardado con éxito",null,null,"mensaje_sistema");
                    //debug($this->data);
                }else{ //SI NO GUARDA AL USUARIO
                    $this->Session->setFlash("El usuario NO se ha guardado",null,null,"mensaje_sistema");
                }
            }else{ //SI NO REPITE BIEN EL PASSWORD
                    $this->Session->setFlash("Verifique la repetición del password",null,null,"mensaje_sistema");
                    
            }

        }
        
    }
    
    function datos_usuario(){
        
    }
}
?>