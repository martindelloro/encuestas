<?php

class Pregunta extends appModel{
	
	var $belongsTo = array("Usuario"=>array("className"=>"Usuario","foreignKey"=>"usuario_id"));
	
	var $hasAndBelongsToMany = array("Validacion"=>array("className"=>"Validacion","foreignKey"=>"pregunta_id","associationForeignKey"=>"validacion_id"));
	
}

?>