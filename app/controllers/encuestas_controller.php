<?php

class EncuestasController extends AppController{
		
	function crear(){
		if(!empty($this->data)){
			if($this->Encuesta->saveAll($this->data)){
				debug($this->data);
				$this->Session->setFlash("Encuesta creada con exito",null,null,"mensaje_sistema");
				$this->render("guardoOk");
			}
			else{
				$this->Session->setFLash("Ocurrio un error al intentar guardar la encuesta",null,null,"mensaje_sistema");
			}
			
		}
		$grupos = $this->Encuesta->Grupo->find("list");
		// $preguntas = $this->Encuesta->Preguntas->find("list");
		
		$this->set("grupos",$grupos);
		// $this->set("preguntas",$preguntas);	
	}
	
}

?>