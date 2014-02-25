<?php

class Encuesta extends AppModel{
	
	var $belongsTo = array("Usuario"=>array("className"=>"Usuario","foreignKey"=>"usuario_id"));
	
	var $hasAndBelongsToMany = array("Preguntas"=>array("className"=>"Pregunta","joinTable"=>"encuestas_preguntas","foreignKey"=>"encuesta_id","associationForeignKey"=>"pregunta_id"),
									 "Grupos"=>array("className"=>"Grupo","joinTable"=>"grupos_usuarios","foreignKey"=>"encuesta_id","associationForeignKey"=>"grupo_id"));
	
}


?>