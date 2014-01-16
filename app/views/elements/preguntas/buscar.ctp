<?php $tipos = array("1"=>"Texto","2"=>"Select","3"=>"Multiple Select","4"=>"Checkbox","5"=>"Area de texto") ?>

<div class="well buscar-pregunta">
	<?php echo $this->Form->create("Buscar"); ?>
	<div class="row-fluid">
		<div class="span8"><?php echo $this->Form->input("nombre",array("type"=>"text","label"=>"Nombre")); ?></div>
		<div class="span4"><?php echo $this->Form->input("tipo_id",array("type"=>"select","options"=>$tipos,"label"=>"Tipo pregunta")) ?></div>
		
	</div>
	
	<?php echo $this->Form->end(); ?>
</div>

<?php foreach($preguntas as $pregunta): ?>
<div class="row-fluid">
	<div class="span4"><?php echo $pregunta["Pregunta"]["nombre"] ?></div>
	<div class="span4"><?php echo $pregunta["Pregunta"][""] ?></div>
</div>
<?php endforeach; ?>
