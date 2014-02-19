<?php

class ImportarController extends AppController{
	var $uses = array("Pregunta","Usuario");
	
	private function buscarOpciones(){
		
	}
		
	function crearPreguntas(){
		$this->autoRender = false;
		$data = new Spreadsheet_Excel_Reader(WWW_ROOT.'/excels/importar.xls', false);
		$filas = $data->rowcount(0);
		$columnas = $data->colcount(0);
		for($col= 13; $col<= $columnas;$col++){
			$pregunta["Pregunta"]["nombre"] = utf8_encode($data->val(1,$col));
			$opciones = array();
			$sinAcento = array();
			
			for($fila = 2;$fila <= $filas; $fila++){
				$opcion = strtr(strtolower($data->val($fila,$col)),'àáâãäçèéêëìíîïòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiiooooouuuuyyAAAAACEEEEIIIIOOOOOUUUUY');
				if(!empty($opcion)){
					$opciones[] = utf8_encode($opcion);
				}
			}
			
			$opciones = array_values(array_unique($opciones));
			sort($opciones);
			$diferentes = count($opciones);
			switch($diferentes){
				case ($diferentes == 2):
					if(in_array("si",$opciones) || in_array("no",$opciones)){
						$pregunta["Pregunta"]["tipo_id"] = 6;
						unset($pregunta["Opcion"]);
					}else{
						$pregunta["Pregunta"]["tipo_id"] = 4;
						for($opc=0; $opc < $diferentes ; $opc++){
							$pregunta["Opcion"][$opc]["nombre"] = $opciones[$opc];
						} 
					}
					break;
				case ($diferentes >= 2 && $diferentes < 30):
						$pregunta["Pregunta"]["tipo_id"] = 4;
						for($opc=0; $opc < $diferentes; $opc++){
							$pregunta["Opcion"][$opc]["nombre"] = $opciones[$opc];
						}
					break;
				case ($diferentes >=30 ):
						$pregunta["Pregunta"][$col]["tipo_id"] = 1;
						break;
			} // fin switch
			$this->Pregunta->saveAll($pregunta,false);
		} // fin For preguntas
	} // Fin funcion
	
	function crearUsuario(){
		$this->autoRender = false;
		$data = new Spreadsheet_Excel_Reader(WWW_ROOT.'/excels/importar.xls', false);
		$filas = $data->rowcount(0);
		$columnas = $data->colcount(0);
		
		for($i = 2; $i <= $filas; $i++){
			$usuario["Usuario"]["id"] = "";
			for($j = 2; $j <= 12; $j++){
				switch($j){
					case 2:
						$usuario["Usuario"]["nombre"] = utf8_encode($data->val($i,$j));
						break;
					case 3:
						$usuario["Usuario"]["sexo"] = strtolower($data->val($i,$j));		
						break;
					case 4:
						$usuario["Usuario"]["dni"] =  preg_replace( '/[^0-9]/', '', $data->val($i,$j));
						break;
					case 5:
						$fecha_nac = $data->val($i,$j);
						if(substr_count($fecha_nac,"/") == 2){
							$fecha_separada = explode("/",$fecha_nac);
							if($fecha_separada[1] > 12){
								$fecha_nac = $fecha_separada[1]."/".$fecha_separada[0]."/".$fecha_separada["2"];
							}
							$usuario["Usuario"]["fecha_nac"] = $fecha_nac;
						}else{
							
						}
						break;
					case 6:
						$usuario["Usuario"]["estado_civil"] = $data->val($i,$j);
						break;
					case 7:
						$usuario["Usuario"]["calle"] = utf8_encode($data->val($i,$j));
					    break;
					case 8:
						$usuario["Usuario"]["localidad"] = strtolower(utf8_encode($data->val($i,$j)));
						break;
					case 9:
						$usuario["Usuario"]["provincia"] = strtolower(utf8_encode($data->val($i,$j)));
						break;
					case 10:
						$usuario["Usuario"]["tel_fijo"] = $data->val($i,$j);
						break;
					case 11:
						$usuario["Usuario"]["celular"] = $data->val($i,$j);
						break;
					case 12:
						$usuario["Usuario"]["email_1"] = strtolower($data->val($i,$j));
						break;
				}
						
			}
			if(filter_var($usuario["Usuario"]["email_1"],FILTER_VALIDATE_EMAIL)){
				$usuario["Usuario"]["usuario"] = $usuario["Usuario"]["email_1"];
			}
			else{
				$usuario["Usuario"]["usuario"] = str_replace(" ","",$usuario["Usuario"]["nombre"]);
			}
			$usuario["Usuario"]["hashActivador"] = md5($usuario["Usuario"]["usuario"]);
			$usuario["Usuario"]["activado"] = false;
			$usuario["Usuario"]["rol"] = "graduado";
			$this->Usuario->save($usuario["Usuario"],false);
		}
	}
	
}


?>