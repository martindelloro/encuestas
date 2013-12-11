<?php

class ReportesController extends AppController{
        var $uses = array("Reporte","ListadoCarrera");
        
        function generar_reportes(){
            $listado=$this->ListadoCarrera->find("list");
            $sexo=array('F'=>'F',
                        'M'=>'M');
            $anio_emision=array("2008"=>'2008',
                                "2009"=>'2009');
            $datos=$this->Reporte->find('all');
            //debug($datos);
            //debug($datos);
            $this->set('sexo',$sexo);
            $this->set('listado',$listado);
            $this->set('anio_emision',$anio_emision);
        }
        function buscar(){
         
        }
	
}

?>