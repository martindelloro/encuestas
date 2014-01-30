<?php 

class UsuariosController extends AppController {
    var $uses = array("Usuario");
    var $userData = array();
    var $OUsuario=null;
    var $usuarios=null;


    function  crear_usuario(){
        if(!empty($this->data)){
            if($this->data['Usuario']['password']==$this->data['Usuario']['password_rep']){
                $this->data['Usuario']['password']=md5($this->data['Usuario']['password']); //lo seteo para que lo guarde con seguridad md5
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
            $OUsuario=$this->Usuario->findByUsuario($this->data['User']['usuario']);
           //debug($usuario);
            if ($OUsuario!=""){
                if(md5($this->data['User']['password']) == $OUsuario['Usuario']['password']){
                    //echo "esta todo bien"; //acá tiene que cargar los menues para distintos tipos de usuario
                    $this->Session->Write($OUsuario);
                    $this->set('OUsuario',$OUsuario);
                    
                }else{
                    $this->Session->setFlash("ERROR-Verifique usuario/contraseña",null,null,"mensaje_sistema");
                }
            }else{
                    $this->Session->setFlash("ERROR-Verifique usuario/contraseña",null,null,"mensaje_sistema");
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
        $this->Session->destroy();
        //$this->Cookie->destroy();
        //$this->autoRender = false;
        
        $this->redirect(array('controller'=>'pages','action'=>'display','inicio'));
     }



}

?>