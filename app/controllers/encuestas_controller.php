<?php

class EncuestasController extends controller{
	
	
	
	function crear(){
		if(!empty($this->data)){
			
			
		}
		else{
			$grupos = $this->Encuesta->Grupo->find("list");
			$preguntas = $this->Encuesta->Pregunta->find("list");
			
			
			
		}
		$this->set("grupos",$grupos);
		$this->set("preguntas",$preguntas);	
	}
	
}

?>