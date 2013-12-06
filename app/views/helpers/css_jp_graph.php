<?php
class CssJpGraphHelper extends AppHelper {
	private $css_file;
	
	public function css(){
		// carga el estilo
		//if ($css!=null){
			$lines = file('http://' . $_SERVER['SERVER_NAME'] . $this->webroot . 'css/jpgraph.css');
			$cssstyle = '';
			foreach ($lines as $line_num => $line) {
				$cssstyle .= trim($line);
			}
			// Con strtok se remueven las llaves de los estilos
			$tok = strtok($cssstyle, "{}");
			//sacamos los corchetes del string
				
			//aca vamos a almacenar el estring tokeneado
			$selector = array();
			//setamos el indice
			$spos = 0;
			//aca se podria decir que separamos los selectores de los estilos
			while ($tok !== false) {
				$selector[$spos] = $tok;
				$spos++;
				$tok = strtok("{}");
			}
	
		// tomamos la cantidad de elementos del array
		$size = count($selector);
			
		//almacenamos los selectores y los estilos por separado
		for($i = 0; $i<$size; $i++){
			if ($i % 2 == 0) {
				//$selectors[$selector[$i]]=array();
				$propiedades = $i + 1;
				$propiedades_valores = explode(";",$selector[$propiedades]);
				$cant_estilos = count($propiedades_valores);
				
				for ($j=0;$j<$cant_estilos;$j++){
					
					$estilo=explode(":",trim($propiedades_valores[$j]));
					$cant_valores = count($estilo);
					
					for($k=0;$k<$cant_valores-1;$k++){
						if ($k % 2 == 0) {
							$valor = $k + 1;
							$selectors[trim($selector[$i])][trim($estilo[$k])] = trim($estilo[$valor]);
						}
					}

				}
				
			}
		}
		//debug($selectors);die();
	}
}

?>