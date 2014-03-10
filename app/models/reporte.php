<?php

class Reporte extends AppModel{
	var $useTable="reportes";
    var $belongsTo = array("Encuesta"=>array("className"=>"Encuesta","foreignKey"=>"encuesta_id"));
    var $hasMany = array("SubReporte"=>array("className"=>"SubReporte","foreignKey"=>"reporte_id"));
        
	
}


?>