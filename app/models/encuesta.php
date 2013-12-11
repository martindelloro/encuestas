<?php

class Encuesta extends AppModel{
	
	var $belongsTo = array("Grupo"=>array("className"=>"Grupo","foreignKey"=>"grupo_id"),
						   "Usuario"=>array("className"=>"Usuario","foreignKey"=>"usuario_id"));
	
	var $hasAndBelongsToMany = array("Pregunta"=>array("className"=>"Pregunta","foreignKey"=>"encuesta_id","associationforeignKey"=>"pregunta_id"));
	
}


?>