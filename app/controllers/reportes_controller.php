<?php

class ReportesController extends AppController{
        var $uses = array("Reporte","ListadoCarrera");
	function beforeFilter() {
            parent::beforeFilter();
            $sesion=$this->Session->Read();
            if($sesion['Usuario']==null){

                $this->Session->setFlash("Debe loguearse para acceder a esta sección.<br>"
                        . "               El administrador ha sido notificado del error",null,null,"mensaje_sistema");
                $this->redirect(array('controller'=>'pages','action'=>'display','inicio'));
            }

        }        
        function generar_reportes(){
            $listado=$this->ListadoCarrera->find("list");
            $variables=array("Listado de Variables" => "Listado de Variables");
            $filtros=array("Listado de Filtros" => "Listado de Filtros");
            $anio_emision=array("2008"=>'2008',
                                "2009"=>'2009');
            $datos=$this->Reporte->find('all');
            
            $this->set('variables',$variables);
            $this->set('listado',$listado);
            $this->set('anio_emision',$anio_emision);
          $this->set('filtros',$filtros);
        }
        
    function generar(){
    	// $this->autoRender = false;
    	$encuestas = $this->Reporte->Encuesta->find("list",array("recursive"=>-1));
    	$this->set("encuestas",$encuestas);
    }
    
    function crear(){
    	$this->autoRender = false;
    	debug($this->data);
    	$this->Reporte->saveAll($this->data,array("atomic"=>false));
		echo "capo";    	
    }
    
    function buscarPreguntas($seccion){
    	$this->autoRender = false;
    	$encuesta_id = $this->data["Reporte"]["encuesta_id"];
    	$preguntas = $this->Reporte->Encuesta->EncuestaPregunta->find("list",array("conditions"=>array("encuesta_id"=>$encuesta_id)));
    	$this->set("preguntas",$preguntas);
    	switch($seccion){
    		case "variables":
    			$this->render("/elements/reportes/variables");
    			break;
    		case "filtros":
    			$this->render("/elements/reportes/filtros");
    			break;
    	}
    }
    
    function generarFiltro($pregunta_id){
    	$this->autoRender = false;
    	$this->loadModel("Pregunta");
    	$pregunta = $this->Pregunta->find("first",array("conditions"=>array("Pregunta.id"=>$pregunta_id),"contain"=>array("Opcion")));
    	switch($pregunta["Pregunta"]["tipo_id"]){
    		case 4:
    			$this->set("opciones",$this->Pregunta->Opcion->find("list",array("conditions"=>array("Opcion.pregunta_id"=>$pregunta_id))));
    			$this->render("/elements/reportes/generarFiltro/tipo_4");
    			break;
    	}
    	
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