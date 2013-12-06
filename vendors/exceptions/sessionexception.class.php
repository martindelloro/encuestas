<?php
/**
 * sessionexception.class.php  -  Build 25/07/200604:01:30 PM 
 * Implementa las Excepciones y los Handlers para los errores
 * 
 * @package USUARIOS
 * @author alvaro
 * @version 0.1
 * 
 */
 
/**
* Excepciones
*/

class SessionException extends Exception {
	public function __construct ($message=false, $code=false) {
		if ($message) {
			$this->message = $message;
		}
		else {
		 $this->message = 'Sesión Inválida';
		}
		if ($code) {
			$this->code = $code;
		}
		else {
			$this->code = 0;
		}
	}
}

?>