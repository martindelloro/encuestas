<?php

class Encuesta extends AppModel{
	var $actsAs = "containable";
	var $virtualFields = array("nombreAnio"=>"CONCAT(Encuesta.nombre,' Año: ',Encuesta.anio)");
	var $displayField = "nombreAnio";
	var $order = "nombreAnio ASC";
	
	var $belongsTo = array("Usuario"=>array("className"=>"Usuario","foreignKey"=>"usuario_id"));
	var $hasMany   = array("Reporte"=>array("className"=>"Reporte","foreignKey"=>"encuesta_id"),
						   "EncuestaPregunta"=>array("className"=>"EncuestaPregunta","foreignKey"=>"encuesta_id"));
	
	var $hasAndBelongsToMany = array("Preguntas"=>array("className"=>"Pregunta","joinTable"=>"encuestas_preguntas","foreignKey"=>"encuesta_id","associationForeignKey"=>"pregunta_id"),
									 "Grupos"=>array("className"=>"Grupo","joinTable"=>"grupos_usuarios","foreignKey"=>"encuesta_id","associationForeignKey"=>"grupo_id"));
	
}


?>