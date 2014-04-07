<div class="modal-header header-ficha azul">
    <div class="botonera-header">
        <?php echo $this->Html->link("<i class='icon-white icon-remove-sign'></i>","#",array("class"=>"btn btn-inverse","data-dismiss"=>"modal","escape"=>false)) ?>
    </div>
</div>
<div class="tab-pane active" id="generarSubReporte">
<div class="well titulo-general">
	<span>Importar Usuarios</span>
</div>
<div class="well contenedor-well fondo-1">
   
    <div class="span7">
		<?php echo $this->Form->input("grupos",array("type"=>'select',"options"=>$grupos,"label"=>"Seleccione el Grupo:","empty"=>true)); ?>
	</div>
     <br><br><br><br>
</div>
 <div class="well contenedor-well fondo-1">   
    <div class="row-fluid">
        <div class="span8"><?php echo $form->create('Importar', array('action' => 'agregar_excel', 'type' => 'file'));?> </div>
        <div class="span8"> <?php echo $form->file('File'); ?></div>
        <div class="span8"><?php echo $form->submit('Upload'); ?></div>
        <div class="span8"><?php echo $form->end(); ?></div>    
    </div>

 </div>
    
