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
			
			
		}else{
			
			
		}
		$this->set("tipos",$tipos);
		$this->set("reglas",$reglas);
	}
	
}


?>