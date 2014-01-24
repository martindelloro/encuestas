<?php

class PreguntasController extends AppController{
	
	function listar(){
		$preguntas = $this->Pregunta->find("All");
		$this->set("preguntas",$preguntas);
	}
	
	function crear(){
		$tipos  = $this->Pregunta->Tipo->find("list");
		$reglas = $this->Pregunta->Validacion->Regla->find("list"); 
		if(!empty($this->data)){
			if($this->Pregunta->saveAll($this->data)){
				$pregunta = $this->Pregunta->find("first",array("conditions"=>array("Pregunta.id"=>$this->Pregunta->getInsertId())));
				$this->set("pregunta",$pregunta);
				$this->Session->setFlash("Pregunta agregada con exito",null,null,"mensaje_sistema");
				$this->render("agregarMenu");			
			}
			else{
				$this->Session->setFlash("Ocurrio un error al intentar guardar la pregunta",null,null,"mensaje_sistema");
			}
			
		}else{
			
			
		}
		$this->set("tipos",$tipos);
		$this->set("reglas",$reglas);
	}
	
}


?>