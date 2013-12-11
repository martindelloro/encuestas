<?php

class Reporte extends AppModel{
	var $useTable="reportes";
        var $hasMany=array('EncuestaVieja'=>array("className"=>'EncuestaVieja', "foreignKey"=>"reporte_id"));
        
	
}


?>