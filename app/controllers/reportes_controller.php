<?php

class ReportesController extends AppController{
        var $uses = array("Reporte","ListadoCarrera");
        
        function generar_reportes(){
            $listado=$this->ListadoCarrera->find("list");
            $sexo=array('F'=>'F',
                        'M'=>'M');
            $cohorte=array("la");
            $anio_emision=array("2008"=>'2008',
                                "2009"=>'2009');
            $datos=$this->Reporte->find('all');
            
            $this->set('sexo',$sexo);
            $this->set('listado',$listado);
            $this->set('anio_emision',$anio_emision);
            $this->set('cohorte',$cohorte);
        }
        
	function buscar(){
              if(empty($this->data)){
                $this->data = $this->Session->read('buscar');
              }
              else{
                $this->Session->write('buscar',$this->data);
              }
              $buscar = array();
              
              //debug($this->data);
              
              if(!empty($this->data['buscar']['sexo'])){
                  $buscar['EncuestaVieja.sexo'] = $this->data['buscar']['sexo'];
              }
              if(!empty($this->data['buscar']['carrera_nombre'])){
                  $buscar['EncuestaVieja.carrera_nombre'] = $this->data['buscar']['carrera_nombre'];
              }
              if(!empty($this->data['buscar']['anio_emision'])){
                  $buscar['EncuestaVieja.anio_emision'] = $this->data['buscar']['anio_emision'];
              }
              if(!empty($this->data['buscar']['cohorte'])){
                  $buscar['EncuestaVieja.cohorte'] = $this->data['buscar']['cohorte'];
              }
              if(!empty($this->data['buscar']['promedio'])){
                  $buscar['EncuestaVieja.cohorte'] = $this->data['buscar']['cohorte'];
              }
              if(!empty($this->data['buscar']['promedio_b'])){
                  $buscar['Reporte.promedio_b'] = $this->data['buscar']['promedio_b'];
              }              
              
              //debug($this->Reporte->find('all'));
              
              //$this->data=$array_condicion;
              $this->paginate = array("order"=>"EncuestaVieja.apellido ASC","fields"=>array('EncuestaVieja.apellido','EncuestaVieja.promedio_aplazo','EncuestaVieja.localidad','EncuestaVieja.provincia'),'conditions'=>$buscar);
              $this->set('reportes',$this->paginate("EncuestaVieja"));     
              
              
        }

}

?>