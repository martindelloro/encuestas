<div class="well">
        <?php echo $this->Form->create('buscar'); ?>

    <div class="row-fluid">
        <div class="span1"><?php echo $this->Form->input("sexo",array("type"=>'select',"options"=>$sexo,"label"=>"Sexo:","empty"=>true)); ?></div>
        <div class="span4"><?php echo $this->Form->input("carrera_nombre",array("type"=>'select',"options"=>$listado,"label"=>"Nombre de Carrera:","empty"=>true)); ?></div>
        <div class="span2"><?php echo $this->Form->input("anio_emision",array("type"=>'select',"options"=>$anio_emision,"label"=>"Año de Emisión:", "empty"=>true)); ?></div>
        <div class="span2"><?php echo $this->Form->input("cohorte",array("type"=>'select',"options"=>$cohorte,"label"=>"Cohorte:", "empty"=>true)); ?></div>
    </div>
        
    <div class="row-fluid">
            <div class="span1"><?php echo $this->Form->input("promedio",array("type"=>'text',"label"=>"Promedio ","empty"=>true)); ?></div> 
        <div class="span1"><?php echo $this->Form->input("promedio_b",array("type"=>'text',"label"=>"entre:","empty"=>true)); ?></div>
            
    </div>
    <div><?php echo $this->Ajax->link("<i class='icon-search icon-white'> Buscar</i>",array('controller'=>'reportes','action'=>'buscar'),array('update'=>'resultados_reportes','before'=>'inicia_ajax()','complete'=>'fin_ajax()','escape'=>false,"with"=>"$(this).parents('form:first').serialize()","class"=>"btn btn-inverse")); 
               echo $this->Form->End(); ?></div>
</div>
<div id="resultados_reportes">
    
</div>
<?php echo $this->Js->WriteBuffer(); ?>