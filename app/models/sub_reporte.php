<?php

class SubReporte extends AppModel{
	var $useTable = "sub_reportes";
	
	var $hasMany = array("Filtro"=>array("className"=>"Filtro","foreignKey"=>"sub_reporte_id"));
	
}

?>