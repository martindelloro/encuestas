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
               if($this->Usuario->save($this->data)){
                    $this->Session->setFlash("El usuario se ha guardado con éxito","mensaje_sistema",null,"mensaje_sistema");
                }
            }else{
                    $this->Session->setFlash("Verifique la repetición del password","mensaje_sistema",null,"mensaje_sistema");
            }
        }else{
            $this->Session->setFlash("El usuario NO se ha guardado","mensaje_sistema",null,"mensaje_sistema");
        }
        
    }
    
    function datos_usuario(){
        
    }
}
?>