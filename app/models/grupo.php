<?php
class Grupo extends AppModel {
		
    var $primaryKey= 'id';
    var $validate = array(
                           'nombre'=>array(
                               'rule'=>'isUnique',
                               'message' => 'Este nombre de grupo ya ha sido creado.',    
                               'allowEmpty'=>false)
                    );
}
?>