<?php
App::import('Vendor', 'excel_reader2');


class AppController extends Controller {
    var $helpers = array('Ajax', 'Javascript', 'Js' => array('Jquery'), 'Mensajes', 'Form', 'Paginator','Html');
    var $components = array('RequestHandler', 'Session');
    var $layout = "encuesta";
    
        
    function beforeFilter(){
    	
    }
}

?>