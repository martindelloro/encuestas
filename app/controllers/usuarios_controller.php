<?php 

class UsuariosController extends AppController {
    var $uses = array("Usuario");
    var $userData = array();
    var $OUsuario=null;
    var $usuarios=null;
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
    function  crear_usuario(){
        if(!empty($this->data)){
            if($this->data['Usuario']['password']==$this->data['Usuario']['password_rep']){
                $this->data['Usuario']['password']=md5($this->data['Usuario']['password']);
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

    function login(){
        try{
          //$this->OUsuario = Login($this->data['User']['usuario'],md5($this->data['User']['password']));
            $usuarios=$this->Usuario->find('all');
            debug($usuarios);
            
            if($this->data['User']['usuario']){
                
            }
        }catch(LoginException $e){
          $this->Session->setFlash($e->getMessage(),'error_usuario',null,'mensaje_sistema');
        }

        if($this->OUsuario != null){
            foreach($this->OUsuario->getAtributos('legajo','ficha') as $atributo){
                $nombre_corto = $atributo->getValor();
                $ficha = $this->Escuela->Ficha->FichaEscuela->find("list",array("conditions"=>array("FichaEscuela.nombre_corto"=>$nombre_corto),"fields"=>array("nombre_corto","nombre")));
                $this->fichas += $ficha;
                }
            asort($this->fichas);
            $this->Session->write("fichas",$this->fichas);
            $this->set("redirect",true);
        }

     }

     function logout(){
     Login::logOutUsuario();
     $this->autoRender = false;
     $this->Session->destroy();
     $this->redirect(array('controller'=>'escuelas','action'=>'index'));
     }



}

?>