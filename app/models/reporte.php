<?php

class Reporte extends AppModel{
	var $useTable="reportes";
        var $hasOne=array('EncuestaVieja'=>array("className"=>'EncuestaVieja', "foreignKey"=>"reporte_id"));
        
	
}


?>