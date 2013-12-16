<?php

class Encuesta extends AppModel{
	
	var $belongsTo = array("Grupo"=>array("className"=>"Grupo","foreignKey"=>"grupo_id"),
						   "Usuario"=>array("className"=>"Usuario","foreignKey"=>"usuario_id"));
	
	var $hasAndBelongsToMany = array("Preguntas"=>array("className"=>"Pregunta","joinTable"=>"encuestas_preguntas","foreignKey"=>"encuesta_id","associationForeignKey"=>"pregunta_id"));
	
}


?>