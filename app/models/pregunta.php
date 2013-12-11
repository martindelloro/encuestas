<?php

class Pregunta extends appModel{
	
	var $belongsTo = array("Usuario"=>array("className"=>"Usuario","foreignKey"=>"usuario_id"),
						   "Tipo"=>array("className"=>"Tipo","foreignKey"=>"tipo_id"));
	
	var $hasMany = array("Opcion"=>array("className"=>"Opcion","foreignKey"=>"pregunta_id"));
	
	
	var $hasAndBelongsToMany = array("Validacion"=>array("className"=>"Validacion","foreignKey"=>"pregunta_id","associationForeignKey"=>"validacion_id"));
	
}

?>