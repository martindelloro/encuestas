<?php echo $this->Mensajes->mostrar(); ?>

<div class="modal-header header-ficha azul">
    <div class="botonera-header">
        <?php echo $this->Html->link("<i class='icon-white icon-remove-sign'></i>","#",array("class"=>"btn btn-inverse","data-dismiss"=>"modal","escape"=>false)) ?>
    </div>
</div>

<div class="modal-body">
	<?php echo $this->Form->create("Pregunta"); ?>
		<div class="span12 well titulo-opciones">Pregunta</div>
		<div class="row-fluid">
			<div class="span8"><?php echo $this->Form->input("nombre",array("type"=>"text","label"=>"Nombre")) ?></div>
			<div class="span4"><?php echo $this->Form->input("tipo_id",array("type"=>"select","options"=>$tipos,"label"=>"Tipo de pregunta")) ?></div>
		</div>
		<div class="row-fluid">
			<div class="span12 well titulo-opciones">Opciones Select/MultipleSelect</div>
			<div class="span12"><?php echo $this->Form->input("Opcion.0.nombre",array("type"=>"text","label"=>"Nombre de la opcion")) ?></div>
		</div>
	<?php echo $this->Form->end(); ?>
</div>


<script type="text/javascript">
	$("#PreguntaTipoId").bind("onChange",function(){
			val = $(this).val();
			switch(val){
			   case 4:
			   case 5:
				   $(this).parent().insertAfter();
			}
		});
</script>